<?php require(getHeaderPath()) ?>
<main class="min-h-[80vh]">
  <div class="xl:container mx-auto px-8">

    <!-- Search field -->
    <form action="" method="get" class="relative ">
      <input type="text" name="search" id="search" value="<?= $search ?>" class="bg-secondaryBlack w-full  px-4 py-4 rounded-lg focus:outline-none focus:ring-primary focus:border-primary " placeholder="Search for games">
      <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2 hover:text-primary duration-300">
        <i class="fi fi-rr-search"></i>
      </button>
    </form>
    <!--  clear button -->
    <?php if (isset($_GET["search"])) : ?>
      <a href="./games" class="border border-primary
    px-2 py-2 rounded-lg text-primary hover:text-white hover:bg-primary duration-300 flex justify-center items-center max-w-32 gap-2 my-4 ">
        <i class="fi fi-rr-eraser mt-1"></i>
        <p>Clear</p>
      </a>
      <!-- End of clear button -->
    <?php endif ?>
    <!-- End of Search field -->

    <!-- Filters -->
    <div class="flex justify-between items-center mt-8 mb-4 flex-col sm:flex-row ">
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

    <!-- Check if there is no gmaes -->
    <?php if (empty($games)) : ?>
      <div class="text-center">
        <h2 class="text-2xl mb-4 text-gray-400">No games found</h2>
      </div>
    <?php endif; ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php foreach ($games as $game) : ?>
        <a href="./games/<?= $game['id'] ?>">
          <!-- Game Card -->
          <div class="bg-secondaryBlack rounded-xl overflow-hidden duration-300 hover:scale-[1.02] cursor-pointer mx-2 h-full flex flex-col justify-between">
            <img class="w-full " src="<?= $game['main_image_url'] ?>" alt="">
            <div class="p-4 flex flex-col justify-between h-full">
              <h3 class="text-lg font-bold"><?= $game['name'] ?></h3>
              <p class="font-base text-lg  text-primary"><?= $game['price'] ?> SR</p>
              <p class="text-base  text-gray-400"><?= $game['platform'] ?></p>
              <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300 mt-4 w-full">
                <i class="fi fi-rr-shopping-cart mr-1 "></i>
                Add to Cart
              </button>
            </div>
          </div>
        </a>
      <?php endforeach; ?>


    </div>
  </div>
</main>
<?php require(getFooterPath()) ?>