<?php require(getHeaderPath()) ?>

<main>
  <!-- Manage games -->
  <div class="xl:container mx-auto p-8">

    <div class="flex justify-between items-center gap-4 flex-wrap ">
      <div class="flex items-start gap-x-3">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Games
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>

        <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2"><?= count($games) ?> games</span>
      </div>

      <!-- Add game -->
      <a href="./add">
        <button class="bg-primary px-8 py-2 font-medium rounded-lg text-white hover:opacity-85 duration-300 flex justify-center items-center">
          <i class="fi fi-rr-plus mt-1 mr-2"></i>
          <p>Add Game</p>
        </button>
      </a>
    </div>

    <!-- Start of Games Table -->
    <section>
      <div class="flex flex-col mt-6">
        <div class="overflow-x-auto ">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <?php
                    foreach ($gamesColumns as $column) :
                    ?>
                      <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'><?= $column ?></th>
                    <?php endforeach; ?>

                    <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'>Actions</th>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($games as $game) : ?>
                    <tr>
                      <?php foreach ($gamesColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap hover:text-primary duration-300'><a href="./<?= $game['id'] ?>"><?= $game[$dbcolumn]  ?></a></td>
                      <?php endforeach; ?>
                      <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                          <a href="./stock/<?= $game["id"] ?>" class="text-gray-500 transition-colors duration-200 dark:hover:text-primary dark:text-gray-300 hover:text-primary focus:outline-none text-base">
                            <i class="fi fi-rr-boxes"></i>
                          </a>

                          <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none text-base">
                            <i class="fi fi-rr-edit"></i>
                          </button>

                          <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none text-base">
                            <i class="fi fi-rr-trash "></i>
                          </button>

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
    <!-- End of Games Table-->

  </div>
  <!-- End of Manage games -->
</main>
<?php require(getFooterPath()) ?>