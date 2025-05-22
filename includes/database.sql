-- Create database
CREATE DATABASE IF NOT EXISTS success_microfinance
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the database
USE success_microfinance;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role VARCHAR(20) NOT NULL DEFAULT 'editor',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- News table
CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title_en VARCHAR(255) NOT NULL,
    title_am VARCHAR(255) NOT NULL,
    content_en TEXT NOT NULL,
    content_am TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    published_date DATE NOT NULL,
    status TINYINT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_en VARCHAR(255) NOT NULL,
    name_am VARCHAR(255) NOT NULL,
    description_en TEXT NOT NULL,
    description_am TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    requirements_en TEXT NOT NULL,
    requirements_am TEXT NOT NULL,
    image VARCHAR(255),
    status TINYINT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Content table
CREATE TABLE IF NOT EXISTS content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section VARCHAR(50) NOT NULL,
    `key` VARCHAR(100) NOT NULL,
    value_en TEXT NOT NULL,
    value_am TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY section_key (section, `key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Partners table
CREATE TABLE IF NOT EXISTS partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    logo VARCHAR(255) NOT NULL,
    url VARCHAR(255),
    status TINYINT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Media table
CREATE TABLE IF NOT EXISTS media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    path VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    size INT NOT NULL,
    uploaded_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (uploaded_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert default admin user
INSERT INTO users (username, password, email, role) VALUES 
('admin', '$2y$10$8zUlxQxkK2h.LAvkXu.GIeYwGUYfYBXRHQfEAJqOVTKNNvgwQkYl2', 'admin@successmfi.com', 'admin');

-- Insert sample content
INSERT INTO content (section, `key`, value_en, value_am) VALUES
('hero', 'title', 'SUCCESS MICROFINANCE INSTITUTION S.C.', 'የስኬት ማይክሮፋይናንስ ተቋም'),
('hero', 'tagline', 'Becoming best, inclusive, sustainable economic and social vehicle in poverty alleviation efforts in Ethiopia and East Africa by 2040.', 'በ2040...'),
('about', 'vision', 'Becoming best, inclusive, sustainable economic and social vehicle...', 'በ2040...'),
('about', 'mission', 'Providing microfinance services tailored to client needs...', 'የረጅም ጊዜ...'),
('about', 'core_values', 'Responsibility, Staff Commitment, Client Understanding...', 'ኃላፊነት፣...');

-- Insert sample products
INSERT INTO products (name_en, name_am, description_en, description_am, category, requirements_en, requirements_am, status) VALUES
('Regular Saving', 'መደበኛ ቁጠባ', 'A flexible savings account that allows you to save at your own pace while earning competitive interest.', 'ተወዳዳሪ ወለድ እያገኙ በራስዎ ፍጥነት እንዲቆጥቡ የሚያስችል ተለዋዋጭ የቁጠባ ሂሳብ።', 'savings', 'Valid ID, Minimum initial deposit, Completed application form', 'ዋጋ ያለው መታወቂያ፣ ዝቅተኛ የመጀመሪያ ተቀማጭ፣ የተሞላ የማመልከቻ ቅጽ', 1),
('Group Saving', 'የቡድን ቁጠባ', 'Designed for community groups to save together and access larger loan opportunities.', 'የማህበረሰብ ቡድኖች አብረው እንዲቆጥቡ እና ትልቅ የብድር እድሎችን እንዲያገኙ የተነደፈ።', 'savings', 'Group registration, Minimum 5 members, Group constitution, Regular meeting schedule', 'የቡድን ምዝገባ፣ ቢያንስ 5 አባላት፣ የቡድን ህገ-ደንብ፣ መደበኛ የስብሰባ መርሃ ግብር', 1),
('Home Construction Loan', 'የቤት ግንባታ ብድር', 'Financing solution for building or renovating your home with flexible repayment terms.', 'ቤትዎን ለመገንባት ወይም ለማደስ ከተለዋዋጭ የመክፈያ ሁኔታዎች ጋር የገንዘብ መፍትሄ።', 'loans', 'Land ownership document, Construction plan, Cost estimate, Income verification', 'የመሬት ባለቤትነት ሰነድ፣ የግንባታ እቅድ፣ የወጪ ግምት፣ የገቢ ማረጋገጫ', 1),
('Business Loan', 'የንግድ ብድር', 'Capital for starting or expanding your business with competitive interest rates.', 'ንግድዎን ለመጀመር ወይም ለማስፋፋት ከተወዳዳሪ የወለድ መጠኖች ጋር ካፒታል።', 'loans', 'Business plan, Trade license, 6 months business history, Collateral (for larger loans)', 'የንግድ እቅድ፣ የንግድ ፈቃድ፣ የ6 ወራት የንግድ ታሪክ፣ ዋስትና (ለትልቅ ብድሮች)', 1),
('Salaried Consumption Loan', 'የደመወዝተኛ ፍጆታ ብድር', 'Quick access to funds for personal needs with repayment directly from your salary.', 'ከደመወዝዎ በቀጥታ ከሚከፈል ክፍያ ጋር ለግል ፍላጎቶች ፈጣን የገንዘብ ተደራሽነት።', 'loans', 'Employment verification, 3 months pay slips, Employer guarantee letter, Bank statement', 'የቅጥር ማረጋገጫ፣ የ3 ወራት የክፍያ ደረሰኞች፣ የአሰሪ ዋስትና ደብዳቤ፣ የባንክ መግለጫ', 1);

-- Insert sample partners
INSERT INTO partners (name, logo, url, status) VALUES
('Awash Bank', 'partner1.png', 'https://www.awashbank.com', 1),
('Commercial Bank of Ethiopia', 'partner2.png', 'https://www.combanketh.et', 1),
('GLOBAL Bank', 'partner3.png', 'https://www.globalbank.com', 1),
('Bank of Abyssinia', 'partner4.png', 'https://www.bankofabyssinia.com', 1);

-- Insert sample news (fixed the last broken line)
INSERT INTO news (title_en, title_am, content_en, content_am, author, image, published_date, status) VALUES
('New Branch Opening in Addis Ababa', 'በአዲስ አበባ አዲስ ቅርንጫፍ መክፈት', 'We are excited to announce the opening...', 'በአዲስ አበባ...', 'Admin Team', 'news1.jpg', '2025-05-15', 1),
('Financial Literacy Workshop Series', 'የፋይናንስ እውቀት የሥልጠና ትምህርቶች', 'We’ve launched a new workshop series...', 'አዲስ የሥልጠና...', 'Training Department', 'news2.jpg', '2025-05-18', 1);
