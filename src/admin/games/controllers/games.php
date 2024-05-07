<?php
$title = 'Manage Games';
$gamesColumns = [
  'id',
  'name',
  'platform',
  'release_date',
  'price',
  'publisher',
  'stock',
];

$games = [
  [
    'id' => 1,
    'name' => 'Cyberpunk 2077',
    'platform' => 'PS4,PS5',
    'release_date' => '10-12-2020',
    'price' => '59.99$',
    'publisher' => 'CD Projekt',
    "stock" => 10,
  ],
  [
    'id' => 2,
    'name' => 'The Witcher 3: Wild Hunt',
    'platform' => 'PC,PS4,PS5,Xbox',
    'release_date' => '19-05-2015',
    'price' => '29.99$',
    'publisher' => 'CD Projekt',
    "stock" => 15,
  ],
  [
    'id' => 3,
    'name' => 'Red Dead Redemption 2',
    'platform' => 'PC',
    'release_date' => '26-10-2018',
    'price' => '59.99$',
    'publisher' => 'Rockstar Games',
    "stock" => 15,
  ],
  [
    'id' => 4,
    'name' => 'Grand Theft Auto V',
    'platform' => 'PC,PS4,PS5,Xbox',
    'release_date' => '14-04-2015',
    'price' => '29.99$',
    'publisher' => 'Rockstar Games',
    "stock" => 25,
  ],
  [
    'id' => 5,
    'name' => 'The Elder Scrolls V: Skyrim',
    'platform' => 'PC,PS4,PS5',
    'release_date' => '11-11-2011',
    'price' => '19.99$',
    'publisher' => 'Bethesda Softworks',
    "stock" => 35,
  ],
  [
    'id' => 6,
    'name' => 'The Legend of Zelda: Breath of the Wild',
    'platform' => 'PS4,PS5,Xbox',
    'release_date' => '03-03-2017',
    'price' => '59.99$',
    'publisher' => 'Nintendo',
    "stock" => 40,
  ],
];
require('src/admin/games/views/games.view.php');
