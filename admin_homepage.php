<?php include('./src/templates/header.php'); ?>

<main>
  <div class="xl:container mx-auto px-8 min-h-[80vh]">
    <!-- Start of stats -->
    <section>
      <div class="my-8 flex justify-between items-center">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Admin Dashboard
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>
        <!-- Logout -->
        <a href="./index.php" class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Logout</a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Users</h3>
          <p class="text-3xl font-bold">100</p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Games</h3>
          <p class="text-3xl font-bold">100</p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Orders</h3>
          <p class="text-3xl font-bold">100</p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Sales</h3>
          <p class="text-3xl font-bold">10000 SR</p>
        </div>



      </div>
    </section>
    <!-- End of stats -->



    <!-- Options -->
    <section class="my-10">
      <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
        Admin Menu
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <a href="./manage_games.php" class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-gamepad text-3xl"></i>
          <h3 class="text-2xl  ">Games</h3>
        </a>
        <div class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-category text-3xl"></i>
          <h3 class="text-2xl  ">Genres</h3>
        </div>
        <div class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-house-user text-3xl"></i>
          <h3 class="text-2xl  ">Publishers</h3>
        </div>
        <div class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-badge-percent text-3xl"></i>
          <h3 class="text-2xl  ">Offers</h3>
        </div>

      </div>


    </section>
    <!-- End of Options -->

    <!-- Start of Recent Orders -->
    <section class="my-8">
      <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
        Recent Orders
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <div class="overflow-x-auto ">
        <table class="table-auto w-full ">
          <thead>
            <tr>
              <th class="px-4 py-2">Order ID</th>
              <th class="px-4 py-2">User</th>
              <th class="px-4 py-2">Game</th>
              <th class="px-4 py-2">Price</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2">1</td>
              <td class="border px-4 py-2">John Doe</td>
              <td class="border px-4 py-2">Game 1</td>
              <td class="border px-4 py-2">100 SR</td>
              <td class="border px-4 py-2">Pending</td>
              <td class="border px-4 py-2">
                <button class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">View</button>
              </td>
            </tr>
            <tr>
              <td class="border px-4 py-2">2</td>
              <td class="border px-4 py-2">Jane Doe</td>
              <td class="border px-4 py-2">Game 2</td>
              <td class="border px-4 py-2">200 SR</td>
              <td class="border px-4 py-2">Delivered</td>
              <td class="border px-4 py-2">
                <button class="bg-primary
                px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">View</button>
              </td>
            </tr>
            <tr>
              <td class="border px-4 py-2">3</td>
              <td class="border px-4 py-2">John Doe</td>
              <td class="border px-4 py-2">Game 3</td>
              <td class="border px-4 py-2">300 SR</td>
              <td class="border px-4 py-2">Pending</td>
              <td class="border px-4 py-2">
                <button class="bg-primary
                px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <!-- End of Recent Orders -->

</main>




<?php include('./src/templates/footer.php'); ?>