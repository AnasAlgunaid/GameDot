<?php
$title = 'Edit Game';
$genres = [
  'action',
  'adventure',
  'racing',
  'sports',
  'strategy',
  'simulation',
  'puzzle',
  'casual',
  'arcade',
  'card',
  'board',
  'trivia',
  'educational',
  'music',
  'fighting',
  'shooter',
  'platformer',
  'rpg',
  'horror',
  'sandbox',
  'survival',
  'battle royale',
  'mmo',
  'open world',
  'stealth',
  'party',
  'roguelike',
  'rhythm',
  'tactical',
  'turn-based',
  'visual novel',
  'other',
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
  'genres' => ['action', 'adventure', 'party']
];

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

require('src/admin/games/views/edit_game.view.php');
