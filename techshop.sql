DROP DATABASE IF EXISTS techshop;

CREATE DATABASE techshop;

USE techshop;

CREATE TABLE User (
    user_id INT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    password TEXT NOT NULL,
    email VARCHAR(40) NOT NULL,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    phone INT,
    avatar VARCHAR(70),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE User 
MODIFY COLUMN user_id INT AUTO_INCREMENT;

-- -- Create the User_payment table
-- CREATE TABLE User_payment (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     user_id INT,
--     payment_type VARCHAR(255),
--     provider VARCHAR(255),
--     account_no BIGINT, -- Change the data type to BIGINT
--     expiry DATE,
--     UNIQUE(account_no),
--     CONSTRAINT fk_user_payment_user FOREIGN KEY (user_id) REFERENCES User(user_id)
-- );




-- Sample data for User table
INSERT INTO User (user_name, password, email, first_name, last_name, phone)
VALUES
    ('john_doe', 'password123', 'john.doe@example.com', 'John', 'Doe', 123456789),
    ('jane_smith', 'securepass', 'jane.smith@example.com', 'Jane', 'Smith', 987654321),
    ('bob_jones', 'pass123', 'bob.jones@example.com', 'Bob', 'Jones', 555555555);

-- -- Sample data for User_payment table
-- INSERT INTO User_payment (user_id, payment_type, provider, account_no, expiry)
-- VALUES
--     (1, 'Credit Card', 'VISA', 1234567890123456, '2023-12-31'),
--     (2, 'PayPal', 'PayPal Inc.', 9876543210, '2024-06-30'),
--     (3, 'Debit Card', 'MasterCard', 5555444433331111, '2023-09-15');

