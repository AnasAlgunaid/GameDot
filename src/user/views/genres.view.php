<?php require(getHeaderPath()) ?>
<main>
  <div class="xl:container mx-auto px-8">
    <!-- Search field -->
    <form action="" method="get" class="relative mb-8">
      <input type="text" name="search" id="search" class="bg-secondaryBlack w-full  px-4 py-4 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for Genres">
      <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2">
        <i class="fi fi-rr-search"></i>
      </button>
    </form>
    <!-- End of Search field -->

    <!-- All Genres -->
    <div>
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        All Genres
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
    </div>
    <div class="grid grid-cols-1 min-[320px]:grid-cols-2 min-[540px]:grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-lg sm:text-xl md:text-2xl">
      <?php foreach ($genres as $genre) : ?>
        <a href="/gamedot/games?genre=<?= $genre['name'] ?>" class="h-40 <?= $genresColors[strtolower($genre['name'])] ?> rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300 ">
          <?= $genre['name'] ?>
        </a>
      <?php endforeach; ?>

    </div>
    <!-- End of All Genres -->
</main>
<?php require(getFooterPath()) ?>