<?php require(getHeaderPath()) ?>
<main class="min-h-[80vh] p-8">
  <div class="max-w-96 mx-auto px-4 sm:px-8 py-12  border-2 border-secondaryBlack rounded-xl ">
    <h2 class="text-4xl font-bold mb-8 inline-block relative pb-1 ">
      Sign Up
      <span class="absolute -bottom-1 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" method="POST">
      <!-- Errors -->
      <?php if (isset($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
          <div class="bg-red-500  text-white px-4 py-3 mb-2 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"><?= $error ?></span>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <div class="mb-4">
        <label for="fname" class="block text-sm  text-gray-300">First Name</label>
        <input type="text" name="fname" id="fname" value="<?= $firstName ?? "" ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Anas">
      </div>
      <div class="mb-4">
        <label for="lname" class="block text-sm  text-gray-300">Last Name</label>
        <input type="text" name="lname" id="lname" value="<?= $lastName ?? "" ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="Algunaid">
      </div>

      <div class="mb-4">
        <label for="dob" class="block text-sm  text-gray-300">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?= $dob ?? "" ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm  text-gray-300">Email</label>
        <input type="email" name="email" id="email" value="<?= $email ?? "" ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="example@example.com">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm  text-gray-300">Password</label>
        <input type="password" name="password" id="password" value="<?= $password ?? "" ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="••••••••">
      </div>
      <div class="mb-4">
        <label for="confirm_password" class="block text-sm  text-gray-300">Confirm Password</label>
        <input type="password" name="confirm_password" value="<?= $confirmPassword ?? "" ?>" id="confirm_password" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="••••••••">
      </div>
      <input type="submit" name="signup_form" class="bg-primary text-white px-4 py-2 rounded-md hover:opacity-85 duration-300" value="Sign Up">
    </form>
    <p class="mt-4">
      Have an account? <a href="./signin" class="text-primary">Sign In</a>
    </p>

  </div>
</main>
<?php require(getFooterPath()) ?>