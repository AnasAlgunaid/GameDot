<?php require(getHeaderPath()) ?>
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
        <a href="../" class="bg-primary px-4 py-2 rounded-lg text-white hover:opacity-85 duration-300">Logout</a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Users</h3>
          <p class="text-3xl font-bold"><?= $totalUsers ?></p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Games</h3>
          <p class="text-3xl font-bold"><?= $totalGames ?></p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Orders</h3>
          <p class="text-3xl font-bold"><?= $totalOrders ?></p>
        </div>
        <div class="bg-secondaryBlack p-4 rounded-lg shadow-lg">
          <h3 class="text-xl  text-gray-500">Total Sales</h3>
          <p class="text-3xl font-bold"><?= $totalSales ?> SR</p>
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
        <a href="./games/" class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-gamepad text-3xl"></i>
          <h3 class="text-2xl  ">Games</h3>
        </a>
        <a href="./users/" class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-rr-users text-3xl"></i>
          <h3 class="text-2xl  ">Users</h3>
        </a>
        <a href="./orders/" class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-rr-shopping-cart text-3xl"></i>
          <h3 class="text-2xl">Orders</h3>
        </a>
        <a href="./reviews/" class="bg-secondaryBlack p-8 rounded-lg shadow-lg flex flex-col justify-center items-center hover:bg-primary duration-300 cursor-pointer">
          <i class="fi fi-sr-star text-3xl"></i>
          <h3 class="text-2xl  ">Reviews</h3>
        </a>

      </div>


    </section>
    <!-- End of Options -->

    <!-- Start of recent orders Table -->
    <section>
      <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
        Recent Orders
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <div class="flex flex-col mt-6">
        <div class="overflow-x-auto ">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <?php
                    foreach ($ordersColumns as $column) :
                    ?>
                      <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'><?= $column ?></th>
                    <?php endforeach; ?>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($lastOrders as $order) : ?>
                    <tr>
                      <?php foreach ($ordersColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap'><?= $order[$dbcolumn]  ?></td>
                      <?php endforeach; ?>
                    </tr>
                  <?php endforeach; ?>
                  <!-- End of Record -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of recent orders Table-->

</main>
<?php require(getFooterPath()) ?>