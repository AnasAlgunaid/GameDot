<?php require(getHeaderPath()) ?>
<main>
  <div class="xl:container mx-auto px-8">
    <!-- Search field -->
    <form action="" method="get" class="relative mb-8">
      <input type="text" name="search" id="search" class="bg-secondaryBlack w-full  px-4 py-4 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for categories">
      <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2">
        <i class="fi fi-rr-search"></i>
      </button>
    </form>
    <!-- End of Search field -->

    <!-- All Categories -->
    <div>
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        All Categories
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
    </div>
    <div class="grid grid-cols-1 min-[320px]:grid-cols-2 min-[540px]:grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-lg sm:text-xl md:text-2xl">
      <?php
      for ($i = 0; $i < 10; $i++) {
        echo ('
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
          ');
      }
      ?>
    </div>
    <!-- End of All Categories -->
</main>
<?php require(getFooterPath()) ?>