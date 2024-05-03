<?php
$title = 'Manage Games';
$gamesColumns = [
  'ID',
  'Name',
  'Platform',
  'Release Date',
  'Price',
  'Publisher',
];

$games = [
  [
    'ID' => 1,
    'Name' => 'Cyberpunk 2077',
    'Description' => 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality.',
    'Platform' => 'PS4,PS5',
    'Release Date' => '10-12-2020',
    'Price' => '59.99$',
    'Publisher' => 'CD Projekt',
  ],
  [
    'ID' => 2,
    'Name' => 'The Witcher 3: Wild Hunt',
    'Description' => 'The Witcher 3: Wild Hunt is a story-driven, next-generation open world role-playing game set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.',
    'Platform' => 'PC,PS4,PS5,Xbox',
    'Release Date' => '19-05-2015',
    'Price' => '29.99$',
    'Publisher' => 'CD Projekt',
  ],
  [
    'ID' => 3,
    'Name' => 'Red Dead Redemption 2',
    'Description' => 'America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed. After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.',
    'Platform' => 'PC',
    'Release Date' => '26-10-2018',
    'Price' => '59.99$',
    'Publisher' => 'Rockstar Games',
  ],
  [
    'ID' => 4,
    'Name' => 'Grand Theft Auto V',
    'Description' => 'Los Santos: a sprawling sun-soaked metropolis full of self-help gurus, starlets and fading celebrities, once the envy of the Western world, now struggling to stay afloat in an era of economic uncertainty and cheap reality TV. Amidst the turmoil, three very different criminals plot their own chances of survival and success: Franklin, a street hustler looking for real opportunities and serious money; Michael, a professional ex-con whose retirement is a lot less rosy than he hoped it would be; and Trevor, a violent maniac driven by the chance of a cheap high and the next big score. Running out of options, the crew risks everything in a series of daring and dangerous heists that could set them up for life.',
    'Platform' => 'PC,PS4,PS5,Xbox',
    'Release Date' => '14-04-2015',
    'Price' => '29.99$',
    'Publisher' => 'Rockstar Games',
  ],
  [
    'ID' => 5,
    'Name' => 'The Elder Scrolls V: Skyrim',
    'Description' => 'The Elder Scrolls V: Skyrim is an open-world action role-playing game developed by Bethesda Game Studios. It is the fifth main installment in The Elder Scrolls series, following The Elder Scrolls IV: Oblivion, and was released worldwide for Microsoft Windows, PlayStation 3, and Xbox 360 on November 11, 2011.',
    'Platform' => 'PC,PS4,PS5',
    'Release Date' => '11-11-2011',
    'Price' => '19.99$',
    'Publisher' => 'Bethesda Softworks',
  ],
  [
    'ID' => 6,
    'Name' => 'The Legend of Zelda: Breath of the Wild',
    'Description' => 'The Legend of Zelda: Breath of the Wild is an action-adventure game developed and published by Nintendo, released for the Nintendo Switch and Wii U consoles on March 3, 2017. Breath of the Wild is set at the end of the Zelda timeline; the player controls Link, who awakens from a hundred-year slumber to defeat Calamity Ganon and save the kingdom of Hyrule.',
    'Platform' => 'PS4,PS5,Xbox',
    'Release Date' => '03-03-2017',
    'Price' => '59.99$',
    'Publisher' => 'Nintendo',
  ],
];
require('src/admin/games/views/games.view.php');
