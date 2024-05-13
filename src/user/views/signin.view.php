<?php require(getHeaderPath()) ?>
<!-- Toast Signup success-->

<!-- Authorization Error Message-->
<?php if (isset($_SESSION['authorizationError'])) : ?>
  <div class="bg-red-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
    <strong class="font-bold">Forbidden!</strong>
    <span class="block sm:inline"><?= $_SESSION['authorizationError'] ?></span>
  </div>
  <?php unset($_SESSION['authorizationError']); ?>
<?php endif; ?>

<!-- Success Profile update-->
<?php if (isset($_SESSION['signupSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['signupSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['signupSuccess']); ?>
<?php endif; ?>

<!-- Success Password update-->
<?php if (isset($_SESSION['passwordSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['passwordSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['passwordSuccess']); ?>
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
        <input type="email" name="email" id="email" value="<?= $email ?? '' ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required placeholder="example@example.com">
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