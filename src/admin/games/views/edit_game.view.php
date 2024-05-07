<?php require(getHeaderPath()) ?>
<main>
  <!-- Add game page -->
  <div class="xl:container mx-auto p-8 ">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Add Game
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" class="max-w-5xl mx-auto">
      <!-- Start of Main Image Upload -->
      <div>
        <label for="mainImage" class="block text-sm text-gray-300 mb-2">Main Image</label>
        <input type="file" id="mainImage" class="filepond" name="mainImage" data-max-file-size="3MB" data-max-files="1">
      </div>
      <!-- End of Main Image upload -->

      <!-- Start of Screenshots Upload -->
      <div>
        <label for="screenshots" class="block text-sm text-gray-300 mb-2">Screenshots</label>
        <input type="file" id="screenshots" class="filepond" name="screenshots" data-max-file-size="3MB" data-max-files="7" multiple data-allow-reorder="true">
      </div>
      <!-- End of Screenshots upload -->

      <!-- Game name -->
      <div class="mt-8">
        <label for="game-name" class="block text-sm text-gray-300">Game Name</label>
        <input type="text" name="game-name" id="game-name" value="<?= $game['name'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game name">
      </div>
      <!-- End of game name -->

      <!-- Game Description -->
      <div class="mt-8">
        <label for="game-description" class="block text-sm text-gray-300">Game Description</label>
        <textarea id="game-description" name="game-description" rows="3" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game description"><?= $game['description'] ?></textarea>
      </div>
      <!-- End of game description -->

      <!-- Game Price -->
      <div class="mt-8">
        <label for="game-price" class="block text-sm text-gray-300">Game Price</label>
        <input type="number" name="game-price" id="game-price" value="<?= $game['price'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game price">
      </div>
      <!-- End of game price -->


      <!-- Game Genre -->
      <div class="mt-8">
        <label for="game-genre" class="block text-sm text-gray-300 mb-2">Game Genre</label>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5  gap-6 ">
          <?php foreach ($genres as $genre) : ?>
            <div class="flex items-center">
              <input id="<?= $genre ?>" type="checkbox" value="<?= $genre ?>" <?php echo in_array($genre, $game['genres']) ? 'checked' : "" ?> class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="<?= $genre ?> " class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?= $genre ?> </label>
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

      <!-- TODO -->
      <!-- Game Age Rating -->
      <div class="mt-8">
        <label for="game-age-rating" class="block text-sm text-gray-300">Game Age Rating</label>
        <select id="game-age-rating" name="game-age-rating" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
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
        <button type="submit" class="bg-primary w-full text-white px-4 py-2 rounded-md hover:opacity-90 duration-300">Add Game</button>
      </div>
      <!-- End of Submit -->

    </form>
  </div>
</main>
<?php require(getFooterPath()) ?>