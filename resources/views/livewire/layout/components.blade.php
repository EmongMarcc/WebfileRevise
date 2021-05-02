<livewire:navigationcc />
  <div class="pt-24 dark:bg-mjtheme-dark bg-mjtheme-white overflow-x-hidden transition-colors ease-in duration-150 min-h-screen">
    <div class="px-6 py-8">
      @livewire('layout.breadcrumbs', ['pages' => 'components'])
    </div>
    <div class="bg-gray-100 px-14 py-14 w-screen">
      <h1 class="font-bold text-4xl text-gray-600 tracking-widest">Buttons</h1>
          <div class="my-10">
            <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black waves-effect">Dark</button>
            <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-black rounded-full shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black waves-effect">
            button theme
          </button>
          <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100 focus:outline-none waves-effect">
            button theme
          </button>
          <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-transparent border-2 border-black rounded-full ripple hover:bg-gray-100 focus:outline-none waves-effect">
            button theme
          </button>
          <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-blue-700 underline uppercase transition bg-transparent rounded ripple hover:text-blue-900 focus:outline-none waves-effect">
            button theme
          </button>
          <button class="inline-block p-3 text-center text-white transition bg-green-500 hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-800 rounded-full shadow ripple hover:shadow-lg focus:outline-none waves-effect">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,17.46l0,3.04C3,20.78,3.22,21,3.5,21h3.04c0.13,0,0.26-0.05,0.35-0.15L17.81,9.94l-3.75-3.75L3.15,17.1 C3.05,17.2,3,17.32,3,17.46z"/></g><g><path d="M20.71,5.63l-2.34-2.34c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83C21.1,6.65,21.1,6.02,20.71,5.63z"/></g></g></g></svg>
          </button>
          <button class="inline-block p-3 text-center text-white transition bg-yellow-500 hover:bg-yellow-600 dark:bg-yellow-700 dark:hover:bg-yellow-800 rounded-full shadow ripple hover:shadow-lg focus:outline-none waves-effect">
            <svg  class="w-5 h-5"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M11.53,5l7.53,13.01H4L11.53,5 M2.27,17.01c-0.77,1.33,0.19,3,1.73,3h15.06c1.54,0,2.5-1.67,1.73-3 L13.26,4c-0.77-1.33-2.69-1.33-3.46,0L2.27,17.01z"/><path d="M10.53,10.01V13c0,0.55,0.45,1,1,1l0,0c0.55,0,1-0.45,1-1v-2.99c0-0.55-0.45-1-1-1l0,0 C10.98,9.01,10.53,9.46,10.53,10.01z"/><circle cx="11.53" cy="16.01" r="1"/></g></g></g></svg>
          </button>
          <button class="inline-block p-3 text-center text-white transition bg-red-500 dark:bg-red-700 dark:hover:bg-red-800 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none waves-effect">
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <button class="inline-block px-4 py-2 text-center text-white transition bg-black rounded shadow ripple waves-light hover:shadow-lg hover:bg-black focus:outline-none waves-effect">
            <svg class="w-5 h-5 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
            </svg>
          </button>
        </div>
        <h1 class="font-bold text-4xl text-gray-600 tracking-widest">Toggles</h1>
        <div class="my-10">
          <div x-data="{open: false}" class="relative z-10">
              <button @click="open = true" class="w-12 h-12 rounded-full flex items-center justify-center overflow-hidden relative cursor-pointer hover:shadow-md focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                  <img src="https://scontent.ffjr1-5.fna.fbcdn.net/v/t1.0-9/145919143_3602240749825389_6725753600018418003_o.jpg?_nc_cat=100&ccb=3&_nc_sid=09cbfe&_nc_ohc=se3A1AqMrAwAX8hR4Df&_nc_ht=scontent.ffjr1-5.fna&oh=d531342977c4f9075991b7d8940894e6&oe=604EB24B" alt="Your Profile Image">
              </button>

              <div x-cloak x-show.transition="open" @click.away="open = false" @keydown.escape.window="open = false" class="absolute z-10 mt-2 bg-white shadow-lg rounded-sm overflow-hidden">
                  <nav>
                      <ul class="text-sm text-gray-600 py-2">
                          <li class="flex">
                              <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="#" target="_blank" title="Link 1">Link 1</a>
                          </li>
                          <li class="flex">
                              <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="#" target="_blank" title="Link 2">Link 2</a>
                          </li>
                          <li class="flex">
                              <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="#" target="_blank" title="Link 3">Link 3</a>
                          </li>
                          <li class="flex">
                              <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="#" target="_blank" title="Link 4">Link 4</a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
        </div>
        <h1 class="font-bold text-4xl text-gray-600 tracking-widest">Popover</h1>
            <div class="my-10">


              <!-- CSS for the arrow pseudoelement, not possible natively with Tailwind. Probably move this to your stylesheets. If you can find a Tailwind solution, please let me know! -->
              <style>

              #popover:before{
                content: "";
                position: absolute;
                bottom: 100%;
                left: 5%;
                margin-left: -10px;
                border-width: 7px;
                border-style: solid;
                border-color: transparent transparent lightgray transparent;
              }
              </style>
              <div x-data="{open: false}" class="relative">
                  <!-- Trigger element -->
                  <button
                  @mouseover="open = true" @mouseleave="open = false"
                  class="bg-gray-400 text-gray-600 text-sm px-4 py-2 rounded hover:bg-gray-500 hover:text-gray-800 transition duration-150 shadow-sm">
                  Hover to reveal all
                </button>

                <!-- Popover -->
                <!-- Make sure to add the requisite CSS for x-cloak: https://github.com/alpinejs/alpine#x-cloak -->

                <div
                x-cloak
                x-show.transition="open"
                id="popover"
                class="p-3 space-y-1 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 absolute z-20">
                <strong class="text-sm text-gray-800 font-semibold">What is this about?</strong>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa laborum incidunt debitis necessitatibus veritatis.</p>
              </div>

            </div>
          </div>

          <div class="my-10">
            <div class="container-fluid text-center max-w-full py-10 grid 2xl:grid-cols-6 grid-cols-4 bg-white text-gray-900 dark:bg-gray-900 dark:text-white px-5">
              <div class="2xl:col-span-4 2xl:grid-cols-6 2xl:min-h-0 col-span-4 gap-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 lg:min-h-0 m-5 md:col-span-2 md:min-h-0 min-h-screen sm:col-span-2 sm:min-h-screen xl:col-span-3 xl:grid-cols-6 xl:min-h-0">
                <h1 class="col-span-full font-medium text-center">Gallery</h1>

                <div class="col-span-full rounded-lg h-full w-full relative cursor-pointer mb-5" style="min-height:33vh;background:var(--indigo)">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition">
                    <div id="biggerImg" class="w-full h-full loaded rounded-lg bg-scroll bg-contain bg-no-repeat bg-center hover:rounded-lg" style="background-image: url(https://d2g8igdw686xgo.cloudfront.net/22424090_1500601786.1827.jpg);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full">Title</p>

                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://d2g8igdw686xgo.cloudfront.net/22424090_1500601786.1827.jpg')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://d2g8igdw686xgo.cloudfront.net/22424090_1500601786.1827.jpg);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1585842378081-5cabd7b37679?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1585842378081-5cabd7b37679?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1464998857633-50e59fbf2fe6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1464998857633-50e59fbf2fe6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1591698646786-db3025030b87?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1591698646786-db3025030b87?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1586675985918-b3d1458e8ff0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1586675985918-b3d1458e8ff0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1607190883925-692e07291769?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1607190883925-692e07291769?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1584714268709-c3dd9c92b378?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1584714268709-c3dd9c92b378?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1604606370896-41bfdc2626d7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzV8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1604606370896-41bfdc2626d7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzV8fGh1bWFuJTIwaW4lMjBuZWVkc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1570633306441-2a2d8535962f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cHN5Y2hvcGF0aHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1570633306441-2a2d8535962f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cHN5Y2hvcGF0aHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>
                <div class="h-24 min-h-full w-full relative cursor-pointer mb-5" onclick="myFunctionCard('https://images.unsplash.com/photo-1477439913201-bd7ec30f7745?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                  <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
                  <div class="absolute duration-300 inset-0 transform transition hover:scale-110 hover-z-index">
                    <div class="h-full w-full rounded-lg shadow-2xl bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(https://images.unsplash.com/photo-1477439913201-bd7ec30f7745?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8aHVtYW4lMjBpbiUyMG5lZWRzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                      <p class="duration-150 ease-in-out font-sans h-full transition w-full hover-overlay hover:rounded-lg px-8 py-6 opacity-0">Title</p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="2xl:col-span-2 xl:col-span-1 md:col-span-2 sm:col-span-2 col-span-4">

                <h1 class=" font-medium w-full mx-auto py-4">Smooth Accordion</h1>
                <div class="w-full bg-white w-full mx-auto border border-gray-200 text-gray-900" x-data="{selected:null}">
                  <ul class="shadow-box">

                    <li class="relative border-b border-gray-200">

                      <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="flex items-center justify-between">
                          <span>
                            Should I use reCAPTCHA v2 or v3?					</span>
                            <span class="ico-plus"></span>
                          </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                              <div class="p-6">
                                <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                                <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their traffic, and for use cases in which it is not appropriate to show a challenge to the user.</p>
                                <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction challenge, whereas more common actions like sign-in, searches, comments, or voting might use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                              </div>
                            </div>

                          </li>


                          <li class="relative border-b border-gray-200">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                              <div class="flex items-center justify-between">
                                <span>
                                  I'd like to run automated tests with reCAPTCHA. What should I do?					</span>
                                  <span class="ico-plus"></span>
                                </div>
                              </button>

                              <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                  <p>For reCAPTCHA v3, create a separate key for testing environments. Scores may not be accurate as reCAPTCHA v3 relies on seeing real traffic.</p>
                                  <p>For reCAPTCHA v2, use the following test keys. You will always get No CAPTCHA and all verification requests will pass.</p>
                                </div>
                              </div>

                            </li>


                            <li class="relative border-b border-gray-200">

                              <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                <div class="flex items-center justify-between">
                                  <span>
                                    Can I run reCAPTCHA v2 and v3 on the same page?					</span>
                                    <span class="ico-plus"></span>
                                  </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                  <div class="p-6">
                                    <p>To do this, load the v3 site key as documented, and then explicitly render v2 using grecaptcha.render.</p>
                                    <p>You are allowed to hide the badge as long as you include the reCAPTCHA branding visibly in the user flow. Please include the following text:</p>
                                    <p>Yes, please use "www.recaptcha.net" in your code in circumstances when "www.google.com" is not accessible.</p>
                                    <ul>
                                      <li>First, replace &lt;script src="https://www.google.com/recaptcha/api.js" async defer&gt;&lt;/script&gt; with &lt;script src="https://www.recaptcha.net/recaptcha/api.js" async defer&gt;&lt;/script&gt;</li>
                                      <li>After that, apply the same to everywhere else that uses "www.google.com/recaptcha/" on your site.</li>
                                    </ul>
                                    <p>After that, apply the same to everywhere else that uses "www.google.com/recaptcha/" on your site.</p>
                                  </div>
                                </div>

                              </li>

                            </ul>
                          </div>
                        </div>
              </div>
              <script defer>
              function myFunctionCard(mySrca){
                const mySrc = mySrca;
                document.getElementById("biggerImg").style.backgroundImage = "url('"+mySrc+"')";
                document.getElementById("biggerImg").classList.toggle("loaded");
                document.getElementById("biggerImg").classList.toggle("preload");
              }
              </script>

          </div>
    </div>
  </div>
@livewire('layout.leftslider')
<livewire:theme />
<livewire:footer />
