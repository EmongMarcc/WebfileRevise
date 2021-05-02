<div class=" relative pt-6 px-4 sm:px-6 lg:px-8 mj-theme-text">
  <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
      <div class="flex items-center justify-between w-full md:w-auto">
        <a href="#">
          <span class="sr-only">Logo</span>
            <svg class="h-8 w-auto sm:h-10 mj-indigo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd" />
            </svg>
        </a>
        <div class="-mr-2 flex items-center md:hidden">
          <div x-data="{toggleNavMj:false}">
          <button  type="button" @click="toggleNavMj = true" class="bg-white mj-theme-text dark:bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Open main menu</span>
            <!-- Heroicon name: menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
          <div class="absolute container grid left-0 max-w-full mt-2 text-center" x-show="toggleNavMj"  @click.away="toggleNavMj=false" x-transition:enter-start="transition ease-in duration-3000">
            <a href="../#blogC" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Blogs</a>

            <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Shop</a>

            <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">About me</a>

            <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Archives</a>
            <a href="#" class="font-medium mj-indigo hover:text-gray-500">Search</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
      <a href="../#blogC" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Blogs</a>

      <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Shop</a>

      <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">About me</a>

      <a href="#" class="font-medium text-gray-900 dark:text-white hover:text-gray-500 dark:hover:text-gray-500">Archives</a>

      <a href="#" class="font-medium mj-indigo hover:text-gray-500">Search</a>
    </div>
  </nav>
</div>
