<footer class="text-center text-gray-300 py-4 ">
  <a href="./contactus.php" class="my-2 text-primary font-bold">
    Contact us
  </a>
  <p>
    &copy; <?php echo date("Y") ?> Gamedot. All rights reserved.
  </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

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
  window.addEventListener('load', function() {
    new Glider(document.querySelector('.glider'), {
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
      },
      responsive: [{
        // screens greater than >= 540px
        breakpoint: 540,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      }, {
        // screens greater than >= 768px
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,

        }
      }, {
        // screens greater than >= 1024px
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,

        }
      }, ]

    });
  })
</script>


</body>

</html>