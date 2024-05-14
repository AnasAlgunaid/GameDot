<?php require(getHeaderPath()) ?>
<!-- Add to cart Errors-->
<?php if (isset($_SESSION['cartErrors'])) : ?>
  <?php foreach ($_SESSION['cartErrors'] as $error) : ?>
    <div class="bg-red-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline"><?= $error ?></span>
    </div>
  <?php endforeach; ?>
  <?php unset($_SESSION['cartErrors']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['cartUpdateSuccess'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['cartUpdateSuccess'] ?></span>
  </div>
  <?php unset($_SESSION['cartUpdateSuccess']); ?>
<?php endif; ?>

<main class="min-h-screen">
  <div class="xl:container mx-auto px-8 min-h-[80vh]">

    <div class="my-8">
      <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
        Shopping Cart
        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
      </h2>
    </div>

    <!-- Check if cart is empty -->
    <?php if (empty($cartItems)) : ?>
      <div class="text-center mt-4">
        <h2 class="text-2xl mb-4 text-gray-400">Your cart is empty</h2>
      </div>
    <?php else : ?>
      <section>
        <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto relative z-10">
          <div class="grid grid-cols-12">
            <div class="col-span-12  lg:pr-8 py-4 w-full max-xl:max-w-3xl max-xl:mx-auto">



              <?php foreach ($cartItems as $cartItem) : ?>
                <!-- Start of Product -->
                <div class="flex flex-col min-[500px]:flex-row min-[500px]:items-center gap-5 py-6  border-b border-secondaryBlack ">
                  <a href="<?= $baseUrl . '/games/' . $cartItem['game_id'] ?>" class="w-full md:max-w-[126px]">
                    <img src="<?= $cartItem['main_image_url'] ?>" alt="Game Image" class="mx-auto rounded-md">
                  </a>
                  <div class="grid grid-cols-1 md:grid-cols-4 w-full">
                    <div class="md:col-span-2">
                      <a href="<?= $baseUrl . '/games/' . $cartItem['game_id'] ?>" class="flex flex-col max-[500px]:items-center gap-1 md:gap-2">
                        <h6 class="font-semibold text-xl leading-7 text-white"><?= $cartItem['name'] ?></h6>
                        <h6 class="font-normal text-base leading-7 text-gray-500"><?= $cartItem['platform'] ?></h6>
                        <h6 class="font-medium text-base leading-7 text-primary transition-all"><?= $cartItem['price'] ?> SR</h6>
                      </a>
                    </div>
                    <div class="flex items-center max-[500px]:justify-center h-full max-md:mt-3">
                      <div class="flex items-center h-full">
                        <!-- Input Number -->
                        <form action="" method="POST" class="quantity-form">
                          <div class="py-2 px-3 inline-block bg-myBlack border border-secondaryBlack rounded-xl" data-hs-input-number='{"max": 5}'>
                            <input type="hidden" name="cart_item_id" value="<?= $cartItem['id'] ?>">
                            <div class="flex items-center gap-x-1.5">
                              <button type="button" class="decrement-button size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md bg-secondaryBlack text-white hover:bg-primary duration-300" data-hs-input-number-decrement="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                </svg>
                              </button>
                              <input class="quantity-input p-0 w-6 bg-transparent border-0 text-white text-center focus:ring-0 text-lg sm:text-xl" type="text" name="quantity" value="<?= $cartItem['quantity'] ?>" data-hs-input-number-input="">
                              <button type="button" class="increment-button size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md bg-secondaryBlack text-white hover:bg-primary duration-300" data-hs-input-number-increment="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                  <path d="M12 5v14"></path>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </form>


                      </div>
                    </div>
                    <div class="flex items-center max-[500px]:justify-center md:justify-end max-md:mt-3 h-full">
                      <p class="font-bold text-lg leading-8 text-primary text-center transition-all duration-300 "><?= $cartItem['subtotal'] ?> SR</p>
                    </div>
                  </div>
                </div>
                <!-- End of Product -->
              <?php endforeach; ?>

            </div>
            <!-- Start of Order Summary -->
            <div class=" col-span-12  bg-secondaryBlack rounded-3xl w-full p-8">
              <h2 class=" font-bold text-3xl text-white pb-2 border-b border-secondaryBlack">
                Order Summary</h2>
              <div>
                <form>
                  <div class="flex items-center justify-between py-8">
                    <p class="font-medium text-xl leading-8 text-white">
                      <?php echo $totalQuantity . " " . ($totalQuantity > 1 ? "items" : 'item'); ?>
                    </p>
                    <p class="font-semibold text-xl leading-8 text-primary"><?= $totalPrice ?> SR</p>
                  </div>

                  <a href="/gamedot/checkout" class="w-full block text-center bg-primary rounded-xl py-3 px-6 font-semibold text-lg text-white transition-all duration-500 hover:bg-primary">Checkout</a>
                </form>
              </div>
            </div>
            <!-- End of Order Summary -->
          </div>
        </div>
      </section>
    <?php endif; ?>
  </div>

</main>
<script src="<?= $MAINURI ?>/public/assets/js/input-number/index.js"> </script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const quantityForms = document.querySelectorAll('.quantity-form');

    quantityForms.forEach(form => {
      const decrementButton = form.querySelector('.decrement-button');
      const incrementButton = form.querySelector('.increment-button');
      const quantityInput = form.querySelector('.quantity-input');

      decrementButton.addEventListener('click', () => {
        let newValue = parseInt(quantityInput.value) - 1;
        newValue = Math.max(0, newValue); // Ensure quantity doesn't go below 0
        quantityInput.value = newValue;
        form.submit(); // Submit the form to update quantity
      });

      incrementButton.addEventListener('click', () => {
        let newValue = parseInt(quantityInput.value) + 1;
        newValue = Math.min(5, newValue); // Ensure quantity doesn't go below 0
        quantityInput.value = newValue;
        form.submit(); // Submit the form to update quantity
      });
    });
  });
</script>
<?php require(getFooterPath()) ?>