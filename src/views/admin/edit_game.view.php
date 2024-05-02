<main>
  <!-- Edit Game page -->
  <div class="xl:container mx-auto p-8 ">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Edit Game
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" class="max-w-5xl mx-auto">
      <!-- Start of Images Upload -->
      <div class="flex items-center justify-center w-full">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2  border-dashed rounded-lg cursor-pointer hover:bg-bray-800 bg-myBlack  border-gray-600 hover:border-gray-500 hover:bg-secondaryBlack">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
          </div>
          <input id="dropzone-file" type="file" class="hidden" />
        </label>
      </div>
      <!-- End of Images upload -->

      <!-- Game name -->
      <div class="mt-8">
        <label for="game-name" class="block text-sm text-gray-300">Game Name</label>
        <input type="text" name="game-name" id="game-name" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game name">
      </div>
      <!-- End of game name -->

      <!-- Game Description -->
      <div class="mt-8">
        <label for="game-description" class="block text-sm text-gray-300">Game Description</label>
        <textarea id="game-description" name="game-description" rows="3" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game description"></textarea>
      </div>
      <!-- End of game description -->

      <!-- Game Price -->
      <div class="mt-8">
        <label for="game-price" class="block text-sm text-gray-300">Game Price</label>
        <input type="number" name="game-price" id="game-price" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game price">
      </div>
      <!-- End of game price -->

      <!-- Game Genre -->
      <div class="mt-8">
        <label for="game-genre" class="block text-sm text-gray-300">Game Genre</label>
        <select id="game-genre" name="game-genre" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
          <option value="action">Action</option>
          <option value="adventure">Adventure</option>
          <option value="rpg">RPG</option>
          <option value="strategy">Strategy</option>
          <option value="simulation">Simulation</option>
          <option value="sports">Sports</option>
          <option value="puzzle">Puzzle</option>
          <option value="horror">Horror</option>
          <option value="shooter">Shooter</option>
        </select>
      </div>
      <!-- End of game genre -->

      <!-- Game Publisher -->
      <div class="mt-8">
        <label for="game-publisher" class="block text-sm text-gray-300">Game Publisher</label>
        <select id="game-publisher" name="game-publisher" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
          <option value="ubisoft">Ubisoft</option>
          <option value="ea">EA</option>
          <option value="activision">Activision</option>
          <option value="bethesda">Bethesda</option>
          <option value="rockstar">Rockstar</option>
          <option value="sony">Sony</option>
          <option value="microsoft">Microsoft</option>
          <option value="nintendo">Nintendo</option>
        </select>
      </div>
      <!-- End of game publisher -->

      <!-- Game Release Date -->
      <div class="mt-8">
        <label for="game-release-date" class="block text-sm text-gray-300">Game Release Date</label>
        <input type="date" name="game-release-date" id="game-release-date" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
      </div>
      <!-- End of game release date -->

      <!-- Game Platform -->
      <div class="mt-8">
        <label for="game-platform" class="block text-sm text-gray-300">Game Platform</label>
        <select id="game-platform" name="game-platform" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
          <option value="ps4">PS4</option>
          <option value="ps5">PS5</option>
          <option value="xbox">Xbox</option>
          <option value="pc">PC</option>
          <option value="nintendo">Nintendo</option>
        </select>
      </div>
      <!-- End of game platform -->

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

      <!-- Game Stock -->
      <div class="mt-8">
        <label for="game-stock" class="block text-sm text-gray-300">Game Stock</label>
        <input type="number" name="game-stock" id="game-stock" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter game stock">
      </div>
      <!-- End of game stock -->

      <!-- Submit -->
      <div class="mt-8">
        <button type="submit" class="bg-primary w-full text-white px-4 py-2 rounded-md hover:opacity-90 duration-300">Edit Game</button>
      </div>
      <!-- End of Submit -->
    </form>
  </div>
</main>