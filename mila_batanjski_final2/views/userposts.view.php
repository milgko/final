<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
	 
<section class="text-gray-600 body-font">
<div class="mx-auto">
  <div class="container px-5 py-24 mx-auto">
    <form id="postForm" class="mx-auto w-[40%]" method="POST">
    <div class="py-8 px-4">
      <div class="h-full flex items-start">
        <div class="flex-shrink-0 flex flex-col text-center leading-none">
          <span id="month" class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200"><?= date('M') ?></span>
          <span id="day" class="font-medium text-lg text-gray-800 title-font leading-none"><?= date('j') ?></span>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-[#6b705c] mb-1">Select Name</h2>
          <select id="nameDropdown" name="nameDropdown" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </select>
          <h3 id="selectedName" class="title-font text-xl font-medium text-gray-900 m-1"></h3>
          <input type="text" id="postTitle" name="postTitle" placeholder="Post Title" class="w-full px-3 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          <textarea id="postContent" name="postContent" rows="4" placeholder="Post Content" class="w-full px-3 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>
      </div>
    </div>
    <div class="text-left w-full px-4">
      <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#6b705c] hover:bg-[#3f4238] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3f4238]">Post</button>
    </div>
    </form>

    <div id="postsContainer" class="container mx-auto py-12">

    </div>
  </div>
</div>

<script src="./js/createpost.js"></script>
<script src="./js/validation.js"></script>

</section>






<?php require('partials/footer.php') ?>