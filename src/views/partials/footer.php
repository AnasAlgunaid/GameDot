<footer class="text-center text-gray-300 py-4 ">
  <a href="./contactus" class="my-2 text-primary font-bold">
    Contact us
  </a>
  <p>
    &copy; <?php echo date("Y") ?> Gamedot. All rights reserved.
  </p>
</footer>

<script src="<?= $baseUrl ?>/public/assets/js/collapse/index.js"> </script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
  // Get a reference to the file input element
  const inputElement = document.querySelectorAll('input[type="file"]');

  // Create a FilePond instance
  for (let i = 0; i < inputElement.length; i++) {
    FilePond.create(inputElement[i]);
  }
</script>


</body>

</html>