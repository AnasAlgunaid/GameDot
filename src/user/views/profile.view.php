<?php require(getHeaderPath()) ?>

<main class="min-h-screen">
  <!-- User Page -->
  <div class="xl:container mx-auto p-8">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Profile
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div>
      <!-- Errors -->
      <?php if (isset($profileErrors)) : ?>
        <?php foreach ($profileErrors as $error) : ?>
          <div class="bg-red-500  text-white px-4 py-3 my-4 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"><?= $error ?></span>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="fname" class="block text-sm text-gray-300">First Name</label>
          <input type="text" name="fname" id="fname" value="<?= $user['fname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter first name">
        </div>
        <div>
          <label for="lname" class="block text-sm text-gray-300">Last Name</label>
          <input type="text" name="lname" id="lname" value="<?= $user['lname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter last name">
        </div>
        <div>
          <label for="email" class="block text-sm text-gray-300">Email</label>
          <input type="email" name="email" id="email" value="<?= $user['email'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter email">
        </div>
        <div>
          <label for="dob" class="block text-sm text-gray-300">Date of Birth</label>
          <input type="date" name="dob" id="dob" value="<?= $user['dob'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
        </div>

        <!-- Submit -->
        <div>
          <button type="submit" name="update_profile_form" class="bg-primary w-full sm:w-1/2 py-2 px-4  rounded-md  text-white hover:opacity-85 duration-300 ">
            Update
          </button>
        </div>
      </form>

    </div>

    <h2 class="text-3xl font-bold mb-4 mt-12 inline-block relative pb-1">
      Update Password
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div>

      <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Old password -->
        <div class="md:col-span-2">
          <label for="old_password" class="block text-sm text-gray-300">Old Password</label>
          <input type="password" name="old_password" id="old_password" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="Enter old password">
        </div>
        <!-- New password -->
        <div>
          <label for="new_password" class="block text-sm text-gray-300">New Password</label>
          <input type="password" name="new_password" id="new_password" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="Enter new password">
        </div>

        <!-- Confirm New Password -->
        <div>
          <label for="confirm_password" class="block text-sm text-gray-300">Confirm New Password</label>
          <input type="password" name="confirm_password" id="confirm_password" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="Confirm new password">
        </div>

        <!-- Submit -->
        <div>
          <button type="submit" class="bg-primary w-full sm:w-1/2 py-2 px-4  rounded-md  text-white hover:opacity-85 duration-300 ">
            Update
          </button>
        </div>
      </form>
    </div>

    <!-- Start of orders Table -->
    <section class="mt-12">
      <h2 class="text-3xl font-bold inline-block relative pb-1">
        Your Orders
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
      <!-- Check if user has orders -->
      <?php if (empty($orders)) : ?>
        <div class="text-center mt-8">
          <h2 class="text-2xl mb-4 text-gray-400">You don't have any orders yet.</h2>
        </div>
      <?php else : ?>
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
      <?php endif; ?>
    </section>
    <!-- End of orders Table-->
  </div>

</main>
<?php require(getFooterPath()) ?>