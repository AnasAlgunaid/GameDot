<footer class="text-center text-gray-300 py-4 ">
  <a href="./contactus.php" class="my-2 text-primary font-bold">
    Contact us
  </a>
  <p>
    &copy; <?php echo date("Y") ?> Gamedot. All rights reserved.
  </p>
</footer>


<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


  });
</script>


</body>

</html>