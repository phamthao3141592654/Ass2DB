CREATE DATABASE HOTEL_DB;
USE HOTEL_DB;

CREATE TABLE `admin` (
  username varchar(30) PRIMARY KEY,
  `password` varchar(30) NOT NULL,
  fullname varchar(50) NOT NULL,
  phone varchar(10) UNIQUE,
  exp_year int NOT NULL
);

-- insert value
INSERT INTO `admin`
VALUES ('tringuyen', '123456', 'le tri nguyen', '0963676377', 2),
    ('admin1', '654321', 'le nguyen', '0355578787', 21),
    ('admin2', 'xzcxzc', 'le minh nguyen', '0123456789', 5),
    ('admin3', 'gfgfdg', 'le ha nguyen', '0998874562', 7);

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `rooms` (`id`, `roomName`, `price`, `image`) VALUES
(1, 'Junior Suite', 100, './images/menu-1.jpg'),
(2, 'Executive Suite', 100, './images/menu-2.jpg'),
(3, 'Super Star Deluxe', 100, './images/menu-3.jpg'),
(4, 'Super Deluxe', 100, './images/menu-3.jpg');

ALTER TABLE `rooms`  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;