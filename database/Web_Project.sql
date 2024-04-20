CREATE TABLE `games` (
  `game_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `description` text,
  `main_image_url` varchar(255),
  `age_rating` integer
);

CREATE TABLE `users` (
  `user_id` integer PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(255),
  `lname` varchar(255),
  `email` varchar(255) UNIQUE,
  `password` varchar(255),
  `dob` date
);

CREATE TABLE `admins` (
  `admin_id` integer PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(255),
  `lname` varchar(255),
  `email` varchar(255) UNIQUE,
  `password` varchar(255)
);

CREATE TABLE `platforms` (
  `platform_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `game_platforms` (
  `game_id` integer,
  `platform_id` integer,
  `price` float,
  `release_date` date,
  PRIMARY KEY (game_id, platform_id)
);

CREATE TABLE `genres` (
  `genre_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `game_genres` (
  `game_id` integer,
  `genre_id` integer,
  PRIMARY KEY (game_id, genre_id)
  
);

CREATE TABLE `languages` (
  `language_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `game_languages` (
  `game_id` integer,
  `language_id` integer,
  PRIMARY KEY (game_id, language_id)
);

CREATE TABLE `offers` (
  `offer_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `discount_percentage` float,
  `start_date` date,
  `end_date` date

);

CREATE TABLE `game_offers` (
  `game_id` integer,
  `offer_id` integer,  
  PRIMARY KEY (game_id, offer_id)
);

CREATE TABLE `publishers` (
  `publisher_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `game_publisher` (
  `game_id` integer,
  `publisher_id` integer,
  PRIMARY KEY (game_id, publisher_id)
);

CREATE TABLE `reviews` (
  `review_id` integer PRIMARY KEY AUTO_INCREMENT,
  `game_id` integer,
  `user_id` integer,
  `rating` integer,
  `review_text` text,
  `review_date` date

);

CREATE TABLE `media` (
  `media_id` integer PRIMARY KEY AUTO_INCREMENT,
  `game_id` integer,
  `media_url` varchar(255)
);

CREATE TABLE `carts` (
  `cart_id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer
);

CREATE TABLE `cart_items` (
  `cart_item_id` integer PRIMARY KEY AUTO_INCREMENT,
  `cart_id` integer,
  `game_id` integer,
  `quantity` integer
);

CREATE TABLE `orders` (
  `order_id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `total_price` float,
  `order_date` date,
  `payment_method` varchar(255)
);

CREATE TABLE `order_items` (
  `order_item_id` integer PRIMARY KEY AUTO_INCREMENT,
  `game_id` integer,
  `order_id` integer,
  `quantity` integer,
  `subtotal` float
);

ALTER TABLE `game_platforms` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `game_platforms` ADD FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`platform_id`);

ALTER TABLE `game_genres` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `game_genres` ADD FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

ALTER TABLE `game_offers` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `game_offers` ADD FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`);

ALTER TABLE `game_languages` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `game_languages` ADD FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`);

ALTER TABLE `game_publisher` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `game_publisher` ADD FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `reviews` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `media` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `carts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `cart_items` ADD FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`);

ALTER TABLE `cart_items` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `orders` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);

ALTER TABLE `order_items` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
