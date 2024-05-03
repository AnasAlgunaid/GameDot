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

        <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2">100 games</span>
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
                    foreach ($gamesColumns as $column) {
                      echo "<th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'>$column</th>";
                    }
                    ?>

                    <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'>Actions</th>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($games as $game) {
                    echo "<tr>";
                    foreach ($gamesColumns as $column) {
                      echo "<td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap'>$game[$column]</td>";
                    }
                    echo '
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
                    ';
                    echo "</tr>";
                  }
                  ?>

                  </tr>
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