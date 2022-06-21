<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    <!-- Modal -->
    <button class="btn mb-4" id="btn-modal">Add Product</button>
    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
      <button class="modal-close-btn" id="close-btn"><i class='bx bxs-x-circle'></i></button>
      <form
        action="<?php BASEURL; ?>product/tambah"
        method="post"
        class="flex flex-col gap-6"
      >
        <div class="flex flex-col">
          <label for="photo" class="text-xl font-semibold">Choose Photo</label>
          <input
            type="text"
            name="image"
            id="photo"
          >
        </div>
        <div class="flex flex-col">
          <label for="desc" class="text-xl">Description</label>
          <input
            id="desc"
            name="description"
            type="text"
            class="py-2 px-4 border border-gray-300 rounded-md outline-none"
            placeholder="fill out the description"
          >
        </div>
        <div class="flex flex-col">
          <label for="price">Price</label>
          <input
            id="price"
            type="text"
            name="price"
            class="py-2 px-4 border border-gray-300 rounded-md outline-none"
          >
        </div>
        <div>
          <button type="submit" class="bg-orange-400 px-4 py-2 text-white rounded-md hover:bg-orange-600">Tambah data</button>
        </div>
      </form>
    </div>
    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <?php foreach( $data['products'] as $product ) : ?>
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img
              src="<?= $product['image']; ?>"
              alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
              class="w-full h-48 object-center object-cover group-hover:opacity-75"
            >
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><?= $product['description']; ?></h3>
          <p class="mt-1 text-lg font-medium text-gray-900"><?= $product['price']; ?></p>
        </a>
      <?php endforeach; ?>
      </div>
  </div>
</div>
