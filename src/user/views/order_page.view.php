<?php require(getHeaderPath()) ?>
<!-- Success Purchase-->
<?php if (isset($_SESSION['successPurchase'])) : ?>
  <div class="bg-emerald-500  text-white px-4 py-3 my-4 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><?= $_SESSION['successPurchase'] ?></span>
  </div>
  <?php unset($_SESSION['successPurchase']); ?>
<?php endif; ?>

<main>
  <!-- Order Page -->
  <div class="xl:container mx-auto p-8">
    <div class="flex justify-between items-center gap-4 flex-wrap ">
      <div class="flex items-start gap-x-3">
        <h2 class="text-3xl font-bold mb-4 inline-block relative pb-1">
          Order Information
          <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
        </h2>

        <span class="px-3 py-1 text-xs rounded-full bg-secondaryBlack text-primary mt-2"><?= count($orderItems) ?> Items</span>
      </div>
    </div>

    <!-- Order Information -->
    <?php foreach ($orderColumns as $dbcolumn => $column) : ?>
      <div class="mt-8">
        <label for="<?= $dbcolumn ?>" class="block text-sm text-gray-300"><?= $column ?></label>
        <input type="text" name="<?= $dbcolumn ?>" id="<?= $dbcolumn ?>" value="<?= $order[$dbcolumn] ?>" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" required disabled>
      </div>
    <?php endforeach; ?>



    <!-- Start of orders Table -->
    <section>
      <div class="flex flex-col mt-6">
        <div class="overflow-x-auto ">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden border  border-gray-700 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-secondaryBlack">
                  <tr>
                    <?php
                    foreach ($orderItemsColumns as $column) :
                    ?>
                      <th scope='col' class='px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-400'><?= $column ?></th>
                    <?php endforeach; ?>

                  </tr>
                </thead>
                <tbody class=" divide-y divide-gray-700 bg-myBlack">

                  <?php
                  foreach ($orderItems as $order) : ?>
                    <tr>
                      <?php foreach ($orderItemsColumns as $dbcolumn => $column) : ?>
                        <td class='px-4 py-4 text-sm font-medium text-gray-300 whitespace-nowrap'><?= $order[$dbcolumn]  ?></td>
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