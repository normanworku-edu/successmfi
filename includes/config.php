<?php
/**
 * Database Configuration
 * Success Microfinance Institution S.C. Website
 */

// Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'success_microfinance');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// Attempt to connect to the database
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Set character set to utf8mb4
    $pdo->exec("SET NAMES utf8mb4");
    
} catch(PDOException $e) {
    // Log error message
    error_log("Connection failed: " . $e->getMessage());
    
    // Display user-friendly error message
    die("Database connection failed. Please try again later.");
}
