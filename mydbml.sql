-- Create a database named "pet_care_portal" (you can change the name if desired)
CREATE DATABASE IF NOT EXISTS pet_care_portal;

-- Switch to the created database
USE pet_care_portal;

-- Create a table named "articles" to store article information
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
