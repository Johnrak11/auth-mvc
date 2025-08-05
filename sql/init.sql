CREATE DATABASE IF NOT EXISTS auth_demo;

USE auth_demo;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
  users (full_name, username, password, email)
VALUES
  (
    'John Doe',
    'johndoe',
    SHA2('password123', 256),
    'john@example.com'
  );