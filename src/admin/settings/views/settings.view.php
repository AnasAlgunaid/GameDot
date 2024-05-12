<?php require(getHeaderPath()) ?>
<!-- Profile Success -->
<?php if (isset($_SESSION['profileSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 my-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['profileSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['profileSuccess']); ?>
<?php endif; ?>

<!-- Password Success -->
<?php if (isset($_SESSION['passwordSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 my-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['passwordSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['passwordSuccess']); ?>
<?php endif; ?>

<main class="min-h-screen max-w-3xl mx-auto">
  <!-- admin Page -->
  <div class="xl:container mx-auto p-8">
    <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
      Settings
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div>
      <!-- Profile Errors -->
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
          <input type="text" name="fname" id="fname" value="<?= $admin['fname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter first name">
        </div>
        <div>
          <label for="lname" class="block text-sm text-gray-300">Last Name</label>
          <input type="text" name="lname" id="lname" value="<?= $admin['lname'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter last name">
        </div>
        <div class=" md:col-span-2">
          <label for="email" class="block text-sm text-gray-300">Email</label>
          <input type="email" name="email" id="email" value="<?= $admin['email'] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Enter email">
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
      <!-- Password Errors -->
      <?php if (isset($passwordErrors)) : ?>
        <?php foreach ($passwordErrors as $error) : ?>
          <div class="bg-red-500  text-white px-4 py-3 my-4 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"><?= $error ?></span>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

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
          <input type="submit" name="update_password_form" value="Update" class="bg-primary w-full sm:w-1/2 py-2 px-4  rounded-md  text-white hover:opacity-85 duration-300 ">
        </div>
      </form>
    </div>
  </div>

</main>
<?php require(getFooterPath()) ?>