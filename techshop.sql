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
  CONSTRAINT fk_phone FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Laptop Table */
CREATE TABLE `laptop` (
  `id` INT PRIMARY KEY NOT NULL,
  `CPU` VARCHAR(255),
  `card` VARCHAR(255),
  `pin` VARCHAR(255),
  `khoiluong` VARCHAR(255),
  CONSTRAINT fk_laptop FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Tablet Table */
CREATE TABLE `tablet` (
  `id` INT PRIMARY KEY NOT NULL,
  `kieumanhinh` VARCHAR(255),
  `phamtram_giam` INT,
  `dungluong` VARCHAR(255),
  `ketnoi` VARCHAR(255),
  CONSTRAINT fk_tablet FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Cart Table */
CREATE TABLE `cart` (
  `userID` INT NOT NULL,
  `productID` INT(11) NOT NULL,
  `quantity` INT NOT NULL,
  CONSTRAINT fk_cart_user FOREIGN KEY (`userID`) REFERENCES `User`(`user_id`),
  CONSTRAINT fk_cart_product FOREIGN KEY (`productID`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `cart`
  ADD PRIMARY KEY (`userID`, `productID`);

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `image`) VALUES
(1, 'Ipad 7 sản phẩm hot nhất năm nay', 'ĐẶC ĐIỂM NỔI BẬT\nThiết kế phẳng mạnh mẽ - Gia công từ kim loại bền bỉ, phong cách hiện đại, sang trọng\nHiệu năng mạnh mẽ với CPU thế hệ mới - chip Apple M2 trong đó có 8 lõi cùng RAM 8 GB\nMàn hình sáng hơn, hỗ trợ nội dung HDR tốt hơn - 11 inch LCD, 600 nits\nThoải mái sáng tạo và thiết kế - Nhận diện bút Apple Pencil 2 siêu nhanh và nhạy', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-pro-13-select-wifi-spacegray-202210-02.jpg\r\n'),
(2, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(3, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(4, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C', 'ĐẶC ĐIỂM NỔI BẬT\nTích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội\nCông nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể\nChống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc\nChống nước chuẩn IPX54 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple-airpods-pro-2-usb-c_1_.png'),
(5, 'Apple Watch Series 9 45mm (GPS) viền nhôm', 'ĐẶC ĐIỂM NỔI BẬT\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dateRelease` date NOT NULL,
  `description` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `paper`
--

INSERT INTO `paper` (`id`, `name`, `dateRelease`, `description`, `views`, `image`) VALUES
(1, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', '2023-11-20', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line', 2, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(2, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C', '2023-11-21', 'ĐẶC ĐIỂM NỔI BẬT\r\nTích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội\r\nCông nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể\r\nChống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc\r\nChống nước chuẩn IPX54 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi', 1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple-airpods-pro-2-usb-c_1_.png'),
(3, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-22', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 3, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png'),
(4, 'Ipad air 7 sản phẩm hot nhất năm nay', '2023-11-23', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế phẳng mạnh mẽ - Gia công từ kim loại bền bỉ, phong cách hiện đại, sang trọng\r\nHiệu năng mạnh mẽ với CPU thế hệ mới - chip Apple M2 trong đó có 8 lõi cùng RAM 8 GB\r\nMàn hình sáng hơn, hỗ trợ nội dung HDR tốt hơn - 11 inch LCD, 600 nits\r\nThoải mái sáng tạo và thiết kế - Nhận diện bút Apple Pencil 2 siêu nhanh và nhạy', 4, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-pro-13-select-wifi-spacegray-202210-02.jpg\r\n'),
(5, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-24', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 0, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png'),
(6, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-18', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 10, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png'),
(7, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-19', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 3, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;





-- insert 8, 9
INSERT INTO product (id, name, price, man_hinh, luotmua, created_at, updated_at, deleted, mo_ta, image, category)
VALUES
    (8, 'MacBook Air', 1200, 'Retina', 30, NOW(), NOW(), 0, 'Lightweight laptop with Retina display', 'https://www.apple.com//v/macbook-air/q/images/overview/compare/compare_mba_m1__dsgh2hoxlkae_large.png', 'Laptop');

-- Ensure there is an entry in the product table with the specified ID (id = 9)
INSERT INTO product (id, name, price, man_hinh, luotmua, created_at, updated_at, deleted, mo_ta, image, category)
VALUES
    (9, 'Aus TUF', 1000, 'IPS', 20, NOW(), NOW(), 0, 'Laptop with powerful specifications', 'https://cdn.tgdd.vn/Products/Images/44/304867/asus-tuf-gaming-f15-fx506hf-i5-hn014w-1.jpg', 'Laptop');

-- Now, you can insert data into the laptop table
INSERT INTO laptop (id, CPU, card, pin, khoiluong)
VALUES
    (8, 'M1', 'Integrated', '15 hours', '1.2kg'),
    (9, 'A15 Bionic', 'Integrated', 'N/A', 'N/A');
-- Inserting more data into the product table
INSERT INTO product (name, price, man_hinh, luotmua, created_at, updated_at, deleted, mo_ta, image, category)
VALUES
    ('Samsung Galaxy S21', 800, 'Dynamic AMOLED', 50, NOW(), NOW(), 0, 'High-end Android smartphone', 'https://cdn.tgdd.vn/Products/Images/42/267211/samsung-galaxy-s21-fe-1.jpg', 'Phone'),
    ('Samsung Galaxy Tab S7', 600, 'Super AMOLED', 40, NOW(), NOW(), 0, 'Android tablet with S Pen support', 'https://cdn.tgdd.vn/Products/Images/522/225031/samsung-galaxy-tab-s7-vang-dong-1-org.jpg', 'Tablet'),
    ('Dell XPS 13', 1500, 'InfinityEdge', 25, NOW(), NOW(), 0, 'Powerful laptop for productivity', 'https://cdn.tgdd.vn/Products/Images/44/314838/dell-xps-13-plus-9320-i5-71013325-1.jpg', 'Laptop'),
    ('AirPods Max', 550, 'Over-ear', 30, NOW(), NOW(), 0, 'Premium over-ear headphones', 'https://cdn.tgdd.vn/Products/Images/54/315014/tai-nghe-bluetooth-airpods-pro-2nd-gen-usb-c-charge-apple-1.jpg', 'Accessory');

-- Inserting corresponding entries into the phone table
INSERT INTO phone (id, kieumanhinh, dungluong)
VALUES
    (8, 'Dynamic AMOLED', '128GB'),
    (10, 'Super AMOLED', '256GB');

-- Inserting corresponding entries into the tablet table
INSERT INTO tablet (id, kieumanhinh, phamtram_giam, dungluong, ketnoi)
VALUES
    (8, 'Super AMOLED', 8, '256GB', 'Wi-Fi'),
    (10, 'LCD', 12, '128GB', 'Wi-Fi + Cellular');

-- Inserting corresponding entries into the laptop table
INSERT INTO laptop (id, CPU, card, pin, khoiluong)
VALUES
    (10, 'Intel Core i7', 'Integrated', '10 hours', '1.2kg'),
    (11, 'AMD Ryzen 5', 'Integrated', 'N/A', '1.5kg');


