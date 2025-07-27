-- SQL schema for client database

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE theme (
    id INT PRIMARY KEY DEFAULT 1,
    name VARCHAR(50) NOT NULL,
    version VARCHAR(20) NOT NULL
);

CREATE TABLE sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module VARCHAR(50) NOT NULL,
    position INT NOT NULL
);

CREATE TABLE content_slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    caption TEXT
);

CREATE TABLE settings (
    id INT PRIMARY KEY DEFAULT 1,
    site_title VARCHAR(100),
    maintenance TINYINT(1) DEFAULT 0
);

CREATE TABLE custom_css (
    id INT PRIMARY KEY DEFAULT 1,
    css TEXT
);

CREATE TABLE custom_js (
    id INT PRIMARY KEY DEFAULT 1,
    js TEXT
);
