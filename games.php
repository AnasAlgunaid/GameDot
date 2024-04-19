<?php include('./src/templates/header.php'); ?>
<main>
  <div class="xl:container mx-auto px-8">
    <!-- Search field -->
    <form action="" method="get" class="relative mb-8">
      <input type="text" name="search" id="search" class="bg-secondaryBlack w-full  px-4 py-4 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for games">
      <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2">
        <i class="fi fi-rr-search"></i>
      </button>
    </form>
    <!-- End of Search field -->

    <!-- Filters -->
    <div class="flex justify-between items-center mb-8 flex-col sm:flex-row ">
      <div>
        <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
          All Games
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>
      </div>
      <div class="flex gap-4  flex-wrap">
        <button class="bg-secondaryBlack px-4 py-2  rounded-lg text-white hover:opacity-85 duration-300">Price</button>
        <button class="bg-secondaryBlack px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Platform</button>
        <button class="bg-secondaryBlack px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Genre</button>
      </div>
    </div>
    <!-- End of Filters -->




    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php
      for ($i = 0; $i < 100; $i++) {
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
  </div>

</main>
<?php include('./src/templates/footer.php'); ?>