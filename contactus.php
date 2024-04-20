<?php include('./src/templates/header.php'); ?>
<main class="min-h-[80vh]">
  <!-- Contact us -->
  <section class="xl:container mx-auto px-8 my-8">
    <h2 class="text-2xl font-bold mb-4 inline-block relative pb-1">
      Contact us
      <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-primary"></span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center my-8">
      <div>
        <h3 class="text-xl font-bold">Send us a message</h3>
        <form action="" method="POST" class="mt-4">
          <div class="flex flex-col gap-4">
            <input type="text" name="name" placeholder="Name" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            <input type="email" name="email" placeholder="Email" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            <textarea name="message" placeholder="Message" class="bg-secondaryBlack mt-1 block w-full px-3 py-2 border border-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
            <button type="submit" class="bg-primary px-4 py-2 text-white rounded-md hover:opacity-85 duration-300">Send</button>
          </div>
        </form>
      </div>
      <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1263.5564065956569!2d50.19582595995554!3d26.395154245155002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49ef811304efab%3A0xe664343a49ebbf2b!2sCollege%20of%20Computer%20Science%20and%20Information%20Technology!5e0!3m2!1sen!2ssa!4v1713635477188!5m2!1sen!2ssa" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- End of Contact us -->

</main>
<?php include('./src/templates/footer.php'); ?>