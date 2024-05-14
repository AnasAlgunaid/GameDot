<?php require(getHeaderPath()) ?>
<!-- edit Game Errors-->
<?php if (isset($_SESSION['editGameErrors'])) : ?>
  <?php foreach ($_SESSION['editGameErrors'] as $error) : ?>
    <div class="bg-red-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline"><?= $error ?></span>
    </div>
  <?php endforeach; ?>
  <?php unset($_SESSION['editGameErrors']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['editGameSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['editGameSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['editGameSuccess']); ?>
<?php endif; ?>

<main>
  <!-- edit game page -->
  <div class="xl:container mx-auto p-8 ">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Edit Game
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" method="POST" class="max-w-5xl mx-auto" enctype="multipart/form-data">


      <!-- Game name -->
      <div class="mt-8">
        <label for="gameName" class="block text-sm text-gray-300">Game Name</label>
        <input type="text" name="gameName" id="gameName" value="<?= $game['name'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game name">
      </div>
      <!-- End of game name -->

      <!-- Game Description -->
      <div class="mt-8">
        <label for="gameDescription" class="block text-sm text-gray-300">Game Description</label>
        <textarea id="gameDescription" name="gameDescription" rows="3" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game description"><?= $game['description'] ?></textarea>
      </div>
      <!-- End of game description -->

      <!-- Game Price -->
      <div class="mt-8">
        <label for="gamePrice" class="block text-sm text-gray-300">Game Price</label>
        <input type="number" name="gamePrice" id="gamePrice" value="<?= $game['price'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game price" step="any">
      </div>
      <!-- End of game price -->


      <!-- Game Genre -->
      <div class="mt-8">
        <label for="gameGenres" class="block text-sm text-gray-300 mb-2">Game Genre</label>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5  gap-6 ">
          <?php foreach ($genres as $genre) : ?>
            <div class="flex items-center">
              <input id="<?= $genre['name'] ?>" name="gameGenres[]" type="checkbox" value="<?= $genre['id'] ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" <?php foreach ($gameGenres as $gameGenre) : ?> <?php if ($genre['id'] == $gameGenre['genre_id']) : ?> checked <?php endif; ?> <?php endforeach; ?>>
              <label for="<?= $genre['name'] ?> " class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?= $genre['name'] ?> </label>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- End of game genre -->

      <!-- Game Publisher -->
      <div class="mt-8">
        <label for="gamePublisher" class="block text-sm text-gray-300">Game Publisher</label>
        <input type="text" name="gamePublisher" id="gamePublisher" value="<?= $game['publisher'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game publisher">
      </div>
      <!-- End of game publisher -->

      <!-- Game Release Date -->
      <div class="mt-8">
        <label for="gameReleaseDate" class="block text-sm text-gray-300">Game Release Date</label>
        <input type="date" name="gameReleaseDate" id="gameReleaseDate" value="<?= $game['release_date'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
      </div>
      <!-- End of game release date -->

      <!-- Game Platform -->
      <div class="mt-8">
        <label for="gamePlatform" class="block text-sm text-gray-300">Game Platform</label>
        <input type="text" name="gamePlatform" id="gamePlatform" value="<?= $game['platform'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game platform">
      </div>
      <!-- End of game platform -->

      <!-- Game Age Rating -->
      <div class="mt-8">
        <label for="gameAgeRating" class="block text-sm text-gray-300">Game Age Rating</label>
        <select id="gameAgeRating" name="gameAgeRating" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
          <option value="3" <?php if ($game['age_rating'] === '3') echo 'selected'; ?>>3+</option>
          <option value="7" <?php if ($game['age_rating'] === '3') echo 'selected'; ?>>7+</option>
          <option value="12" <?php if ($game['age_rating'] === '3') echo 'selected'; ?>>12+</option>
          <option value="16" <?php if ($game['age_rating'] === '3') echo 'selected'; ?>>16+</option>
          <option value="18" <?php if ($game['age_rating'] === '3') echo 'selected'; ?>>18+</option>
        </select>
      </div>
      <!-- End of game age rating -->

      <!-- Submit -->
      <div class="mt-8">
        <button type="submit" name="edit_game_form" class="bg-primary w-full text-white px-4 py-2 rounded-md hover:opacity-90 duration-300">Edit Game</button>
      </div>
      <!-- End of Submit -->

    </form>
  </div>
</main>


<?php require(getFooterPath()) ?>