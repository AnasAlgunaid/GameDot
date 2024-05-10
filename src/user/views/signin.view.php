<?php require(getHeaderPath()) ?>
<!-- Toast Signup success-->
<?php if (isset($_GET['signup']) && $_GET['signup'] === 'success') : ?>
  <div class="bg-green-500  text-white px-4 py-3 mb-2 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">You have signed up successfully</span>
  </div>
<?php endif; ?>

<main class="min-h-[80vh] p-8">
  <div class="max-w-96 mx-auto px-4 sm:px-8 py-12  border-2 border-secondaryBlack rounded-xl ">
    <h2 class="text-4xl font-bold mb-8 inline-block relative pb-1 ">
      Sign In
      <span class="absolute -bottom-1 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <form action="" method="post">
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
        <label for="email" class="block text-sm  text-gray-300">Email</label>
        <input type="email" name="email" id="email" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="example@example.com">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm  text-gray-300">Password</label>
        <input type="password" name="password" id="password" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="••••••••">
      </div>
      <input type="submit" value="Sign In" name="signin_form" class="bg-primary text-white px-4 py-2 rounded-md hover:opacity-85 duration-300">
    </form>
    <p class="mt-4">
      Don't have an account? <a href="./signup" class="text-primary">Sign Up</a>
    </p>
    <p class="mt-4">
      <a href="./forgot-password" class="text-primary">Forgot Password?</a>
    </p>
    <p class="mt-4">
      <a href="./admin/signin" class="text-primary">Admin Portal</a>
    </p>
  </div>
</main>
<?php require(getFooterPath()) ?>