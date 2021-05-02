<livewire:navigationcc />
<div class="pt-16 dark:bg-dark-bg bg-light-bg transition-colors ease-in duration-150 h-full">
  <div class="px-3 pt-6">
        @livewire('layout.breadcrumbs', ['pages' => 'profile'])
  </div>
  <div class="">
    <div class="">
                      <div class="container mx-auto p-5">
                        <div class="md:grid gap-4 grid-cols-12 no-wrap md:mx-2 ">
            <!-- Left Side -->
              <div class="w-full col-span-12 md:col-span-3">
                  <!-- Profile Card -->
                  <div class="dark:bg-dark-fg bg-light-fg rounded shadow-lg p-3 border-t-4 border-mjtheme-theme">
                      <div class="image overflow-hidden">
                          <img class="h-auto w-full mx-auto rounded shadow-md" src="{{asset('images/profile.png')}}" alt="Profile Pic">
                            </div>
                            <h1 class="dark:text-dark-primary text-light-primary font-medium text-xl leading-8 my-1">Web Developer/ IT</h1>
                            <p class="text-sm dark:text-dark-secondary text-light-secondary leading-6">Solution-driven professional excelling in highly collaborative work environment, finding solutions to challenges and focused on customer satisfaction. Proven experience developing consumer-focused web sites using HTML, CSS, JQuery, PHP and JavaScript. Experience building products for desktop, phone and mobile app users, meeting highest standards for web design, user experience, best practices, usability and speed. Responding to challenges by designing and developing solutions and building web applications aligned to customer's services. Translating solutions into code.</p>
                              <ul
                              class="dark:bg-dark-fg2 bg-light-fg2 dark:text-dark-primary text-light-primary shadow-md hover:shadow-lg py-2 px-3 mt-3 divide-y rounded shadow-sm">
                              <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span
                                      class="bg-mjtheme-theme py-1 px-2 rounded text-white text-sm">Active</span></span>
                                    </li>
                                    <li class="flex items-center py-3">
                                      <span>Occupation</span>
                                      <span class="ml-auto">Web Developer</span>
                                    </li>
                                  </ul>
                                </div>
                                <!-- End of profile card -->
                                <div class="my-4"></div>
                                <!-- Friends card -->
                                <div class="dark:bg-dark-fg bg-light-fg rounded shadow-lg p-3">
                                  <div class="flex items-center space-x-3 font-semibold text-mjtheme-theme text-xl leading-8">
                                    <span>
                                      <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                  </span>
                                  <span>Work Experience History</span>
                                </div>
                                <div class="container-fluid">
                                  <livewire:layout.togglepanel>
                                </div>
                              </div>
                              <!-- End of friends card -->
                            </div>
                            <!-- Right Side -->
                            <div class="w-full col-span-12 md:col-span-9">
                              <!-- Profile tab -->
                              <!-- About Section -->
                              <div class="dark:bg-dark-fg bg-light-fg rounded shadow-lg p-3">
                                <div class="flex items-center space-x-2 font-medium text-mjtheme-theme leading-8">
                                  <span>
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                  </span>
                                  <span class="tracking-wide">About</span>
                                </div>
                                <div>
                                  <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">First Name</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">Marcc Joseph</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Last Name</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">Atayde</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Gender</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">Male</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Contact No.</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">+971 561560236</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Current Address</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">Al Nakhilat bldg. Al Rigga, Dubai</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Permanant Address</div>
                                      <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">177 burgos street San Leonardo Nueva Ecija</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                      <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Email</div>
                                      <div class="px-4 py-2">
                                        <a class="text-mjtheme-theme" href="mailto:jane@example.com">Marccjoseph06@gmail.com</a>
                                      </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-medium dark:text-dark-primary text-light-primary">Birthday</div>
                                        <div class="px-4 py-2 dark:text-dark-secondary text-light-secondary">June 06, 1997</div>
                                      </div>
                                    </div>
                                  </div>
                                  <a href="https://www.buymeacoffee.com/marccatayde" target="_blank" class="justify-center flex hover:-translate-y-1 transform px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-mjtheme-theme rounded-full shadow ripple waves-light hover:shadow-lg focus:outline-none dark:hover:bg-dark-bg hover:bg-dark-fg waves-effect">
                                                        <span><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="white" role="img" viewBox="0 0 24 24"><title>Buy Me A Coffee icon</title><path d="M20.216 6.415l-.132-.666c-.119-.598-.388-1.163-1.001-1.379-.197-.069-.42-.098-.57-.241-.152-.143-.196-.366-.231-.572-.065-.378-.125-.756-.192-1.133-.057-.325-.102-.69-.25-.987-.195-.4-.597-.634-.996-.788a5.723 5.723 0 00-.626-.194c-1-.263-2.05-.36-3.077-.416a25.834 25.834 0 00-3.7.062c-.915.083-1.88.184-2.75.5-.318.116-.646.256-.888.501-.297.302-.393.77-.177 1.146.154.267.415.456.692.58.36.162.737.284 1.123.366 1.075.238 2.189.331 3.287.37 1.218.05 2.437.01 3.65-.118.299-.033.598-.073.896-.119.352-.054.578-.513.474-.834-.124-.383-.457-.531-.834-.473-.466.074-.96.108-1.382.146-1.177.08-2.358.082-3.536.006a22.228 22.228 0 01-1.157-.107c-.086-.01-.18-.025-.258-.036-.243-.036-.484-.08-.724-.13-.111-.027-.111-.185 0-.212h.005c.277-.06.557-.108.838-.147h.002c.131-.009.263-.032.394-.048a25.076 25.076 0 013.426-.12c.674.019 1.347.067 2.017.144l.228.031c.267.04.533.088.798.145.392.085.895.113 1.07.542.055.137.08.288.111.431l.319 1.484a.237.237 0 01-.199.284h-.003c-.037.006-.075.01-.112.015a36.704 36.704 0 01-4.743.295 37.059 37.059 0 01-4.699-.304c-.14-.017-.293-.042-.417-.06-.326-.048-.649-.108-.973-.161-.393-.065-.768-.032-1.123.161-.29.16-.527.404-.675.701-.154.316-.199.66-.267 1-.069.34-.176.707-.135 1.056.087.753.613 1.365 1.37 1.502a39.69 39.69 0 0011.343.376.483.483 0 01.535.53l-.071.697-1.018 9.907c-.041.41-.047.832-.125 1.237-.122.637-.553 1.028-1.182 1.171-.577.131-1.165.2-1.756.205-.656.004-1.31-.025-1.966-.022-.699.004-1.556-.06-2.095-.58-.475-.458-.54-1.174-.605-1.793l-.731-7.013-.322-3.094c-.037-.351-.286-.695-.678-.678-.336.015-.718.3-.678.679l.228 2.185.949 9.112c.147 1.344 1.174 2.068 2.446 2.272.742.12 1.503.144 2.257.156.966.016 1.942.053 2.892-.122 1.408-.258 2.465-1.198 2.616-2.657.34-3.332.683-6.663 1.024-9.995l.215-2.087a.484.484 0 01.39-.426c.402-.078.787-.212 1.074-.518.455-.488.546-1.124.385-1.766zm-1.478.772c-.145.137-.363.201-.578.233-2.416.359-4.866.54-7.308.46-1.748-.06-3.477-.254-5.207-.498-.17-.024-.353-.055-.47-.18-.22-.236-.111-.71-.054-.995.052-.26.152-.609.463-.646.484-.057 1.046.148 1.526.22.577.088 1.156.159 1.737.212 2.48.226 5.002.19 7.472-.14.45-.06.899-.13 1.345-.21.399-.072.84-.206 1.08.206.166.281.188.657.162.974a.544.544 0 01-.169.364zm-6.159 3.9c-.862.37-1.84.788-3.109.788a5.884 5.884 0 01-1.569-.217l.877 9.004c.065.78.717 1.38 1.5 1.38 0 0 1.243.065 1.658.065.447 0 1.786-.065 1.786-.065.783 0 1.434-.6 1.499-1.38l.94-9.95a3.996 3.996 0 00-1.322-.238c-.826 0-1.491.284-2.26.613z"></path></svg></span>
                                                        <span class="text-sm">buy me a coffee!</span></a>
                                </div>
                                <!-- End of about section -->

                                <div class="my-4"></div>

                                <!-- Experience and education -->
                                <div class="dark:bg-dark-fg bg-light-fg rounded shadow-lg p-3">

                                  <div class="grid grid-cols-2">
                                    <div>
                                      <div class="flex items-center space-x-2 font-semibold text-mjtheme-theme leading-8 mb-3">
                                        <span>
                                          <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                              </svg>
                                            </span>
                                            <span class="tracking-wide">Experience</span>
                                          </div>
                                          <ul class="list-inside space-y-2">
                                            <li>
                                              <div class="dark:text-dark-primary text-light-primary">Web Developer/ IT @ Dubai Film LLC</div>
                                              <div class="dark:text-dark-secondary text-light-secondary text-xs">October 2017 - Present</div>
                                            </li>
                                            <li>
                                              <div class="dark:text-dark-primary text-light-primary">Web Developer (Internship) @ NAV DC Cabanatuan City</div>
                                              <div class="dark:text-dark-secondary text-light-secondary text-xs">Jan 2017 - March 2017</div>
                                            </li>
                                          </ul>
                                        </div>
                                        <div>
                                          <div class="flex items-center space-x-2 font-semibold text-mjtheme-theme leading-8 mb-3">
                                            <span>
                                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                              stroke="currentColor">
                                              <path fill="none" d="M12 14l9-5-9-5-9 5 9 5z" />
                                              <path fill="none"
                                              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </svg>
                                          </span>
                                          <span class="tracking-wide">Education</span>
                                        </div>
                                        <ul class="list-inside space-y-2">
                                          <li>
                                            <div class="dark:text-dark-primary text-light-primary">NEUST University (Philippines) </div>
                                            <div class="dark:text-dark-primary text-light-primary">Bachelor of Science in Information Technology</div>
                                            <div class="dark:text-dark-primary text-light-primary">Majored in Web Application Programming</div>
                                            <div class="dark:text-dark-secondary text-light-secondary text-xs">2013 - 2017</div>
                                          </li>
                                          <li>
                                            <div class="dark:text-dark-primary text-light-primary">San Leonardo Academy ( High School )</div>
                                            <div class="dark:text-dark-secondary text-light-secondary text-xs">2009 - 2013</div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <!-- End of Experience and education grid -->
                                  </div>
                <!-- End of profile tab -->
                                <div class="my-4"></div>
                                <!-- Experience and education -->
                                <div class="dark:bg-dark-fg bg-light-fg rounded shadow-lg p-3">
                                  <div class="container-fluid text-center max-w-full dark:bg-dark-fg bg-light-fg text-gray-900 dark:text-white">
                                      <livewire:layout.mjgallery />
                                    </div>

                                    <!-- End of Experience and education grid -->
                                  </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>
  </div>
</div>
@livewire('layout.leftslider')
<livewire:theme />
<livewire:footer />
