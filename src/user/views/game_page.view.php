<?php require(getHeaderPath()) ?>
<main class="min-h-[80vh] ">
  <div class="xl:container mx-auto px-8 my-8">

    <section class="grid lg:grid-cols-2 md:gap-12 ">
      <!-- Screenshots -->
      <section class="w-full max-h-[32rem] rounded-xl md:rounded-3xl overflow-hidden">
        <div class="glider-contain">
          <div class="gliderScreenshots ">
            <?php foreach ($media as $m) : ?>
              <div class="rounded-xl sm:rounded-2xl md:rounded-3xl mx-2 overflow-hidden">
                <img class="w-full object-cover" src="<?= $m["media_url"] ?>" alt="Screenshot">
              </div>
            <?php endforeach ?>
          </div>
          <button aria-label="Previous" id="glider-prevScreenshots" class="glider-prev hidden "><i class="fi fi-rr-angle-small-left"></i></button>
          <button aria-label="Next" id="glider-nextScreenshots" class="glider-next hidden "><i class="fi fi-rr-angle-small-right"></i></button>
          <div role="tablist" id="screenshots-dots" class="dots"></div>
        </div>
      </section>
      <!-- End of Screenshots -->
      <!-- Start of buying -->
      <section>
        <!-- Start of Name and Price -->
        <div class="mt-4 mb-1">
          <h2 class="text-3xl sm:text-4xl font-bold  text-center md:text-left">
            <?= $game["name"] ?>
          </h2>
        </div>
        <div>
          <p class="text-primary font-bold text-xl text-center md:text-left">
            <?= $game["price"] ?> SR
          </p>
        </div>
        <!-- End of Name and Price-->


        <!-- Start of Quantity -->
        <div class="my-8">
          <label for="quantity" class="block text-sm  text-gray-300">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required value="1" max="5" min="1">
        </div>
        <!-- End of Quantity -->

        <?php if ($game['stock'] > 0) : ?>
          <!-- Start of Add to Cart -->
          <a href="./cart" class="my-8">

            <button class="bg-primary px-4 text-sm md:px-8 py-2 rounded-md hover:opacity-85 duration-300 w-full">
              <i class="fi fi-rr-shopping-cart mr-1 "></i>
              Add to Cart
            </button>
          </a>
          <!-- End of Add to Cart -->
        <?php else : ?>
          <a href="" class="my-8">

            <button class="bg-gray-500 px-4 text-sm md:px-8 py-2 rounded-md hover:opacity-85 duration-300 w-full" disabled>
              <i class="fi fi-rr-shopping-cart mr-1 "></i>
              Add to Cart
            </button>
          </a>
          <p class="text-red-500 text-center mt-2">Out of stock</p>
        <?php endif; ?>


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
        <?= $game["description"] ?>
      </p>
    </div>
    <!-- End of Description -->

    <!-- Start of platforms information -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Platform
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        <?= $game["platform"] ?>
      </p>
    </div>
    <!-- End of platforms information -->

    <!-- Start of Age Rating -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Age Rating
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        <?= $game["age_rating"] ?>
      </p>
    </div>
    <!-- End of Age Rating -->

    <!-- Start of Publisher information -->
    <div class="my-8">
      <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
        Publisher
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <p class="text-gray-300">
        <?= $game["publisher"] ?>
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
        <?php foreach ($genres as $genre) {
          echo $genre . ', ';
        } ?>
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
        <?= $game["release_date"] ?>
      </p>
    </div>
    <!-- End of Release Date information -->

    <!-- Similar Section -->
    <section>
      <div class="flex justify-between items-start">
        <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
          Similar Games
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>
      </div>
      <div class="glider-contain">
        <div class="gliderSimilar">
          <?php foreach ($similarGames as $similarGame) : ?>
            <a href="./games/<?= $similarGame['id'] ?>">
              <!-- Game Card -->
              <div class="bg-secondaryBlack rounded-xl overflow-hidden duration-300 hover:scale-[1.02] cursor-pointer mx-2 h-full flex flex-col justify-between">
                <img class="w-full " src="<?= $similarGame['main_image_url'] ?>" alt="">
                <div class="p-4 flex flex-col justify-between h-full">
                  <h3 class="text-lg font-bold"><?= $similarGame['name'] ?></h3>
                  <p class="font-base text-lg  text-primary"><?= $similarGame['price'] ?> SR</p>
                  <p class="text-base  text-gray-400"><?= $similarGame['platform'] ?></p>
                  <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300 mt-4 w-full">
                    <i class="fi fi-rr-shopping-cart mr-1 "></i>
                    Add to Cart
                  </button>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <button aria-label="Previous" id="glider-prevSimilar" class="glider-prev hidden sm:block"><i class="fi fi-rr-angle-small-left"></i></button>
        <button aria-label="Next" id="glider-nextSimilar" class="glider-next hidden sm:block"><i class="fi fi-rr-angle-small-right"></i></button>
        <div role="tablist" class="dots"></div>
      </div>

    </section>
    <!-- End of Similar Section -->

    <!-- Start of Reviews -->
    <?php if (isset($reviews[0]["id"])) : ?>
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
            <p class="text-gray-300 text-5xl font-bold"> <?= $avg_rating ?> / 5 </p>
          </div>
          <p class="text-gray-400">Based on <?= count($reviews) ?> Reviews</p>

        </div>
        <!-- End of Average Review Section -->


        <?php foreach ($reviews as $review) : ?>
          <!-- Start of Review Card -->
          <div class="bg-secondaryBlack rounded-2xl my-4">
            <!-- User Info -->
            <div class="flex items-center  p-4 border-b border-gray-800">
              <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary flex justify-center items-center text-xl"><?= $review["full_name"][0] ?></div>
              <div class="ml-4 w-full">
                <div class="flex justify-between items-center w-full flex-wrap">
                  <h3 class="text-lg font-bold"><?= $review["full_name"] ?></h3>
                  <p class="text-gray-400"><?= $review["review_date"] ?></p>
                </div>

                <!-- Rating -->
                <div class="flex justify-start items-center gap-2">
                  <?php for ($i = 0; $i < $review["rating"]; $i++) : ?>
                    <i class="fi fi-sr-star text-yellow-400"></i>
                  <?php endfor; ?>

                  <?php for ($i = $review["rating"]; $i < 5; $i++) : ?>
                    <i class="fi fi-sr-star text-slate-500"></i>
                  <?php endfor; ?>

                </div>
              </div>
            </div>
            <!-- End of User Info -->
            <!-- Review Content -->
            <div class="p-4">
              <p class="text-gray-300">
                <?= $review["review_text"] ?>
              </p>
            </div>
            <!-- End of Review Content -->
          </div>
          <!-- End of Review Card -->

        <?php endforeach; ?>
      </section>

    <?php else : ?>
      <!-- No Reviews Available -->
      <section class="my-16">
        <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
          Reviews
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>
        <p class="text-gray-400">Be the first one to leave a review!</p>
      </section>

    <?php endif; ?>
  </div>

</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
  window.addEventListener('load', function() {
    // Screenshots Glider
    new Glider(document.querySelector('.gliderScreenshots'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      scrollLock: true,
      dots: '#screenshots-dots',
      arrows: {
        prev: '#glider-prevScreenshots',
        next: '#glider-nextScreenshots'
      },
    });


    // Latest Glider
    new Glider(document.querySelector('.gliderSimilar'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      arrows: {
        prev: '#glider-prevSimilar',
        next: '#glider-nextSimilar'
      },
      responsive: [{
        // screens greater than >= 640px
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      }, {
        // screens greater than >= 768px
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,

        }
      }, {
        // screens greater than >= 1024px
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,

        }
      }, ]

    });
  });
</script>
<?php require(getFooterPath()) ?>