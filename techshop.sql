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

/* Product Table */
CREATE TABLE `product` (
  `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` VARCHAR(255),
  `price` INT,
  `man_hinh` VARCHAR(255),
  `luotmua` INT,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  `deleted` INT,
  `mo_ta` VARCHAR(1000),
  `image` VARCHAR(1000),
  `category` VARCHAR(255)
);

/* Phone Table */
CREATE TABLE `phone` (
  `id` INT PRIMARY KEY NOT NULL,
  `kieumanhinh` VARCHAR(255),
  `dungluong` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Laptop Table */
CREATE TABLE `laptop` (
  `id` INT PRIMARY KEY NOT NULL,
  `CPU` VARCHAR(255),
  `card` VARCHAR(255),
  `pin` VARCHAR(255),
  `khoiluong` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Tablet Table */
CREATE TABLE `tablet` (
  `id` INT PRIMARY KEY NOT NULL,
  `kieumanhinh` VARCHAR(255),
  `phamtram_giam` INT,
  `dungluong` VARCHAR(255),
  `ketnoi` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Cart Table */
CREATE TABLE `cart` (
  `userID` INT NOT NULL,
  `productID` INT(11) NOT NULL,
  `quantity` INT NOT NULL,
  FOREIGN KEY (`userID`) REFERENCES `User`(`user_id`),
  FOREIGN KEY (`productID`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `cart`
  ADD PRIMARY KEY (`userID`, `productID`);