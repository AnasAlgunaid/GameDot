<?php require(getHeaderPath()) ?>

<main>
  <!-- User Page -->
  <div class="xl:container mx-auto p-8">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      User Information
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="fname" class="block text-sm text-gray-300">First Name</label>
          <input type="text" name="fname" id="fname" value="<?= $user['fname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter first name" disabled>
        </div>
        <div>
          <label for="lname" class="block text-sm text-gray-300">Last Name</label>
          <input type="text" name="lname" id="lname" value="<?= $user['lname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter last name" disabled>
        </div>
        <div>
          <label for="email" class="block text-sm text-gray-300">Email</label>
          <input type="email" name="email" id="email" value="<?= $user['email'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter email" disabled>
        </div>
        <div>
          <label for="dob" class="block text-sm text-gray-300">Date of Birth</label>
          <input type="date" name="dob" id="dob" value="<?= $user['dob'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
        </div>
        <!-- End of user page -->
      </div>
    </div>
    <!-- Start of orders Table -->
    <section class="mt-8">
      <h2 class="text-3xl font-bold inline-block relative pb-1">
        User Orders
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
                  foreach ($orders as $order) : ?>
                    <tr>
                      <?php foreach ($ordersColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap hover:text-primary duration-300'><a href="/gamedot/admin/orders/<?= $order['id'] ?>"><?= $order[$dbcolumn]  ?></a></td>
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
    <!-- End of orders Table-->
  </div>

</main>
<?php require(getFooterPath()) ?>