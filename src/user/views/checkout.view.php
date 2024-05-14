<?php require(getHeaderPath()) ?>
<!-- Add to cart Errors-->
<?php if (isset($_SESSION['checkOutErrors'])) : ?>
  <?php foreach ($_SESSION['checkOutErrors'] as $error) : ?>
    <div class="bg-red-500  text-white px-4 py-3 mb-4 rounded relative" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline"><?= $error ?></span>
    </div>
  <?php endforeach; ?>
  <?php unset($_SESSION['checkOutErrors']); ?>
<?php endif; ?>

<main>
  <div class="mx-auto xl:container bg-myBlack p-8 min-h-[80vh]">
    <div class="max-w-7xl mx-auto">
      <div class="my-8">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Checkout
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>
      </div>
      <form action="" method="POST">
        <div class="grid lg:grid-cols-3 gap-8 mt-12">
          <div class="lg:col-span-2">
            <div class="max-w-lg">
              <div class="space-y-4">
                <div>
                  <label for="name" class="text-x1 text-gray-300 ">Name on card</label>
                  <input type="text" id="name" name="name" placeholder="J. Smith" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
                </div>
                <div>
                  <label for="card_number" class="text-x1 text-gray-300">Card Number</label>
                  <input type="text" id="card_number" name="card_number" placeholder="1234 1234 1234 1234" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
                </div>


                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label for="expiry_date" class="text-x1 text-gray-300">Expiry Date</label>
                    <input type="month" id="expiry_date" name="expiry_date" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
                  </div>
                  <div>
                    <label for="cvv" class="text-x1 text-gray-300">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:border-l lg:border-secondaryBlack lg:pl-8">
            <!-- Start of Order Summary -->
            <div class=" col-span-12 rounded-xl w-full p-2">
              <h2 class=" font-bold text-3xl text-white pb-2 border-b border-secondaryBlack">
                Order Summary</h2>
              <div>
                <div class="flex items-center justify-between py-8">
                  <p class="font-medium text-xl leading-8 text-white">
                    <?php echo $totalQuantity . " " . ($totalQuantity > 1 ? "items" : 'item'); ?>
                  </p>
                  <p class="font-semibold text-xl leading-8 text-primary"><?= $totalPrice ?> SR</p>
                </div>

                <input type="submit" name="purchase_form" value="Purchase" class="w-full block text-center bg-primary rounded-xl py-3 px-6 font-semibold text-lg text-white transition-all duration-300 hover:opacity-85 pointer" />
              </div>
            </div>
            <!-- End of Order Summary -->

          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<script>
  // Get the current date
  var currentDate = new Date();

  // Calculate the next month
  var nextMonth = currentDate.getMonth() + 2;

  // If it's December, set the next year and month to January
  var nextYear = currentDate.getFullYear();
  if (nextMonth === 12) {
    nextMonth = 0; // January
    nextYear++;
  }

  // Set the minimum month in YYYY-MM format
  var minMonth = nextYear + '-' + ('0' + nextMonth).slice(-2);

  // Set the minimum attribute of the input element
  document.getElementById('expiry_date').setAttribute('min', minMonth);
</script>
<?php require(getFooterPath()) ?>