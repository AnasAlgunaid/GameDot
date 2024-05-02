<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/assets/style/output.css?<?= time() ?>">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' />
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">


  <title><?php echo isset($pageTitle) ? $pageTitle : "GameDot" ?></title>

</head>

<body class="bg-myBlack text-white font-Roboto">

  <header class="py-4 px-8 mb-4 xl:container mx-auto ">
    <nav class=" flex justify-between items-center  ">
      <h1 class="font-bold text-2xl ">
        <a href="./">Gamedot</a>
      </h1>
      <button class="sm:hidden">
        <i class="fi fi-rr-menu-burger text-2xl hover:opacity-85 hover:scale-[1.02] duration-300"></i>
      </button>
      <!-- Search Field -->
      <form action="" method="get" class="relative hidden sm:block">
        <input type="text" name="search" id="search" class="bg-secondaryBlack w-64 md:w-96 px-4 py-2 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for games">
        <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2">
          <i class="fi fi-rr-search"></i>
        </button>
      </form>
      <!-- End of Search Field -->

      <ul class=" justify-between items-center gap-4 text-gray-400 duration-300 hidden sm:flex">
        <li>
          <a href="./signup">
            <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Sign Up</button>
          </a>
        </li>
        <li>
          <a href="./signin">
            <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Sign In</button>
          </a>
        </li>

      </ul>
    </nav>
  </header>