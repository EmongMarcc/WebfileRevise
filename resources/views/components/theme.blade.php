<div class="fixed bottom-1 right-1 flex flex-col z-50">
  <div x-data="{toggleColor:false}">
  <button class="inline-block px-4 py-2 text-center ease-in-out  transition duration-150 bg-white mj-indigo dark:bg-gray-900 rounded shadow ripple hover:rounded-full focus:outline-none hover:shadow-2xl hover:bg-gray-900 dark:hover:bg-white" @click="toggleColor = true">
    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip- rule="evenodd" />
    </svg>
  </button>
              <div class="bg-gray-200 mt-2 bottom-5 right-0 fixed p-5 grid grid-cols-4" x-show="toggleColor"  @click.away="toggleColor=false"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              >
                <label class="bg-gray-100 col-span-4 dark:bg-gray-900 dark:text-gray-100 inline-block m-2 py-2 rounded text-center text-gray:900">Theme Color:</label>
                <button class="mx-1 inline-block px-4 py-2 text-center ease-in-out  transition duration-150 bg-white text-indigo-500 dark:bg-gray-900 rounded shadow ripple hover:rounded-full focus:outline-none hover:shadow-2xl hover:bg-gray-900 dark:hover:bg-white" onclick="colorTheme('indigo')">
                  <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd1" d="M12.395 2.553a1 1 1 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip- rule="evenodd1" />
                  </svg>
                </button>
                <button class="mx-1 inline-block px-4 py-2 text-center ease-in-out  transition duration-150 bg-white text-red-500 dark:bg-gray-900 rounded shadow ripple hover:rounded-full focus:outline-none hover:shadow-2xl hover:bg-gray-900 dark:hover:bg-white"  onclick="colorTheme('red')">
                  <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd2" d="M12.395 2.553a1 1 2 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip- rule="evenodd2" />
                  </svg>
                </button>
                <button class="mx-1 inline-block px-4 py-2 text-center ease-in-out  transition duration-150 bg-white text-yellow-500 dark:bg-gray-900 rounded shadow ripple hover:rounded-full focus:outline-none hover:shadow-2xl hover:bg-gray-900 dark:hover:bg-white" onclick="colorTheme('yellow')">
                  <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd3" d="M12.395 2.553a1 1 3 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip- rule="evenodd3" />
                  </svg>
                </button>
                <button class="mx-1 inline-block px-4 py-2 text-center ease-in-out  transition duration-150 bg-white text-green-500 dark:bg-gray-900 rounded shadow ripple hover:rounded-full focus:outline-none hover:shadow-2xl hover:bg-gray-900 dark:hover:bg-white"  onclick="colorTheme('green')">
                  <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd4" d="M12.395 2.553a1 1 4 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip- rule="evenodd4" />
                  </svg>
                </button>
                <label class="bg-gray-100 col-span-3 dark:bg-gray-900 dark:text-gray-100 inline-block m-2 py-2 rounded text-center text-gray:900">Dark/Light Mode:</label>
                <button class="bg-white dark:bg-gray-900 duration-150 ease-in-out focus:outline-none hover:rounded-full hover:shadow-2xl inline-block mx-1 my-1 px-4 py-2 ripple rounded shadow text-center text-gray-900 dark:text-gray-100 transition" onclick="toggleDarkMode()">
                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                    </svg>
                </button>
              </div>
            </div>
</div>

<script type="text/javascript">

const html = document.getElementsByTagName('html')[0];
function toggleDarkMode() {
  if(html.classList.contains('dark')) {
    html.classList.remove('dark');
    document.documentElement.style.setProperty('--tw-gradient-to', '#fff');
  } else {
    html.classList.add('dark');
    document.documentElement.style.setProperty('--tw-gradient-to', '#111827');
  }
}
function colorTheme(myColor){
  const myThemeColor = myColor;
    if (myThemeColor == 'indigo') {
      document.documentElement.style.setProperty('--indigo', '#312e81');
      document.getElementById('themeChange').classList.remove('themeChange1');
      document.getElementById('themeChange').classList.remove('themeChange2');
      document.getElementById('themeChange').classList.remove('themeChange3');
      document.getElementById('themeChange').classList.remove('themeChange4');
      document.getElementById('themeChange').className += (' themeChange1');
    }else if (myThemeColor == 'red') {
      document.documentElement.style.setProperty('--indigo', '#EF4444');
      document.getElementById('themeChange').classList.remove('themeChange1');
      document.getElementById('themeChange').classList.remove('themeChange2');
      document.getElementById('themeChange').classList.remove('themeChange3');
      document.getElementById('themeChange').classList.remove('themeChange4');
      document.getElementById('themeChange').className += (' themeChange2');
    }else if (myThemeColor == 'yellow') {
      document.documentElement.style.setProperty('--indigo', '#F59E0B');
      document.getElementById('themeChange').classList.remove('themeChange1');
      document.getElementById('themeChange').classList.remove('themeChange2');
      document.getElementById('themeChange').classList.remove('themeChange3');
      document.getElementById('themeChange').classList.remove('themeChange4');
      document.getElementById('themeChange').className += (' themeChange3');
    }else if (myThemeColor == 'green') {
      document.documentElement.style.setProperty('--indigo', '#10B981');
      document.getElementById('themeChange').classList.remove('themeChange1');
      document.getElementById('themeChange').classList.remove('themeChange2');
      document.getElementById('themeChange').classList.remove('themeChange3');
      document.getElementById('themeChange').classList.remove('themeChange4');
      document.getElementById('themeChange').className += (' themeChange4');
    }
}
</script>
