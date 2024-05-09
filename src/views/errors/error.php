<?php require(getHeaderPath());  ?>
<main>
  <div class="flex flex-col justify-center items-center min-h-[70vh] gap-8">
    <h1 class="text-5xl font-bold text-primary">Error</h1>
    <p class="text-xl  "><?php echo $ErrorMessage; ?></p>
  </div>


</main>


<?php require(getFooterPath()); ?>