<?php include('./src/templates/header.php'); ?>
<main class="min-h-[80vh] ">
  <div class="xl:container mx-auto px-8 my-8">

    <section class="grid md:grid-cols-2 md:gap-12 ">
      <!-- Screenshots -->
      <section class="swiper  w-full max-h-[32rem] rounded-xl md:rounded-3xl overflow-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide flex justify-center items-center relative ">

            <img class=" object-cover h-full bg-center" src="https://wallpaperswide.com/download/horizon_forbidden_west-wallpaper-1280x720.jpg" alt="">


          </div>
          <div class="swiper-slide">
            <img class="w-full object-cover h-full bg-center" src="https://wallpaperswide.com/download/beyond_good_and_evil_2_jade-wallpaper-1280x720.jpg" alt="">

          </div>
          <div class="swiper-slide">
            <img class="w-full object-cover h-full bg-center" src="https://wallpaperswide.com/download/horizon_forbidden_west-wallpaper-1280x720.jpg" alt="">

          </div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination "></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </section>
      <!-- End of Screenshots -->
      <!-- Start of buying -->
      <section>
        <!-- Start of Name and Price -->
        <div class="mt-4 mb-1">
          <h2 class="text-3xl sm:text-4xl font-bold  text-center md:text-left">
            Horizon Forbidden West
          </h2>
        </div>
        <div>
          <p class="text-primary font-bold text-xl text-center md:text-left">
            179 SR
          </p>
        </div>
        <!-- End of Name and Price-->
        <!-- Choose Platform -->
        <div class="my-8">
          <label for="platform" class="block text-sm  text-gray-300">Platform</label>

          <select name="platform" id="platform" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            <option value="PC">PS4</option>
            <option value="PC">PS5</option>
            <option value="PC">PC</option>
            <option value="PC">XBOX</option>
          </select>
        </div>
        <!-- End of Choose Platform -->

        <!-- Start of Quantity -->
        <div class="my-8">
          <label for="quantity" class="block text-sm  text-gray-300">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required value="1" max="5" min="1">
        </div>
        <!-- End of Quantity -->

        <!-- Start of Add to Cart -->
        <a href="./cart.php" class="my-8">

          <button class="bg-primary px-4 text-sm md:px-8 py-2 rounded-md hover:opacity-85 duration-300 w-full">
            <i class="fi fi-rr-shopping-cart mr-1 "></i>
            Add to Cart
          </button>
        </a>
        <!-- End of Add to Cart -->
      </section>
      <!-- End of buying -->
    </section>


    <!-- Start of Description -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Description
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        Horizon Forbidden West is an action role-playing game played from a third-person perspective. Players control Aloy, a huntress in a world populated by dangerous machines. The game will be set in the Western United States, including locations such as ruins of San Francisco and the Yosemite Valley. The game will feature a large open world for players to explore, in addition to a revamped climbing system that will allow Aloy to free climb cliffs and reach new areas. The game will also feature new machines for players to fight, including Tremortusks, which can be used as transportation.
      </p>
    </div>
    <!-- End of Description -->

    <!-- Start of Publisher information -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Publisher
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        Sony Interactive Entertainment
      </p>
    </div>
    <!-- End of Publisher information -->
    <!-- Start of Genre information -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Genre
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        Action, Adventure, RPG
      </p>
    </div>
    <!-- End of Genre information -->
    <!-- Start of Release Date information -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Release Date
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        18/02/2022
      </p>
    </div>
    <!-- End of Release Date information -->




  </div>

</main>
<?php include('./src/templates/footer.php'); ?>