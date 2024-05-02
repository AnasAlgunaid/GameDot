<main>
  <!-- Manage games -->
  <div class="xl:container mx-auto p-8">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Manage Games
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div class="flex justify-between items-center mb-4">
      <a href="./add_game">
        <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Add Game</button>
      </a>
      <form action="" method="get" class="relative">
        <input type="text" name="search" id="search" class="bg-secondaryBlack w-64 md:w-96 px-4 py-2 rounded-lg focus:outline-none focus:ring-primary focus:border-primary" placeholder="Search for games">
        <button type="submit" class="absolute right-0 top-0 h-full px-4 py-2">
          <i class="fi fi-rr-search"></i>
        </button>
      </form>
    </div>
    <div class="overflow-x-auto bg-secondaryBlack rounded-xl p-4">
      <table class="w-full border-collapse border border-gray-600">
        <thead>
          <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Name</th>
            <th class="border px-4 py-2">Price</th>
            <th class="border px-4 py-2">Status</th>
            <th class="border px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">Game 1</td>
            <td class="border px-4 py-2">100 SR</td>
            <td class="border px-4 py-2">Available</td>
            <td class="border px-4 py-2 ">
              <div class="flex gap-4">
                <a href="./edit_game" class="bg-primary  px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Edit</a>
                <button class="bg-red-500
            px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300" onclick="window.confirm('Are you sure you want to delete?')">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Game 2</td>
            <td class="border px-4 py-2">200 SR</td>
            <td class="border px-4 py-2">Available</td>
            <td class="border px-4 py-2">
              <div class="flex gap-4">
                <a href="./edit_game" class="bg-primary  px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Edit</a>
                <button class="bg-red-500
            px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300" onclick="window.confirm('Are you sure you want to delete?')">Delete</button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="border px-4 py-2">3</td>
            <td class="border px-4 py-2">Game 3</td>
            <td class="border px-4 py-2">300 SR</td>
            <td class="border px-4 py-2">Available</td>
            <td class="border px-4 py-2">
              <div class="flex gap-4">
                <a href="./edit_game" class="bg-primary  px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Edit</a>
                <button class="bg-red-500
            px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300" onclick="window.confirm('Are you sure you want to delete?')">Delete</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  <!-- End of Manage games -->
</main>