-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2023 at 02:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/* Phone Table */
CREATE TABLE `phone` (
  `id` INT,
  `kieumanhinh` VARCHAR(255),
  `dungluong` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Laptop Table */
CREATE TABLE `laptop` (
  `id` INT,
  `CPU` VARCHAR(255),
  `card` VARCHAR(255),
  `pin` VARCHAR(255),
  `khoiluong` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);

/* Tablet Table */
CREATE TABLE `tablet` (
  `id` INT,
  `kieumanhinh` VARCHAR(255),
  `dungluong` VARCHAR(255),
  `ketnoi` VARCHAR(255),
  FOREIGN KEY (`id`) REFERENCES `product`(`id`)
);
/* sample data */

INSERT INTO `product` (`name`, `price`, `man_hinh`, `luotmua`, `created_at`, `updated_at`, `deleted`, `mo_ta`, `image`, `category`)
VALUES
('Iphone 14 Pro Max', 40080000, 'Super Retina XDR', 300, '2023-03-01 09:00:00', '2023-03-01 09:45:00', 0, 'The latest flagship iPhone with cutting-edge features', 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-200x200.jpg', 'Phone'),
('Dell XPS 13', 24990000, 'InfinityEdge', 90, '2023-03-02 12:30:00', '2023-03-02 13:15:00', 0, 'Premium ultrabook for productivity and entertainment', 'https://cdn.tgdd.vn/Products/Images/44/115447/dell-xps-13-9360-99h101-core-i7-7500u-8gb-256gb-2-450x300.jpg', 'Laptop'),
('iPad Air', 15900000, 'Liquid Retina', 150, '2023-03-03 15:00:00', '2023-03-03 15:30:00', 0, 'Powerful and lightweight tablet for creative tasks', 'https://cdn.tgdd.vn/Products/Images/522/248096/ipad-air-5-wifi-grey-thumb-600x600.jpg', 'Tablet'),
('Samsung Galaxy S21', 7600000, 'Dynamic AMOLED', 250, '2023-03-04 10:45:00', '2023-03-04 11:30:00', 0, 'High-performance Android smartphone with stunning display', 'https://cdn.tgdd.vn/Products/Images/42/267211/Samsung-Galaxy-S21-FE-vang-1-2-200x200.jpg', 'Phone'),
('HP Spectre x360', 12800000, 'OLED', 80, '2023-03-05 14:00:00', '2023-03-05 14:45:00', 0, 'Convertible laptop with 4K display and powerful specs', 'https://cdn.tgdd.vn/Products/Images/44/202330/hp-spectre-x360-13-ap0087tu-i7-8565u-8gb-256gb-133-1-600x600.jpg', 'Laptop'),
('Amazon Fire HD 10', 21600000, 'Full HD', 120, '2023-03-06 16:30:00', '2023-03-06 17:00:00', 0, 'Affordable tablet for entertainment and everyday use', 'https://www.techspot.com/images/products/2019/tablets/org/2019-11-15-product-3-j_1100.webp', 'Tablet'),
('Google Pixel 6', 8900000, 'OLED', 180, '2023-03-07 11:15:00', '2023-03-07 11:45:00', 0, 'Flagship Google smartphone with impressive camera capabilities', 'https://m.media-amazon.com/images/I/61oQtjPpM-L.__AC_SX300_SY300_QL70_FMwebp_.jpg', 'Phone'),
('Lenovo ThinkPad X1 Carbon', 11100000, 'IPS', 70, '2023-03-08 13:45:00', '2023-03-08 14:15:00', 0, 'Business ultrabook with a durable and lightweight design', 'https://cdn.tgdd.vn/Products/Images/44/299799/lenovo-thinkpad-e15-gen-4-i7-21e600cpvn-glr-a-1-180x125.jpg', 'Laptop'),
('Microsoft Surface Pro 8', 25400000, 'PixelSense', 100, '2023-03-09 15:30:00', '2023-03-09 16:00:00', 0, 'Versatile 2-in-1 tablet/laptop with a high-resolution display', 'https://thegioigames.vn/wp-content/uploads/2022/10/microsoft-surface-pro-9-2-300x300.jpg', 'Tablet'),
('OnePlus 9', 10500000, 'Fluid AMOLED', 200, '2023-03-10 09:30:00', '2023-03-10 10:00:00', 0, 'OnePlus flagship smartphone with fast performance', 'https://viostore.vn/wp-content/uploads/2023/08/oneplus-ace-2v-dimensity-9000-xanh.jpg.png', 'Phone'),
('Acer Swift 5', 22890000, 'IPS', 60, '2023-03-11 12:00:00', '2023-03-11 12:30:00', 0, 'Thin and light laptop for on-the-go productivity', 'https://anphat.com.vn/media/product/42871_0357.jpg', 'Laptop'),
('Huawei MatePad Pro', 3000000, 'OLED', 130, '2023-03-12 14:45:00', '2023-03-12 15:15:00', 0, 'Premium Android tablet with stylus support', 'https://dienthoaigiakho.vn/_next/image?url=https%3A%2F%2Fcdn.dienthoaigiakho.vn%2Fphotos%2F1666256303254-ippro-11-m2-3.jpg&w=1920&q=75', 'Tablet');

INSERT INTO `phone` (`id`, `kieumanhinh`, `dungluong`)
VALUES
(1, 'Super AMOLED', '256GB'),
(4, 'Dynamic AMOLED', '128GB'),
(7, 'IPS LCD', '64GB'),
(10, 'Super Retina XDR', '512GB');

INSERT INTO `laptop` (`id`, `CPU`, `card`, `pin`, `khoiluong`)
VALUES
(2, 'AMD Ryzen 7', 'NVIDIA GTX 1660 Ti', '8 hours', '1.8 kg'),
(5, 'Intel i5', 'Intel Iris Xe', '12 hours', '1.3 kg'),
(8, 'AMD Ryzen 5', 'NVIDIA RTX 3050', '10 hours', '2.0 kg'),
(11, 'Intel i9', 'NVIDIA RTX 3070', '6 hours', '2.5 kg');

INSERT INTO `tablet` (`id`, `kieumanhinh`, `dungluong`, `ketnoi`)
VALUES
(3, 'AMOLED', '256GB', '4G LTE, Wi-Fi'),
(6, 'IPS LCD', '128GB', 'Wi-Fi'),
(9, 'Super Retina XDR', '512GB', '5G, Wi-Fi'),
(12, 'TFT', '64GB', 'Wi-Fi, Bluetooth');

/* Cart Table */
CREATE TABLE `cart` (
  `userID` INT NOT NULL,
  `productID` INT(11) NOT NULL,
  `quantity` INT NOT NULL,
  FOREIGN KEY (`userID`) REFERENCES `User`(`user_id`),
  FOREIGN KEY (`productID`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--
CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `CPU` varchar(255) DEFAULT NULL,
  `card` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `khoiluong` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `image`) VALUES
(1, 'Ipad 7 sản phẩm hot nhất năm nay', 'ĐẶC ĐIỂM NỔI BẬT\nThiết kế phẳng mạnh mẽ - Gia công từ kim loại bền bỉ, phong cách hiện đại, sang trọng\nHiệu năng mạnh mẽ với CPU thế hệ mới - chip Apple M2 trong đó có 8 lõi cùng RAM 8 GB\nMàn hình sáng hơn, hỗ trợ nội dung HDR tốt hơn - 11 inch LCD, 600 nits\nThoải mái sáng tạo và thiết kế - Nhận diện bút Apple Pencil 2 siêu nhanh và nhạy', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-pro-13-select-wifi-spacegray-202210-02.jpg\r\n'),
(2, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(3, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(4, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C', 'ĐẶC ĐIỂM NỔI BẬT\nTích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội\nCông nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể\nChống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc\nChống nước chuẩn IPX54 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple-airpods-pro-2-usb-c_1_.png'),
(5, 'Apple Watch Series 9 45mm (GPS) viền nhôm', 'ĐẶC ĐIỂM NỔI BẬT\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
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
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `name`, `dateRelease`, `description`, `views`, `image`) VALUES
(1, 'Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 16GB 1TB', '2023-11-02', 'ĐẶC ĐIỂM NỔI BẬT\r\nChip M1 Pro 10 nhân  - Thoả sức sáng tạo với khả năng render video, xử lý đồ hoạ 3D cực đỉnh\r\nSSD 512GB - Tăng tốc toàn diện máy tính, khởi động máy và các phần mềm nặng chỉ trong vài giây\r\nMàn hình 14 inch Liquid Retina XDR (3456 x 2234) - Chất lượng hình ảnh sắc nét, màu sắc rực rỡ, sống động\r\nĐa dạng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack 3.5 mm\r\nMàn hình Retina - Thưởng thức từng bộ phim với chất lượng hình ảnh chân thật nhất\r\nWebcam độ phân giải 1080 - Thoả sức trò chuyện qua Google meet, line.', 5, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/m/a/mac_pro.png'),
(2, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C', '2023-11-21', 'ĐẶC ĐIỂM NỔI BẬT\r\nTích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội\r\nCông nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể\r\nChống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc\r\nChống nước chuẩn IPX54 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi', 1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple-airpods-pro-2-usb-c_1_.png'),
(3, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-22', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,.', 3, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png'),
(4, 'Ipad air 7 sản phẩm hot nhất năm 2024', '2023-01-02', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế phẳng mạnh mẽ - Gia công từ kim loại bền bỉ, phong cách hiện đại, sang trọng\r\nHiệu năng mạnh mẽ với CPU thế hệ mới - chip Apple M2 trong đó có 8 lõi cùng RAM 8 GB\r\nMàn hình sáng hơn, hỗ trợ nội dung HDR tốt hơn - 11 inch LCD, 600 nits\r\nThoải mái sáng tạo và thiết kế - Nhận diện bút Apple Pencil 2 siêu nhanh và nhạy !', 12, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-pro-2021-11inch-grey_2.jpg'),
(7, 'Apple Watch Series 9 45mm (GPS) viền nhôm', '2023-11-19', 'ĐẶC ĐIỂM NỔI BẬT\r\nTrang bị chip S9 SiP mạnh mẽ hỗ trợ xử lý mọi tác vụ nhanh chóng với nhiều tiện ích\r\nDễ dàng kết nối, nghe gọi, trả lời tin nhắn ngay trên cổ tay\r\nTrang bị nhiều tính năng sức khỏe như: Đo nhịp tim, điện tâm đồ, đo chu kỳ kinh nguyệt,...\r\nĐộ sáng tối đa lên tới 2000 nit, dễ xem màn hình ngay dưới ánh nắng gắt\r\nTích hợp nhiều chế độ tập luyện với các môn thể thao như: Bơi lội, chạy bộ, đạp xe,...', 5, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/a/p/apple_lte_3__1.png'),
(8, 'Macbook Pro 2022', '2023-01-02', 'ngon', 0, 'https://cdn.dienthoaigiakho.vn/photos/1658484826130-mb-pro-m2-256-gr.jpg'),
(9, 'Lenovo ThinkPad X1 Carbon Gen 11 – Core i7-1370P / RAM 64GB / SSD 1TB / OLED', '2023-11-30', 'Tình trạng: New 100%, Fullbox, Hàng chính hãng Lenovo VN\r\nBảo hành 12 tháng Lenovo VN\r\nCPU: 13th Generation Intel Core i7-1370P (24MB Cache, 3.90GHZ up to 5.2GHz, 14 cores, 20 Threads)\r\nRAM: 64GB LPDDR5\r\nSSD: 1TB SSD NVMe PCIe\r\nMàn hình: 14.0″ 2.8K (2880×1800) OLED Dolby Vision AGARAS ,100% DCI-P3 , EyeSafe , SDR 400nits / HDR 500nits\r\nCard đồ hoạ: Intel® Iris Xe Graphics\r\nHệ điều hành: Windows 10/ 11\r\nTrọng lượng: 1.12Kg', 0, 'https://macstores.vn/wp-content/uploads/2023/04/thinkpad_x1_carbon_gen_11_1.png'),
(10, 'Laptop Gaming đáng mua nhất: Asus ROG Zephyrus G15', '2023-12-01', '- CPU: AMD Ryzen 7 5800G – 8 5900HS\r\n\r\n- Đồ họa: NVIDIA GeForce RTX 3060 - 3080\r\n\r\n- RAM: 32GB\r\n\r\n- Bộ nhớ: 1TB\r\n\r\n- Màn hình: 15,6 inch QHD\r\n\r\nNếu nhắc đến laptop gaming chất lượng thì Asus ROG Zephyrus là dòng sản phẩm cực kỳ nổi tiếng. Trong đó, Asus ROG Zephyrus G15 là cái tên mới nhất có mặt trên thị trường. Điểm cộng của chiếc laptop này chính là CPU AMD Ryzen mạnh mẽ cùng card đồ họa Nvidia RTX 3000 thế hệ mới nhất cho phép hiển thị xuất sắc.', 0, 'https://hoanghapc.vn/media/news/1604_top-10-laptop-gaming-9.jpg'),
(11, 'Laptop Văn Phòng Mỏng Nhẹ, Giá Tốt Nhất 2023:\r\nLaptop Dell Inspiron 15 3511 i5-1135G7/8GB/512GB/Win11 (70270650)', '2023-12-02', 'Trải nghiệm hình ảnh rõ nét, sống động trên màn hình 15.6 inch FHD\r\nBộ vi xử lý Intel Core i5-1135G7 giúp xử lý tốt tác vụ học tập, văn phòng\r\nRAM 8GB DDR4 giúp laptop đa nhiệm mượt mà, ổn định, hạn chế giật lag\r\nỔ cứng SSD 512GB giúp truy xuất dữ liệu nhanh, lưu trữ nhiều dữ liệu', 0, 'https://cdn.nguyenkimmall.com/images/thumbnails/600/336/detailed/776/10051047-laptop-dell-inspiron-15-3511-i5-1135g7-70270650-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `kieumanhinh` varchar(255) DEFAULT NULL,
  `dungluong` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `man_hinh` varchar(255) DEFAULT NULL,
  `luotmua` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `mo_ta` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `kieumanhinh` varchar(255) DEFAULT NULL,
  `phamtram_giam` int(11) DEFAULT NULL,
  `dungluong` varchar(255) DEFAULT NULL,
  `ketnoi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `avatar` varchar(70) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `user_name`, `password`, `email`, `first_name`, `last_name`, `phone`, `avatar`, `created_at`, `modified_at`) VALUES
(1, 'john_doe', 'password123', 'john.doe@example.com', 'John', 'Doe', 123456789, NULL, '2023-11-30 01:12:23', '2023-11-30 01:12:23'),
(2, 'jane_smith', 'securepass', 'jane.smith@example.com', 'Jane', 'Smith', 987654321, NULL, '2023-11-30 01:12:23', '2023-11-30 01:12:23'),
(3, 'bob_jones', 'pass123', 'bob.jones@example.com', 'Bob', 'Jones', 555555555, NULL, '2023-11-30 01:12:23', '2023-11-30 01:12:23'),
(4, 'tri', '123456789', 'tri@gmail.com', NULL, NULL, NULL, NULL, '2023-11-30 03:45:12', '2023-11-30 03:45:12'),
(5, 'tri123', '11111111', 'tri123@gmail.com', NULL, NULL, NULL, NULL, '2023-12-02 01:10:01', '2023-12-02 01:10:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `User` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`);

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Constraints for table `tablet`
--
ALTER TABLE `tablet`
  ADD CONSTRAINT `tablet_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);
COMMIT;