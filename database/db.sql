-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 14, 2024 at 09:57 PM
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
-- Database: `gamedot`
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
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(1, 1),
(6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(22, 'Fortnite Battle Royale', 'Fortnite is a third-person shooter game where up to 100 players compete to be the last person or team standing. You can compete alone or join a team of up to four. You progress through the game by exploring the island, collecting weapons, building fortifications and engaging in combat with other players. You can make purchases for access to the full game or for bonus weapons. Players communicate with other players through online messaging or voice chat. Fortnite Battle Royale is a free version of the Fortnite game. ', 'PC', '40.00', '/gamedot/media/games/6643bd6784291_803e41fee0edf8f8ed1de518e6eac60d.png', 3, 'Epic Games', '2019-11-11'),
(23, 'The Witcher 3: Wild Hunt', 'Trained from early childhood and mutated to gain superhuman skills, strength, and reflexes, witchers are a counterbalance to the monster-infested world in which they live. Gruesomely destroy foes as a professional monster hunter armed with a range of upgradeable weapons, mutating potions, and combat magic.', 'PS4, PS5', '190.00', '/gamedot/media/games/6643bdfde2c5a_S1jCzktWD7XJSRkz4kNYNVM0.png', 12, 'CD Projekt', '2017-11-02'),
(24, 'Truck & Logistics Simulator', 'Load, drive, and deliver through a huge open world with up to 24 players in cross-platform multiplayer. Join your friends in exciting heavy transport convoys. Jump into the driver\'s seat of more than 30 unique vehicles and carry out complex loading tasks to deliver a variety of cargo.', ' Aerosoft GmbH', '89.00', '/gamedot/media/games/6643be79ddcd0_gds.png', 3, 'Aerosoft GmbH', '2018-11-03'),
(25, 'Planet of Lana', 'A young girl and her loyal friend embark on a rescue mission through a colorful world full of cold machines and unfamiliar creatures. Planet of Lana is a cinematic puzzle adventure framed by an epic sci-fi saga that stretches across centuries and galaxies.', 'PS4, PS5', '70.00', '/gamedot/media/games/6643bedd15bbe_uoop.png', 7, ' Thunderful Publishing', '2022-04-03'),
(26, 'Whisker Waters', 'Whisker Waters is the ultimate RPG adventure that blends light fantasy and the art of fishing into a mesmerizing world. As a player, you\'ll create and play as your very own Cat character and embark on a whimsical fishing journey like never before.', 'PS4, PS5', '73.00', '/gamedot/media/games/6643bf5190036_sret.png', 3, ' Merge Games', '2015-04-04'),
(27, 'Space Raiders', 'Space Raiders in Space is a wave defense roguelike mixing squad management and tower defence mechanics. Command your almost competent crew to loot weapons and supplies, build defenses, and fight their way through the Bugpocalypse.', 'PC', '30.00', '/gamedot/media/games/6643c0ead61c4_sdsr.png', 12, ' Destructive Creations', '2010-04-08');

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
(22, 1),
(22, 2),
(22, 7),
(22, 17),
(22, 18),
(22, 23),
(23, 1),
(23, 2),
(23, 7),
(23, 12),
(23, 18),
(23, 25),
(24, 2),
(24, 3),
(24, 7),
(24, 8),
(24, 9),
(24, 12),
(24, 16),
(24, 17),
(25, 1),
(25, 3),
(25, 4),
(25, 5),
(25, 6),
(25, 8),
(25, 9),
(25, 18),
(25, 20),
(26, 2),
(26, 3),
(26, 4),
(26, 12),
(26, 15),
(26, 17),
(26, 22),
(26, 25),
(27, 6),
(27, 19),
(27, 22),
(27, 24),
(27, 26),
(27, 27);

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
(27, 22, '/gamedot/media/games/6643bd6784470_fortnite-ch5s2-battle-pass-keyar.png'),
(28, 23, '/gamedot/media/games/6643bdfde2e7a_fortnite-ch5s2-battle-pass-keyar.png'),
(29, 24, '/gamedot/media/games/6643be79de0b1_halo-infinite-difficulty-change.jpg'),
(30, 25, '/gamedot/media/games/6643bedd15deb_header.jpg'),
(31, 26, '/gamedot/media/games/6643bf519040d_dsds.jpg'),
(32, 27, '/gamedot/media/games/6643c0ead63eb_spr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `order_date` date DEFAULT current_timestamp(),
  `payment_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `order_date`, `payment_method`) VALUES
(1, 1, 49.99, '2023-07-10', 'Credit Card'),
(26, 8, 30, '2024-05-14', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `game_code` varchar(50) NOT NULL,
  `subtotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `review_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(50, 'm2AqSRhyNBSSJOSf', 22),
(51, '2iKPgawQh6l1hsmj', 22),
(52, 'dMilC23w7kqpW6dv', 22),
(53, 'OItnT4AG12wHdOXt', 22),
(54, 'hW8opULWBfg8ZcX4', 22),
(55, 'C9NR2DDqh9inVtGK', 23),
(56, 'BCErEA2ZWN6h5gr7', 23),
(57, 'QZAVOzv0L1ACuxJ6', 23),
(58, 'IEPUXoW0OEGIznaT', 24),
(59, 'TrvToPwWxG3KcjvP', 24),
(60, 'ykuJhsWheVDiSChD', 24),
(61, '1z5rbsJ95XCD8N5R', 25),
(62, 'bnbcqVyvCbCw5m5V', 25),
(63, 'T7F1BO7WYMXo2BEI', 25),
(64, 'UgZvOjMFwmAOQ2gi', 26),
(65, '53nm5ni18Vus2hkP', 26),
(66, 'b7NFFSOiHOUIRrOS', 27),
(67, '2eKsTjoUeUM4phIy', 27);

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
(1, 'John', 'Doe', 'john@example.com', '$2y$10$Na815mjRt3VEeWK9Qsrpquj1CxaMXLBUs6Qeq6GT2mRwXSaoBH2oK', '1990-01-01'),
(8, 'Anas', 'Algunaid', 'anas@algunaid.com', '$2y$10$Na815mjRt3VEeWK9Qsrpquj1CxaMXLBUs6Qeq6GT2mRwXSaoBH2oK', '2009-02-03'),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_ibfk_1` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_ibfk_1` (`cart_id`),
  ADD KEY `cart_items_ibfk_2` (`game_id`);

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
  ADD KEY `game_genres_ibfk_2` (`genre_id`);

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
  ADD KEY `media_ibfk_1` (`game_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_1` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_ibfk_1` (`game_id`),
  ADD KEY `order_items_ibfk_2` (`order_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_ibfk_1` (`game_id`),
  ADD KEY `reviews_ibfk_2` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD CONSTRAINT `game_genres_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
