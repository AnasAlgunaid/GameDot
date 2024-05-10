<?php require(getHeaderPath()) ?>

<main>
  <!-- User Page -->
  <div class="xl:container mx-auto p-8">
    <div class="flex items-start gap-x-3">
      <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
        Stock
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>

      <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2"><?= count($stock) ?> in stock</span>
    </div>
    <div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="game_id" class="block text-sm text-gray-300">Game ID</label>
          <input type="text" name="game_id" id="game_id" value="<?= $game['id'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
        </div>
        <div>
          <label for="game_name" class="block text-sm text-gray-300">Game Name</label>
          <input type="text" name="game_name" id="game_name" value="<?= $game['name'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
        </div>
        <div>
          <label for="game_price" class="block text-sm text-gray-300">Game Price</label>
          <input type="text" name="game_price" id="game_price" value="<?= $game['price'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
        </div>
        <div>
          <label for="game_platform" class="block text-sm text-gray-300">Game Platform</label>
          <input type="text" name="game_platform" id="game_platform" value="<?= $game['platform'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
        </div>
        <!-- End of user page -->
      </div>
    </div>
    <!-- Start of orders Table -->
    <section class="mt-8">
      <h2 class="text-3xl font-bold inline-block mb-4 relative pb-1">
        Stock
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>

      <!-- Add to the stock -->
      <div>
        <!-- Errors -->
        <?php if (isset($errors)) : ?>
          <div class="bg-red-400 border text-white px-4 py-3 mb-2 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"><?= $errors[0] ?></span>
          </div>
        <?php endif; ?>

        <form action="" method="POST">
          <div class="sm:flex gap-6 justify-center items-end">
            <div class="flex-1">
              <label for="new_game_code" class="block text-sm text-gray-300">Game Code</label>
              <input type="text" name="new_game_code" id="new_game_code" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
            </div>
            <div class="mt-4 sm:mt-0">
              <button type="submit" name="add_stock_form" class="bg-primary px-4 py-2 font-medium rounded-lg text-white hover:opacity-85 duration-300 flex justify-center items-center">
                <i class="fi fi-rr-plus mt-1 mr-2"></i>
                <p>Add to Stock</p>
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="flex flex-col mt-6">
        <div class="overflow-x-auto ">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <?php
                    foreach ($stockColumns as $column) :
                    ?>
                      <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'><?= $column ?></th>
                    <?php endforeach; ?>
                    <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'>Actions</th>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($stock as $s) : ?>
                    <tr>
                      <?php foreach ($stockColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap hover:text-primary duration-300'><?= $s[$dbcolumn]  ?></td>
                      <?php endforeach; ?>
                      <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                          <form action="" method="POST">
                            <input type="hidden" name="delete_stock" value="<?= $s['id'] ?>">
                            <button type="submit" name="delete_stock_form" class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none text-base">
                              <i class="fi fi-rr-trash "></i>
                            </button>
                          </form>
                        </div>
                      </td>
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
    <!-- End of orders Table-->
  </div>


</main>

<?php require(getFooterPath()) ?>