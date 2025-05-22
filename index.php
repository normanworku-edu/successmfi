<?php
/**
 * Index file with multilingual support
 * Success Microfinance Institution S.C. Website
 */

// Include language handler
require_once 'includes/language.php';

// Get current language
$currentLang = getCurrentLanguage();
?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php t('hero.title', 'Success Microfinance Institution S.C.'); ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">
    <!-- Header Section -->
    <header id="header" class="fixed-top">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#hero">
                    <img src="images/logo.png" alt="Success Microfinance Institution Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero"><?php t('navigation.home'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><?php t('navigation.about'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services"><?php t('navigation.services'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news"><?php t('navigation.news'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partners"><?php t('navigation.partners'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><?php t('navigation.contact'); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-globe"></i> <?php t('navigation.language'); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item <?php echo $currentLang === 'en' ? 'active' : ''; ?>" href="?lang=en"><?php t('navigation.english'); ?></a></li>
                                <li><a class="dropdown-item <?php echo $currentLang === 'am' ? 'active' : ''; ?>" href="?lang=am"><?php t('navigation.amharic'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-white mb-4"><?php t('hero.title'); ?></h1>
                    <p class="text-white mb-5 lead"><?php t('hero.tagline'); ?></p>
                    <a href="#about" class="btn btn-primary btn-lg"><?php t('hero.cta'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title"><?php t('about.title'); ?></h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 about-card">
                        <div class="card-body text-center">
                            <div class="icon-box">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="card-title"><?php t('about.vision_title'); ?></h3>
                            <p class="card-text"><?php t('about.vision_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 about-card">
                        <div class="card-body text-center">
                            <div class="icon-box">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="card-title"><?php t('about.mission_title'); ?></h3>
                            <p class="card-text"><?php t('about.mission_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 about-card">
                        <div class="card-body text-center">
                            <div class="icon-box">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3 class="card-title"><?php t('about.values_title'); ?></h3>
                            <p class="card-text"><?php t('about.values_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title"><?php t('services.title'); ?></h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            
            <!-- Savings Products -->
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="service-category"><?php t('services.savings_category'); ?></h3>
                </div>
            </div>
            <div class="row">
                <?php
                // In a real implementation, this would fetch from database
                // For now, using static content
                ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Regular Saving</h4>
                            <h5 class="card-subtitle mb-3 text-muted">መደበኛ ቁጠባ</h5>
                            <p class="card-text">A flexible savings account that allows you to save at your own pace while earning competitive interest.</p>
                            <h5><?php t('services.requirements'); ?></h5>
                            <ul>
                                <li>Valid ID</li>
                                <li>Minimum initial deposit</li>
                                <li>Completed application form</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Group Saving</h4>
                            <h5 class="card-subtitle mb-3 text-muted">የቡድን ቁጠባ</h5>
                            <p class="card-text">Designed for community groups to save together and access larger loan opportunities.</p>
                            <h5><?php t('services.requirements'); ?></h5>
                            <ul>
                                <li>Group registration</li>
                                <li>Minimum 5 members</li>
                                <li>Group constitution</li>
                                <li>Regular meeting schedule</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Loan Products -->
            <div class="row mb-4 mt-5">
                <div class="col-12">
                    <h3 class="service-category"><?php t('services.loans_category'); ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Home Construction Loan</h4>
                            <h5 class="card-subtitle mb-3 text-muted">የቤት ግንባታ ብድር</h5>
                            <p class="card-text">Financing solution for building or renovating your home with flexible repayment terms.</p>
                            <h5><?php t('services.requirements'); ?></h5>
                            <ul>
                                <li>Land ownership document</li>
                                <li>Construction plan</li>
                                <li>Cost estimate</li>
                                <li>Income verification</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Business Loan</h4>
                            <h5 class="card-subtitle mb-3 text-muted">የንግድ ብድር</h5>
                            <p class="card-text">Capital for starting or expanding your business with competitive interest rates.</p>
                            <h5><?php t('services.requirements'); ?></h5>
                            <ul>
                                <li>Business plan</li>
                                <li>Trade license</li>
                                <li>6 months business history</li>
                                <li>Collateral (for larger loans)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Salaried Consumption Loan</h4>
                            <h5 class="card-subtitle mb-3 text-muted">የደመወዝተኛ ፍጆታ ብድር</h5>
                            <p class="card-text">Quick access to funds for personal needs with repayment directly from your salary.</p>
                            <h5><?php t('services.requirements'); ?></h5>
                            <ul>
                                <li>Employment verification</li>
                                <li>3 months pay slips</li>
                                <li>Employer guarantee letter</li>
                                <li>Bank statement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title"><?php t('news.title'); ?></h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="images/news1.jpg" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <div class="news-date">May 15, 2025</div>
                            <h4 class="card-title">New Branch Opening in Addis Ababa</h4>
                            <p class="card-text">We are excited to announce the opening of our newest branch in the heart of Addis Ababa, expanding our services to more communities.</p>
                            <div class="news-author"><?php t('news.by'); ?> Admin Team</div>
                            <a href="#" class="btn btn-outline-primary mt-3"><?php t('news.read_more'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="images/news2.jpg" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <div class="news-date">April 28, 2025</div>
                            <h4 class="card-title">Financial Literacy Workshop Series</h4>
                            <p class="card-text">Join our upcoming workshop series on financial literacy, designed to help community members build better money management skills.</p>
                            <div class="news-author"><?php t('news.by'); ?> Education Department</div>
                            <a href="#" class="btn btn-outline-primary mt-3"><?php t('news.read_more'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="images/news3.jpg" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <div class="news-date">April 10, 2025</div>
                            <h4 class="card-title">New Agricultural Loan Program</h4>
                            <p class="card-text">Success Microfinance launches specialized agricultural loan program to support farmers with seasonal financing needs.</p>
                            <div class="news-author"><?php t('news.by'); ?> Product Development Team</div>
                            <a href="#" class="btn btn-outline-primary mt-3"><?php t('news.read_more'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title"><?php t('partners.title'); ?></h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-3 mb-4 text-center">
                    <div class="partner-logo">
                        <img src="images/partner1.png" alt="Awash Bank" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <div class="partner-logo">
                        <img src="images/partner2.png" alt="Commercial Bank of Ethiopia" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <div class="partner-logo">
                        <img src="images/partner3.png" alt="GLOBAL Bank" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <div class="partner-logo">
                        <img src="images/partner4.png" alt="Bank of Abyssinia" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title"><?php t('contact.title'); ?></h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="contact-info">
                        <h3><?php t('contact.get_in_touch'); ?></h3>
                        <p><?php t('contact.contact_intro'); ?></p>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4><?php t('contact.email_title'); ?></h4>
                                <p>sumfihrsc@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4><?php t('contact.phone_title'); ?></h4>
                                <p>011-668-69-11</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4><?php t('contact.address_title'); ?></h4>
                                <p>Addis Ababa, Ethiopia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="<?php t('contact.form_name'); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="<?php t('contact.form_email'); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="subject" placeholder="<?php t('contact.form_subject'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" rows="5" placeholder="<?php t('contact.form_message'); ?>" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php t('contact.form_submit'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126766.39636892315!2d38.6530791!3d8.9806034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2sus!4v1653060457623!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="footer-info">
                            <h3>Success Microfinance Institution S.C.</h3>
                            <p>
                                Addis Ababa, Ethiopia<br>
                                <strong>Phone:</strong> 011-668-69-11<br>
                                <strong>Email:</strong> sumfihrsc@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h4><?php t('footer.quick_links'); ?></h4>
                        <ul class="footer-links">
                            <li><a href="#hero"><?php t('navigation.home'); ?></a></li>
                            <li><a href="#about"><?php t('navigation.about'); ?></a></li>
                            <li><a href="#services"><?php t('navigation.services'); ?></a></li>
                            <li><a href="#news"><?php t('navigation.news'); ?></a></li>
                            <li><a href="#contact"><?php t('navigation.contact'); ?></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h4><?php t('footer.our_services'); ?></h4>
                        <ul class="footer-links">
                            <li><a href="#services"><?php t('services.savings_category'); ?></a></li>
                            <li><a href="#services"><?php t('services.loans_category'); ?></a></li>
                            <li><a href="#services">Financial Advisory</a></li>
                            <li><a href="#services">Business Support</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h4><?php t('footer.legal'); ?></h4>
                        <ul class="footer-links">
                            <li><a href="#"><?php t('footer.privacy_policy'); ?></a></li>
                            <li><a href="#"><?php t('footer.terms_of_service'); ?></a></li>
                            <li><a href="#"><?php t('footer.sitemap'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <strong><span>Success Microfinance Institution S.C.</span></strong>. <?php t('footer.all_rights_reserved'); ?>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>
