<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div id="booksGrid" class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"></div>
      </div>
    </div>
  </div>
</main>

<script src="./js/books.js"></script>




<?php require('partials/footer.php') ?>