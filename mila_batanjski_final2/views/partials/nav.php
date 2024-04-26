<nav class="bg-[#e8e0da]">
	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-16 items-center justify-between">
			<div class="flex items-center">
			<h1 class="text-lg font-bold tracking-tight text-[#3f4238] pr-4">InfiniRead</h1>
				<div class="flex-shrink-0">
					<img class="h-8 w-8"
					     src="./assets/icons8-book-50.png"
					     alt="Your Company">
				</div>
				<div class="hidden md:block">
					<div class="ml-10 flex items-baseline space-x-4">
						<a href="/"
						   class="<?= routeIs('/') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> rounded-md px-3 py-2 text-sm font-medium">Home</a>
						<a href="/userposts"
						   class="<?= routeIs('/userposts') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> hover:bg-[#c9b9ad] hover:text-white rounded-md px-3 py-2 text-sm font-medium">Community Posts</a>
						<a href="/books"
						   class="<?= routeIs('/books') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> hover:bg-[#c9b9ad] hover:text-white rounded-md px-3 py-2 text-sm font-medium">Books</a>
					</div>
				</div>
			</div>
			<div class="hidden md:block">
				<div class="ml-4 flex gap-4 items-center md:ml-6">

                    <?php if(! isset($_SESSION['user'])) :?>
                        <a href="/login" class="text-[#6b705c] text-sm font-medium hover:underline">Login</a>

                        <a href="/register" class="text-[#6b705c] text-sm font-medium hover:underline">Register</a>
                    <?php else: ?>

                        <span class="text-[#6b705c]">Welcome back, <?= $_SESSION['user']['name'] ?></span>

                        <a href="/logout" class="text-[#6b705c] text-sm font-medium hover:underline">Logout</a>
                    <?php endif; ?>
				</div>
			</div>
			<div class="-mr-2 flex md:hidden">
			<a href="/"
						   class="<?= routeIs('/') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> rounded-md mx-1 px-2 py-1 text-sm font-medium">Home</a>
						<a href="/userposts"
						   class="<?= routeIs('/userposts') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> hover:bg-[#c9b9ad] hover:text-white rounded-md px-2 py-1 text-sm font-medium">Community Posts</a>
						<a href="/books"
						   class="<?= routeIs('/books') ? 'bg-[#d6c6ba] text-[#6b705c]' : 'text-[#3f4238]' ?> hover:bg-[#c9b9ad] hover:text-white rounded-md mx-1 px-2 py-1 text-sm font-medium">Books</a>
			</div>
		</div>
	</div>
</nav>