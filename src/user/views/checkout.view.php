<?php require(getHeaderPath()) ?>
<main>
  <div class="mx-auto xl:container bg-myBlack p-8 min-h-[80vh]">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-extrabold text-[#fff] text-center">Checkout</h2>
      <div class="grid lg:grid-cols-3 gap-8 mt-12">
        <div class="lg:col-span-2">

          <form class="max-w-lg">
            <div class="grid gap-6">
              <p class="text-x1 font-bold  text-gray-300">Name on card</p>
              <input type="text" placeholder="J. Smith" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />

              <p class="text-x1 font-bold text-gray-300">Card number</p>
              <div class="flex border-gray-800 border rounded-md focus-within:border-purple-500 overflow-hidden">

                <input type="text" placeholder="1234 5678 9012 3456" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm outline-none" />
              </div>

              <div class="grid grid-cols-2 gap-6">
                <p class="text-x1 font-bold text-gray-300">Expiry date</p>
                <p class="text-x1 font-bold text-gray-300">Security code (CVV)</p>
              </div>
              <div class="grid grid-cols-2 gap-6">
                <input type="date" placeholder="MM/YY" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
                <input type="text" placeholder="3 Digits" class="px-4 py-3.5 bg-secondaryBlack border-gray-800 text-white w-full text-sm border rounded-md focus:border-purple-500 outline-none" />
              </div>
            </div>

          </form>
        </div>
        <div class="lg:border-l lg:pl-8">
          <h3 class="text-xl font-bold text-gray-300">Summary</h3>
          <ul class="text-gray-300 mt-6 space-y-4">
            <li class="flex flex-wrap gap-4 text-sm">Discount (20%) <span class="ml-auto font-bold">SR4.00</span></li>
            <li class="flex flex-wrap gap-4 text-sm">Tax <span class="ml-auto font-bold">SR4.00</span></li>
            <li class="flex flex-wrap gap-4 text-base font-bold border-t pt-4">Total <span class="ml-auto">SR52.00</span></li>
            <br><br><br><br><br>
          </ul>
          <button type="button" class="px-6 py-3.5 w-full text-sm bg-primary text-white rounded-md hover:opacity-85 duration-300">Purchase</button>
        </div>
      </div>
    </div>
  </div>
</main>
<?php require(getFooterPath()) ?>