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

    <!-- Start of Recent Orders -->
    <section>
      <div class="flex items-start gap-x-3">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Recent Orders
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>

        <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2">100 users</span>
      </div>

      <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Order ID</th>

                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Total Price</th>

                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Email address</th>

                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Order Date</th>
                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Payment Method</th>

                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400">Actions</th>
                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">
                  <?php for ($i = 0; $i < 10; $i++) {
                    echo '                  <!-- Record -->
                  <tr>
                    <!-- Order ID -->
                    <td class="px-4 py-4 text-sm font-medium text-gray-200 whitespace-nowrap">
                      <div class="inline-flex items-center gap-x-3">
                        <h2>#125</h2>
                      </div>
                    </td>

                    <!-- Total Price -->
                    <td class="px-4  py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                      <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                        <h2 class="text-sm font-normal text-emerald-500">134SR</h2>
                      </div>
                    </td>

                    <!-- Email Address -->
                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">anas@algunaid.com</td>

                    <!-- Order Date -->
                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">03-05-2024</td>

                    <!-- Payment Method -->
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <p class="px-3 py-1 text-xs text-primary rounded-full dark:bg-gray-800 bg-blue-100/60">Paypal</p>
                      </div>
                    </td>

                    <!-- Actions -->
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div class="flex items-center gap-x-6">
                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>

                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- End of Record -->';
                  } ?>
                  <!-- Record -->
                  <tr>
                    <!-- Order ID -->
                    <td class="px-4 py-4 text-sm font-medium text-gray-200 whitespace-nowrap">
                      <div class="inline-flex items-center gap-x-3">
                        <h2>#125</h2>
                      </div>
                    </td>

                    <!-- Total Price -->
                    <td class="px-4  py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                      <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                        <h2 class="text-sm font-normal text-emerald-500">134SR</h2>
                      </div>
                    </td>

                    <!-- Email Address -->
                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">anas@algunaid.com</td>

                    <!-- Order Date -->
                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">03-05-2024</td>

                    <!-- Payment Method -->
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <p class="px-3 py-1 text-xs text-primary rounded-full dark:bg-gray-800 bg-blue-100/60">Paypal</p>
                      </div>
                    </td>

                    <!-- Actions -->
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div class="flex items-center gap-x-6">
                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>

                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- End of Record -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- End of Recent Orders-->

</main>
<?php require(getFooterPath()) ?>