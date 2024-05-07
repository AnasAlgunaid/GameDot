<?php
$title = 'Game Page';
// Dummy data for video games with genres
$games = [
  [
    'game_id' => 1,
    'name' => 'The Witcher 3: Wild Hunt',
    'description' => 'The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red.',
    'platform' => 'PC, PlayStation 4, Xbox One, Nintendo Switch',
    'price' => 29.99,
    'main_image_url' => 'https://example.com/witcher3.jpg',
    'age_rating' => '18+',
    'release_date' => '2015-05-19',
    'genres' => ['Action', 'Role-playing', 'Open world']
  ],
  [
    'game_id' => 2,
    'name' => 'Red Dead Redemption 2',
    'description' => 'Red Dead Redemption 2 is a Western-themed action-adventure game developed and published by Rockstar Games.',
    'platform' => 'PlayStation 4, Xbox One, PC, Google Stadia',
    'price' => 39.99,
    'main_image_url' => 'https://example.com/reddead2.jpg',
    'age_rating' => '16+',
    'release_date' => '2018-10-26',
    'genres' => ['Action', 'Adventure', 'Open world']
  ],
  [
    'game_id' => 3,
    'name' => 'Super Mario Odyssey',
    'description' => 'Super Mario Odyssey is a platform game developed and published by Nintendo for the Nintendo Switch.',
    'platform' => 'Nintendo Switch',
    'price' => 49.99,
    'main_image_url' => 'https://example.com/marioodyssey.jpg',
    'age_rating' => 'Everyone',
    'release_date' => '2017-10-27',
    'genres' => ['Platformer', 'Adventure']
  ],
  // Add more games here if needed
];

$game =   [
  'game_id' => 1,
  'name' => 'The Witcher 3: Wild Hunt',
  'description' => 'The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red. The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red. The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red. The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red. The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red. The Witcher 3: Wild Hunt is an action role-playing game developed and published by CD Projekt Red.',
  'platform' => 'PC, PlayStation 4, Xbox One, Nintendo Switch',
  'price' => 29.99,
  'main_image_url' => 'https://image.api.playstation.com/vulcan/ap/rnd/202211/0711/kh4MUIuMmHlktOHar3lVl6rY.png',
  'age_rating' => '+16',
  'publisher' => 'CD Projekt Red',
  'release_date' => '2015-05-19',
  'genres' => ['Action', 'Role-playing', 'Open world']
];

// Dummy data for game reviews
$avg_rating = 4.5;
$reviews = [
  [
    'review_id' => 1,
    'game_id' => 1,
    'full_name' => 'John Doe',
    'rating' => 4,
    'review_text' => 'The Witcher 3: Wild Hunt is an amazing game with captivating storytelling and immersive gameplay.',
    'review_date' => '2024-05-01'
  ],
  [
    'review_id' => 2,
    'game_id' => 2,
    'full_name' => 'Jane Smith',
    'rating' => 5,
    'review_text' => 'Red Dead Redemption 2 is a masterpiece! The attention to detail is incredible, and the story is gripping.',
    'review_date' => '2024-05-02'
  ],
  [
    'review_id' => 3,
    'game_id' => 3,
    'full_name' => 'Alex Johnson',
    'rating' => 2,
    'review_text' => 'Super Mario Odyssey is a fun and charming game that brings back nostalgic memories. Highly recommended for all ages.',
    'review_date' => '2024-05-03'
  ],
  // Add more reviews here if needed
];

// Dummy data for media
$media = [
  [
    'media_id' => 1,
    'media_url' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/292030/ss_0901e64e9d4b8ebaea8348c194e7a3644d2d832d.1920x1080.jpg?t=1710411171',
  ],
  [
    'media_id' => 2,
    'media_url' => 'https://cdn.vox-cdn.com/thumbor/6HUYnfetJodozWpQgLOBwtq_ioU=/297x0:1917x1080/1280x854/cdn.vox-cdn.com/uploads/chorus_image/image/46312824/The_Witcher_3_Wild_Hunt_The_sirens_may_look_beautiful_in_the_water-but_once_they_re_out_of_it-they_change_into_deadly-flying_creatures..0.0.png',
  ],
  [
    'media_id' => 3,
    'media_url' => 'https://static1.srcdn.com/wordpress/wp-content/uploads/2024/04/witcher-3-geralt-of-rivia-keyart.jpg',
  ],
  // Add more media entries here if needed
];


require('src/admin/games/views/game.view.php');
