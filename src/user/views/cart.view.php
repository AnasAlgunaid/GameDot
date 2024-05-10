<?php require(getHeaderPath()) ?>
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
                  <div class="w-full md:max-w-[126px]">
                    <img src="<?= $cartItem['main_image_url'] ?>" alt="The Last of US" class="mx-auto rounded-md">
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-4 w-full">
                    <div class="md:col-span-2">
                      <div class="flex flex-col max-[500px]:items-center gap-1 md:gap-2">
                        <h6 class="font-semibold text-xl leading-7 text-white"><?= $cartItem['name'] ?></h6>
                        <h6 class="font-normal text-base leading-7 text-gray-500"><?= $cartItem['platform'] ?></h6>
                        <h6 class="font-medium text-base leading-7 text-primary transition-all"><?= $cartItem['price'] ?> SR</h6>
                      </div>
                    </div>
                    <div class="flex items-center max-[500px]:justify-center h-full max-md:mt-3">
                      <div class="flex items-center h-full">
                        <button class=" rounded-l-xl px-5 py-[18px] border border-gray-700 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-primary hover:border-primary ">
                          <svg class="stroke-white transition-all duration-500 " xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                          </svg>
                        </button>
                        <input type="text" class="border-y border-gray-700 outline-none text-white font-semibold text-lg w-full max-w-[73px] min-w-[60px] placeholder:text-gray-600 py-[15px]  text-center bg-transparent" value='<?= $cartItem["quantity"] ?>'>
                        <button class=" rounded-r-xl px-5 py-[18px] border border-gray-700 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-primary hover:border-primary">
                          <svg class="stroke-white transition-all duration-500 " xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                          </svg>
                        </button>
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
              <h2 class=" font-bold text-3xl leading-10 text-white pb-8 border-b border-secondaryBlack">
                Order Summary</h2>
              <div>
                <form>
                  <div class="flex items-center justify-between py-8">
                    <p class="font-medium text-xl leading-8 text-white">
                      <?php echo $totalQuantity . " " . ($totalQuantity > 1 ? "items" : 'item'); ?>
                    </p>
                    <p class="font-semibold text-xl leading-8 text-primary"><?= $totalPrice ?> SR</p>
                  </div>

                  <a href="./checkout" class="w-full block text-center bg-primary rounded-xl py-3 px-6 font-semibold text-lg text-white transition-all duration-500 hover:bg-primary">Checkout</a>
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
<?php require(getFooterPath()) ?>