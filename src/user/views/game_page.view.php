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
        <a href="./cart" class="my-8">

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

    <!-- Start of Similar Games -->
    <section>
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Similar Games
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <div class="glider-contain">
        <div class="glider">
          <?php
          for ($i = 0; $i < 100; $i++) {
            echo ('
                      <a href="./game">
          <!-- Game Card -->
          <div class="bg-secondaryBlack rounded-xl overflow-hidden duration-300 hover:scale-[1.02] cursor-pointer mx-2">
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
      ');
          }

          ?>
        </div>

        <button aria-label="Previous" class="glider-prev "><i class="fi fi-rr-angle-small-left"></i></button>
        <button aria-label="Next" class="glider-next"><i class="fi fi-rr-angle-small-right"></i></button>
        <div role="tablist" class="dots"></div>
      </div>
    </section>
    <!-- End of Similar Games -->

    <!-- Start of Reviews -->
    <section class="my-16">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Reviews
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>

      <!-- Create Average Review Section -->
      <div class="flex items-center justify-center gap-1 flex-col mb-8 mt-4">
        <div class="flex items-center gap-2">
          <i class="fi fi-sr-star text-yellow-400 text-5xl"></i>
          <p class="text-gray-300 text-5xl font-bold">4.5 / 5 </p>
        </div>
        <p class="text-gray-400">Based on 100 Reviews</p>

      </div>
      <!-- End of Average Review Section -->

      <?php
      for ($i = 0; $i < 5; $i++) {
        echo ('
              <!-- Start of Review Card -->
      <div class="bg-secondaryBlack rounded-2xl my-4">
        <!-- User Info -->
        <div class="flex items-center  p-4 border-b border-gray-800">
          <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary flex justify-center items-center text-xl">A</div>
          <div class="ml-4 w-full">
            <div class="flex justify-between items-center w-full flex-wrap">
              <h3 class="text-lg font-bold">Anas Algunaid</h3>
              <p class="text-gray-400">18/02/2022</p>
            </div>

            <!-- Rating -->
            <div class="flex justify-start items-center gap-2">
              <i class="fi fi-sr-star text-yellow-400"></i>
              <i class="fi fi-sr-star text-yellow-400"></i>
              <i class="fi fi-sr-star text-yellow-400"></i>
              <i class="fi fi-sr-star text-yellow-400"></i>
              <i class="fi fi-sr-star text-slate-500"></i>
            </div>
          </div>
        </div>
        <!-- End of User Info -->
        <!-- Review Content -->
        <div class="p-4">
          <p class="text-gray-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </p>
        </div>
        <!-- End of Review Content -->
      </div>
      <!-- End of Review Card -->
        ');
      }
      ?>
    </section>
  </div>

</main>