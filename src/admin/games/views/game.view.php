<?php require(getHeaderPath()); ?>
<!-- Game Page -->
<main class="min-h-[80vh] ">
  <div class="xl:container mx-auto px-8 my-8">
    <section class="grid  md:gap-12">
      <!-- Screenshots -->
      <section class="swiper  w-full max-h-[32rem] rounded-xl md:rounded-3xl overflow-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php foreach ($media as $m) : ?>
            <div class="swiper-slide">
              <img class="w-full object-fit h-full bg-center" src="<?= $m["media_url"] ?>" alt="">
            </div>
          <?php endforeach ?>
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
            <?= $game["name"] ?>
          </h2>
        </div>
        <div>
          <p class="text-primary font-bold text-xl text-center md:text-left">
            <?= $game["price"] ?> SR
          </p>
        </div>
        <!-- End of Name and Price-->
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
        <p class="text-gray-400">No Reviews Yet</p>
      </section>

    <?php endif; ?>
  </div>

</main>

<?php require(getFooterPath()); ?>