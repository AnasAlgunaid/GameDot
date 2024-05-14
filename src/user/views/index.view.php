<?php require(getHeaderPath()) ?>
<!-- Hero Section -->
<main>
  <div class="xl:container mx-auto px-8 mt-4">
    <div class="w-full max-h-[36rem] rounded-2xl overflow-hidden ">
      <div class="glider-contain">
        <div class="gliderHero ">
          <div class="rounded-xl sm:rounded-2xl md:rounded-3xl mx-2 overflow-hidden">
            <img class="w-full object-cover" src="./public/assets/images/hero.png" alt="Hero Section">
          </div>
          <div class="rounded-xl sm:rounded-2xl md:rounded-3xl mx-2 overflow-hidden">
            <img class="w-full object-cover" src="./public/assets/images/hero.png" alt="Hero Section">
          </div>
          <div class="rounded-xl sm:rounded-2xl md:rounded-3xl mx-2 overflow-hidden">
            <img class="w-full object-cover" src="./public/assets/images/hero.png" alt="Hero Section">
          </div>
        </div>
        <button aria-label="Previous" id="glider-prevHero" class="glider-prev hidden sm:block"><i class="fi fi-rr-angle-small-left"></i></button>
        <button aria-label="Next" id="glider-nextHero" class="glider-next hidden sm:block"><i class="fi fi-rr-angle-small-right"></i></button>
        <div role="tablist" id="hero-dots" class="dots"></div>
      </div>
    </div>
  </div>
</main>
<!-- End of Hero Section -->

<!-- Genres Section -->
<section class="xl:container mx-auto px-8 my-8">
  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Genres
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./genres" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>

  <div class="glider-contain">
    <div class="gliderGenres">

      <?php foreach ($genres as $genre) : ?>
        <a href="/gamedot/games?genre=<?= $genre['name'] ?>" class="py-20 mx-2 text-2xl <?= $genresColors[strtolower($genre['name'])] ?> rounded-lg  flex justify-center items-center font-bold hover:scale-[1.02] cursor-pointer duration-300 h-full">
          <?= $genre['name'] ?>
        </a>
      <?php endforeach ?>

    </div>

    <button aria-label="Previous" id="glider-prevGenres" class="glider-prev hidden sm:block"><i class="fi fi-rr-angle-small-left"></i></button>
    <button aria-label="Next" id="glider-nextGenres" class="glider-next hidden sm:block"><i class="fi fi-rr-angle-small-right"></i></button>
    <div role="tablist" class="dots"></div>
  </div>
</section>
<!-- End of Genres Section -->

<!-- Latest Section -->
<section class="xl:container mx-auto px-8 my-8">

  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Latest
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./games" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>
  <div class="glider-contain">
    <div class="gliderLatest">
      <?php foreach ($latestGames as $game) : ?>
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

    <button aria-label="Previous" id="glider-prevLatest" class="glider-prev hidden sm:block"><i class="fi fi-rr-angle-small-left"></i></button>
    <button aria-label="Next" id="glider-nextLatest" class="glider-next hidden sm:block"><i class="fi fi-rr-angle-small-right"></i></button>
    <div role="tablist" class="dots"></div>
  </div>

</section>
<!-- End of Latest Section -->

<!-- Best Deals Section -->
<section class="xl:container mx-auto px-8 my-8">

  <div class="flex justify-between items-start">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Best Deals
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <a href="./games" class="text-primary hover:opacity-85 duration-300">View All</a>
  </div>
  <div class="glider-contain">
    <div class="gliderBestDeals">
      <?php foreach ($bestDealsGames as $game) : ?>
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

    <button aria-label="Previous" id="glider-prevBestDeals" class="glider-prev hidden sm:block"><i class="fi fi-rr-angle-small-left"></i></button>
    <button aria-label="Next" id="glider-nextBestDeals" class="glider-next hidden sm:block"><i class="fi fi-rr-angle-small-right"></i></button>
    <div role="tablist" class="dots"></div>
  </div>

</section>
<!-- End of Best Deals Section -->



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
  window.addEventListener('load', function() {

    // Hero Glider
    new Glider(document.querySelector('.gliderHero'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      scrollLock: true,
      dots: '#hero-dots',
      arrows: {
        prev: '#glider-prevHero',
        next: '#glider-nextHero'
      },
    });

    // Genres Glider
    new Glider(document.querySelector('.gliderGenres'), {
      slidesToShow: 2,
      slidesToScroll: 2,
      draggable: true,

      arrows: {
        prev: '#glider-prevGenres',
        next: '#glider-nextGenres'
      },
      responsive: [{
        // screens greater than >= 640px
        breakpoint: 640,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,

        }
      }, {
        // screens greater than >= 768px
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,

        }
      }, {
        // screens greater than >= 1024px
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,

        }
      }, ]

    });

    // Latest Glider
    new Glider(document.querySelector('.gliderLatest'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      arrows: {
        prev: '#glider-prevLatest',
        next: '#glider-nextLatest'
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

    // Best Deals Glider
    // Latest Glider
    new Glider(document.querySelector('.gliderBestDeals'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      arrows: {
        prev: '#glider-prevBestDeals',
        next: '#glider-nextBestDeals'
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