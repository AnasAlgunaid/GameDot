<?php
// Check if session is not active
if (session_status() == PHP_SESSION_NONE) {
  // Start the session
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $baseUrl = 'http://localhost/gamedot'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/style/output.css?<?= time() ?>">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' />
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

  <title><?php echo isset($title) ? $title : "GameDot" ?></title>

</head>

<body class="bg-myBlack text-white font-Roboto">

  <!-- Search Field -->
  <header class=">flex flex-wrap sm:justify-start sm:flex-nowrap w-full py-4 px-8 mb-4 mx-auto text-sm xl:container border-b-2 border-white border-opacity-5">
    <nav class=" w-full mx-auto  sm:flex sm:items-center sm:justify-between" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none font-bold text-2xl" href="<?= $baseUrl ?>">GameDot</a>
        <div class="sm:hidden">
          <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg bg-secondaryBlack text-white shadow-sm hover:opacity-85 disabled:opacity-50 disabled:pointer-events-none " data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <div class="flex flex-col gap-12 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
          <!-- Search Field -->
          <form action="./games" method="GET" class="relative block">
            <input type="text" name="search" id="search" class="bg-secondaryBlack w-full lg:min-w-80 px-4 py-2 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for games">
            <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2 hover:text-primary duration-300">
              <i class="fi fi-rr-search"></i>
            </button>
          </form>
          <!-- End of Search Field -->
          <?php if (isset($_SESSION['user'])) : ?>
            <div class="flex justify-center items-center flex-wrap gap-6 ">
              <!-- Profile and cart and logout -->
              <a href="./cart" class="flex-1 pt-1">
                <button class="hover:text-primary text-gray-400 duration-300 text-2xl"><i class="fi fi-rr-shopping-cart "></i></button>
              </a>
              <!-- logout -->
              <a href="./logout" class="flex-1 pt-1">
                <button class="hover:text-primary text-gray-400 duration-300 text-2xl"><i class="fi fi-rr-sign-out-alt"></i></button>

                <a href="./profile" class="flex-1">
                  <button class="bg-primary w-10 h-10 rounded-full text-white hover:opacity-85 duration-300 text-lg"><?= $_SESSION["user"]["fname"][0] ?></button>
                </a>


            </div>
          <?php elseif (isset($_SESSION['admin'])) : ?>
            <div class="flex justify-between items-center flex-wrap gap-6 sm:min-w-64">
              <a href="./signup" class="flex-1">
                <button class="bg-primary px-4 py-2 w-full  rounded-lg text-white hover:opacity-85 duration-300">Sign Up</button>
              </a>
              <a href="./signin" class="flex-1">
                <button class="border border-primary w-full px-4 py-2 rounded-lg text-primary hover:opacity-85 duration-300">Sign In</button>
              </a>
            </div>
          <?php else : ?>
            <div class="flex justify-between items-center flex-wrap gap-6 sm:min-w-64">
              <a href="./signup" class="flex-1">
                <button class="bg-primary px-4 py-2 w-full  rounded-lg text-white hover:opacity-85 duration-300">Sign Up</button>
              </a>
              <a href="./signin" class="flex-1">
                <button class="border border-primary w-full px-4 py-2 rounded-lg text-primary hover:opacity-85 duration-300">Sign In</button>
              </a>
            </div>
          <?php endif; ?>



        </div>
      </div>
    </nav>
  </header>