<?php $pageTitle = 'Gamedot | Homepage'; ?>

<?php include('./src/templates/header.php'); ?>

<!-- Hero Section -->
<main>
  <div class="xl:container mx-auto px-8">
    <div class="swiper  w-full max-h-[32rem] rounded-3xl overflow-hidden">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide flex justify-center items-center relative ">

          <img class="w-full  brightness-50 " src="https://wallpaperswide.com/download/horizon_forbidden_west-wallpaper-1280x720.jpg" alt="">

          <!-- Text -->
          <div class="absolute inset-0 flex flex-col justify-center items-center 2xl:mb-56">
            <div class="text-center flex flex-col justify-center items-center gap-2 w-2/3 sm:w-1/2">
              <h2 class="text-lg sm:text-2xl md:text-4xl font-bold">Horizon Forbidden West <span class="icon-[ri--playstation-fill]"></span>
              </h2>
              <p class="text-base sm:text-lg md:text-xl">179 SR </p>
              <button class="bg-primary px-4 text-sm md:px-8 py-2 rounded-md hover:opacity-85 duration-300">
                <i class="fi fi-rr-shopping-cart mr-1 "></i>
                Add to Cart
              </button>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <img class="w-full relative" src="https://wallpaperswide.com/download/beyond_good_and_evil_2_jade-wallpaper-1280x720.jpg" alt="">
          <!-- Overlay -->
          <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center"></div>
        </div>
        <div class="swiper-slide">
          <img class="w-full relative" src="https://wallpaperswide.com/download/horizon_forbidden_west-wallpaper-1280x720.jpg" alt="">
          <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center"></div>
        </div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination "></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  </div>
</main>
<!-- End of Hero Section -->

<!-- Featured Games Section -->
<section class="xl:container mx-auto px-8 my-8">

  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Featured Games
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./games.php" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo ('
              <a href="./game_page.php">
      <!-- Game Card -->
      <div class="bg-secondaryBlack rounded-xl overflow-hidden duration-300 hover:scale-[1.02] cursor-pointer">
        <img class="w-full " src="https://image.api.playstation.com/vulcan/ap/rnd/202312/0117/315718bce7eed62e3cf3fb02d61b81ff1782d6b6cf850fa4.png" alt="">
        <div class="p-4 flex flex-col ">
          <h3 class="text-lg font-bold">Horizon Forbidden West</h3>
          <p class="text-base  text-primary">179 SR</p>
          <!-- Platforms -->
          <div class="flex items-center text-gray-400 gap-x-4 mt-1 flex-wrap">
            <img class="w-8 h-8" src="./src/icons/playstation5-icon.svg" alt="">
            <img class="w-8 h-8" src="./src/icons/playstation4-icon.svg" alt="">
            <img class="w-4 h-4" src="./src/icons/windows-icon.svg" alt="">
            <img class="w-4 h-4" src="./src/icons/xbox-icon.svg" alt="">
            <img class="w-8 h-8" src="./src/icons/macos-icon.svg" alt="">
          </div>

          <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300 mt-4 w-full">
            <i class="fi fi-rr-shopping-cart mr-1 "></i>
            Add to Cart
          </button>

        </div>
      </div>
    </a>
    <!-- End of Game Card -->
      ');
    }

    ?>

  </div>
</section>
<!-- End of Featured Games Section -->

<!-- Best Deals Section -->
<section class="xl:container mx-auto px-8 my-8">

  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Best Deals
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./games.php" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo ('
           <!-- Game Card -->
  <a href="./game_page.php">
    <div class="bg-secondaryBlack rounded-xl overflow-hidden duration-300 hover:scale-[1.02] cursor-pointer">
      <img class="w-full " src="https://image.api.playstation.com/vulcan/ap/rnd/202107/3100/HO8vkO9pfXhwbHi5WHECQJdN.png" alt="">
      <div class="p-4 flex flex-col ">
        <h3 class="text-lg font-bold">Horizon Forbidden West</h3>
        <p class="text-base text-gray-400 line-through ">179 SR</p>
        <p class="text-base text-red-400 ">159 SR</p>
        <!-- Platforms -->
        <div class="flex items-center text-gray-400 gap-x-4 mt-1 flex-wrap">
          <img class="w-8 h-8" src="./src/icons/playstation5-icon.svg" alt="">
          <img class="w-8 h-8" src="./src/icons/playstation4-icon.svg" alt="">
          <img class="w-4 h-4" src="./src/icons/windows-icon.svg" alt="">
          <img class="w-4 h-4" src="./src/icons/xbox-icon.svg" alt="">
          <img class="w-8 h-8" src="./src/icons/macos-icon.svg" alt="">
        </div>

        <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300 mt-4 w-full">
          <i class="fi fi-rr-shopping-cart mr-1 "></i>
          Add to Cart
        </button>

      </div>
    </div>
  </a>
  <!-- End of Game Card -->
      ');
    }

    ?>
  </div>

</section>
<!-- End of Best Deals Section -->

<!-- Categories Section -->
<section class="xl:container mx-auto px-8 my-8">
  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Categories
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./categories.php" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>

  <div class="grid grid-cols-1 min-[320px]:grid-cols-2 min-[540px]:grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-lg sm:text-xl md:text-2xl">
    <div class="h-40 bg-gradient-to-r from-blue-600 to-violet-600 rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300 ">
      Action
    </div>
    <div class="h-40 bg-gradient-to-r from-red-500 to-orange-500 rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300">
      Strategy
    </div>
    <div class="h-40 bg-gradient-to-r from-emerald-900 to-emerald-500 rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300 ">
      Adventure
    </div>
    <div class="h-40 bg-gradient-to-r from-red-500 to-rose-400 rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300">
      Simulation
    </div>
    <div class="h-40 bg-gradient-to-r from-fuchsia-600 to-purple-600 rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300">
      Puzzle
    </div>
  </div>

</section>



<?php include('./src/templates/footer.php'); ?>