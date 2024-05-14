<?php require(getHeaderPath()) ?>
<!-- Add Game Errors-->
<?php if (isset($_SESSION['addGameErrors'])) : ?>
  <?php foreach ($_SESSION['addGameErrors'] as $error) : ?>
    <div class="bg-red-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline"><?= $error ?></span>
    </div>
  <?php endforeach; ?>
  <?php unset($_SESSION['addGameErrors']); ?>
<?php endif; ?>

<main>
  <!-- Add game page -->
  <div class="xl:container mx-auto p-8 ">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Add Game
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" method="POST" class="max-w-5xl mx-auto" enctype="multipart/form-data">
      <!-- Start of Main Image Upload -->
      <div class="max-w-sm my-4">
        <label for="mainImage" class="block text-sm text-gray-300 mb-2">Main Image</label>
        <label for="mainImage" class="sr-only">Choose file</label>
        <input type="file" name="mainImage" id="mainImage" class="block w-full border border-secondaryBlack shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none file:bg-secondaryBlack file:text-white file:border-0 file:me-4 file:py-3 file:px-4">
      </div>
      <!-- End of Main Image upload -->

      <!-- Start of screenshots Upload -->
      <div class="max-w-sm my-8">
        <label for="screenshots" class="block text-sm text-gray-300 mb-2">Screenshots</label>
        <label for="screenshots" class="sr-only">Choose file</label>
        <input type="file" name="screenshots[]" id="screenshots" class="block w-full border border-secondaryBlack shadow-sm rounded-lg text-sm focus:z-10 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none file:bg-secondaryBlack file:text-white file:border-0 file:me-4 file:py-3 file:px-4" multiple>
      </div>
      <!-- End of screenshots Upload -->

      <!-- Game name -->
      <div class="mt-8">
        <label for="gameName" class="block text-sm text-gray-300">Game Name</label>
        <input type="text" name="gameName" id="gameName" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game name">
      </div>
      <!-- End of game name -->

      <!-- Game Description -->
      <div class="mt-8">
        <label for="gameDescription" class="block text-sm text-gray-300">Game Description</label>
        <textarea id="gameDescription" name="gameDescription" rows="3" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game description"></textarea>
      </div>
      <!-- End of game description -->

      <!-- Game Price -->
      <div class="mt-8">
        <label for="gamePrice" class="block text-sm text-gray-300">Game Price</label>
        <input type="number" name="gamePrice" id="gamePrice" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game price">
      </div>
      <!-- End of game price -->


      <!-- Game Genre -->
      <div class="mt-8">
        <label for="gameGenres" class="block text-sm text-gray-300 mb-2">Game Genre</label>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5  gap-6 ">
          <?php foreach ($genres as $genre) : ?>
            <div class="flex items-center">
              <input id="<?= $genre['name'] ?>" name="gameGenres[]" type="checkbox" value="<?= $genre['id'] ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="<?= $genre['name'] ?> " class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?= $genre['name'] ?> </label>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- End of game genre -->

      <!-- Game Publisher -->
      <div class="mt-8">
        <label for="gamePublisher" class="block text-sm text-gray-300">Game Publisher</label>
        <input type="text" name="gamePublisher" id="gamePublisher" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game publisher">
      </div>
      <!-- End of game publisher -->

      <!-- Game Release Date -->
      <div class="mt-8">
        <label for="gameReleaseDate" class="block text-sm text-gray-300">Game Release Date</label>
        <input type="date" name="gameReleaseDate" id="gameReleaseDate" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
      </div>
      <!-- End of game release date -->

      <!-- Game Platform -->
      <div class="mt-8">
        <label for="gamePlatform" class="block text-sm text-gray-300">Game Platform</label>
        <input type="text" name="gamePlatform" id="gamePlatform" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game platform">
      </div>
      <!-- End of game platform -->

      <!-- Game Age Rating -->
      <div class="mt-8">
        <label for="gameAgeRating" class="block text-sm text-gray-300">Game Age Rating</label>
        <select id="gameAgeRating" name="gameAgeRating" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
          <option value="3">3+</option>
          <option value="7">7+</option>
          <option value="12">12+</option>
          <option value="16">16+</option>
          <option value="18">18+</option>
        </select>
      </div>
      <!-- End of game age rating -->

      <!-- Submit -->
      <div class="mt-8">
        <button type="submit" name="add_game_form" class="bg-primary w-full text-white px-4 py-2 rounded-md hover:opacity-90 duration-300">Add Game</button>
      </div>
      <!-- End of Submit -->

    </form>
  </div>
</main>


<?php require(getFooterPath()) ?>