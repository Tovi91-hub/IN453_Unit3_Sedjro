-- Create the database
CREATE DATABASE ToviLife;
USE ToviLife;
CREATE TABLE roles (role_id INT AUTO_INCREMENT PRIMARY KEY,
			role_name VARCHAR(50) NOT NULL UNIQUE
            );
-- Tables users
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role_id INT DEFAULT 2,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(role_id)
);

-- Table: login_logs
CREATE TABLE IF NOT EXISTS login_logs (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    success BOOLEAN,
    ip_address VARCHAR(45),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Insert default roles
INSERT INTO roles (role_name) VALUES ('admin'), ('user');

-- Insert a test user manually (use your actual hash output):
INSERT INTO users (username, email, password_hash, role_id)
VALUES ('testuser', 'testuser@tovilife.com', '$2y$10$HkJ8zXzO3vVw...hash...', 2);
