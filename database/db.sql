-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 12, 2024 at 11:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testforweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Anass', 'Algunaid', 'anas@malek.com', '$2y$10$ZismgZowz1DfRYu6hds6xeIvoBzVpmwmk8V/CE9rey7Y1dVFFV71u');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_item_id`, `cart_id`, `game_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 2, 2, 1),
(3, 3, 3, 1),
(4, 4, 4, 1),
(5, 5, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `platform` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `main_image_url` varchar(255) DEFAULT NULL,
  `age_rating` int(11) DEFAULT NULL,
  `publisher` varchar(100) NOT NULL,
  `release_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `platform`, `price`, `main_image_url`, `age_rating`, `publisher`, `release_date`) VALUES
(1, 'The Witcher 3: Wild Hunt', 'An open-world action RPG', 'PC', '24.25', 'https://image.api.playstation.com/vulcan/ap/rnd/202211/0714/S1jCzktWD7XJSRkz4kNYNVM0.png', 18, '', '2024-05-03'),
(2, 'Grand Theft Auto V', 'An action-adventure game', 'PS4, PS5', '60.00', 'https://image.api.playstation.com/cdn/UP1004/CUSA00419_00/bTNSe7ok8eFVGeQByA5qSzBQoKAAY32R.png', 18, '', '2024-05-03'),
(3, 'Red Dead Redemption 2', 'An action-adventure game set in the Wild West', 'Xbox', '76.99', 'https://image.api.playstation.com/cdn/UP1004/CUSA03041_00/Hpl5MtwQgOVF9vJqlfui6SDB5Jl4oBSq.png', 18, '', '2024-05-03'),
(4, 'Assassin\'s Creed Odyssey', 'An action role-playing game set in ancient Greece', 'Nintendo switch', '12.99', 'https://image.api.playstation.com/cdn/EP0001/CUSA12041_00/beKFJcUnDCeYElmY5Dd559T5mzO0mR9X.png', 18, '', '2024-05-03'),
(5, 'The Last of Us Part II', 'An action-adventure game set in a post-apocalyptic world', 'PS5', '30.00', 'https://image.api.playstation.com/vulcan/ap/rnd/202312/0117/315718bce7eed62e3cf3fb02d61b81ff1782d6b6cf850fa4.png', 18, '', '2024-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `game_genres`
--

CREATE TABLE `game_genres` (
  `game_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_genres`
--

INSERT INTO `game_genres` (`game_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Role-Playing'),
(4, 'Shooter'),
(5, 'Survival'),
(6, 'Racing'),
(7, 'Sports'),
(8, 'Strategy'),
(9, 'Simulation'),
(10, 'Puzzle'),
(11, 'Casual'),
(12, 'Arcade'),
(13, 'Card'),
(14, 'Board'),
(15, 'Trivia'),
(16, 'Educational'),
(17, 'Music'),
(18, 'Fighting'),
(19, 'Platformer'),
(20, 'RPG'),
(21, 'Horror'),
(22, 'Sandbox'),
(23, 'Battle Royale'),
(24, 'MMO'),
(25, 'Open World'),
(26, 'Stealth'),
(27, 'Party'),
(28, 'Roguelike'),
(29, 'Rhythm'),
(30, 'Tactical'),
(31, 'Turn-Based'),
(32, 'Visual Novel');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `media_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `game_id`, `media_url`) VALUES
(1, 1, 'https://cdn1.epicgames.com/offer/14ee004dadc142faaaece5a6270fb628/EGS_TheWitcher3WildHuntCompleteEdition_CDPROJEKTRED_S1_2560x1440-82eb5cf8f725e329d3194920c0c0b64f'),
(2, 2, 'https://example.com/gta-trailer.png'),
(3, 3, 'https://example.com/reddead-trailer.png'),
(4, 4, 'https://example.com/assassinscreed-trailer.png'),
(5, 5, 'https://example.com/lastofus-trailer.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `order_date`, `payment_method`) VALUES
(1, 1, 49.99, '2023-07-10', 'Credit Card'),
(2, 2, 59.99, '2023-07-11', 'PayPal'),
(3, 3, 59.99, '2023-07-12', 'Credit Card'),
(4, 4, 39.99, '2023-07-13', 'PayPal'),
(5, 5, 49.99, '2023-07-14', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `game_id`, `order_id`, `quantity`, `subtotal`) VALUES
(1, 1, 1, 1, 49.99),
(2, 2, 2, 1, 59.99),
(3, 3, 3, 1, 59.99),
(4, 4, 4, 1, 39.99),
(5, 5, 5, 1, 49.99),
(6, 3, 1, 2, 35.25);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `review_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `game_id`, `user_id`, `rating`, `review_text`, `review_date`) VALUES
(1, 1, 1, 5, 'Great game!', '2023-07-05'),
(3, 3, 3, 5, 'Best game ever!', '2023-07-15'),
(4, 4, 4, 4, 'Fantastic story!', '2023-07-20'),
(5, 5, 5, 5, 'Incredible graphics!', '2023-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `game_code` varchar(100) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `game_code`, `game_id`) VALUES
(2, 'AJEK3424kEk241', 2),
(3, 'AJEK3424kEk573', 5),
(4, 'AJEK3424kEk249', 1),
(6, 'adsdaad', 1),
(9, 'fdsssssdfsdfsdfsdf', 1),
(11, 'sdadsasadsdasasad', 3),
(12, 'ereeewrrew', 3),
(13, 'adsdsasader', 4),
(16, 'adsrttteter', 5),
(17, 'hdgdffddffd', 5),
(20, 'sadsadsadsa', 5),
(21, 'dfsfdsdsfdsf', 5),
(22, 'uu676765775e', 5),
(23, 'tryre77644', 5),
(24, 'ututu', 5),
(25, 'etryetryetrytryetyetryetery', 4),
(26, 'dfsfdsdfsfd', 5),
(27, 'geretrreyrety', 4),
(28, 'dfsfdsftt', 5),
(29, 'gfdsdsffds34243324324', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `dob`) VALUES
(1, 'John', 'Doe', 'john@example.com', 'password123', '1990-01-01'),
(2, 'Jane', 'Smith', 'jane@example.com', 'password456', '1995-05-15'),
(3, 'Alice', 'Johnson', 'alice@example.com', 'password789', '1988-08-20'),
(4, 'Bob', 'Williams', 'bob@example.com', 'password321', '1992-03-10'),
(5, 'Emma', 'Brown', 'emma@example.com', 'password654', '1997-11-25'),
(8, 'Anasssssssssss', 'Algunaid', 'anas@algunaid.com', '$2y$10$Na815mjRt3VEeWK9Qsrpquj1CxaMXLBUs6Qeq6GT2mRwXSaoBH2oK', '2009-02-03'),
(9, 'Anas', 'Algunaid', 'aljunaidanas@gmail.com', '$2y$10$loHRo0g.LAVsHqmf/2HY5emQxoK3e9Hb1yDVoRou5/sYb6Pvu4ara', '2009-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD PRIMARY KEY (`game_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD CONSTRAINT `game_genres_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
