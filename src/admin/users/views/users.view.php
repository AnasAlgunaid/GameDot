<?php require(getHeaderPath()) ?>

<main>
  <!-- Manage Users -->
  <div class="xl:container mx-auto p-8">

    <div class="flex justify-between items-center gap-4 flex-wrap ">
      <div class="flex items-start gap-x-3">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Users
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>

        <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2"><?= count($users) ?> Users</span>
      </div>

    </div>

    <!-- Start of users Table -->
    <section>
      <div class="flex flex-col mt-6">
        <div class="overflow-x-auto ">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <?php
                    foreach ($usersColumns as $column) :
                    ?>
                      <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400 '><?= $column ?></th>
                    <?php endforeach; ?>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($users as $user) : ?>
                    <tr>
                      <?php foreach ($usersColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap hover:text-primary duration-300'><a href="./<?= $user['id'] ?>"><?= $user[$dbcolumn]  ?></a></td>
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
    <!-- End of users Table-->

  </div>
  <!-- End of Manage users -->
</main>
<?php require(getFooterPath()) ?>