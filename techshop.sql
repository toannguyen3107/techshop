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

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
