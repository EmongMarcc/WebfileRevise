<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="pt-16 dark:bg-dark-bg bg-light-bg overflow-x-hidden transition-colors ease-in duration-150" >
  <!-- <div class="container sun-editor-editable">
   echo htmlspecialchars_decode(stripslashes($blogposts[0]->body)); ?>
  </div> -->
  <div class="sm:px-6 py-8">
    @livewire('layout.breadcrumbs', ['pages' => 'blogs'])
        <div class="flex justify-between container mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white transition ease-in-out duration-300 md:text-2xl">Post</h1>
                    <input id="searchBar" class="font-medium dark:bg-black bg-blue-100 mj-theme-text my-1 duration-150 mx-auto align-middle text-center rounded hover:shadow-2xl transform w-2/3" placeholder="Search" type="search" name="search">
                </div>
                <table id="table_id" style="width: 100% !important;" >
                <thead>
                    <tr>
                        <th style="display:none"></th>
                        <th style="display:none"></th>
                        <th style="display:none"></th>
                        <th style="display:none"></th>
                        <th style="display:none"></th>
                        <th style="display:none"></th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($blogposts as $blog): ?>
                    <tr>
                        <td>                  <div class="mt-6">
                                              <div class="sm:w-full w-screen relative contain max-w-4xl px-10 py-6 rounded-lg shadow-xl dark:bg-dark-fg bg-light-fg">
                                                  <div class="flex justify-between items-center"><span class="font-light text-gray-200">{{$blog->p_date}}</span>
                                                    <a href="{{url('blogpage/'.$blog->id)}}" class="hover:-translate-y-1 transform inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-mjtheme-theme rounded-full shadow ripple waves-light hover:shadow-lg focus:outline-none dark:hover:bg-dark-bg hover:bg-dark-fg waves-effect">Read More</a>
                                                  </div>
                                                  <div class="mt-2"><a href="{{url('blogpage/'.$blog->id)}}" class="text-2xl text-gray-900 dark:text-white transition ease-in-out duration-300 font-bold hover:underline">{{$blog->title}}</a>
                                                    <div style="height:100%;max-height:150px;overflow:hidden;">
                                                      <div class="sun-editor-editable h-full bg-white">
                                                        <?php echo htmlspecialchars_decode(stripslashes($blog->body)); ?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="flex justify-between items-center mt-4">
                                                    <a href="{{url('category/'.$blog->category)}}" class="text-blue-500 hover:underline">{{$blog->category}}</a>
                                                      <?php if (count($comments)): ?>
                                                      <?php $total = 0;$countIter = 0; foreach ($comments as $comment):?>
                                                        <?php if ($comment->blog_id == $blog->id): ?>
                                                    <?php  $total += $comment->rating; $countIter++ ?>
                                                    <?php endif; ?>
                                                  <?php  endforeach; ?>
                                                      <div class="flex">
                                                        <?php if ($countIter): ?>
                                                        <?php for($j = 0; $j < round($total/$countIter); $j++): ?>
                                                          <svg class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer text-gray-600 text-yellow-400" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"></path></svg>
                                                        <?php endfor; ?>
                                                      <?php endif; ?>
                                                      </div>
                                                    <?php endif; ?>
                                                  </div>
                                              </div>
                                          </div></td>

                        <td style="display:none">{{$blog->title}}</td>
                        <td style="display:none">{{$blog->p_date}}</td>
                        <td style="display:none">{{$blog->category}}</td>
                        <td style="display:none">{{$blog->category}}</td>
                        <td style="display:none">{{strip_tags($blog->body)}}</td>
                    </tr>
                                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
            <div class="-mx-8 w-4/12 hidden lg:block">
                <div class="px-8">
                    <h1 class="mb-4 text-xl font-bold dark:text-dark-primary text-light-primary transition ease-in-out duration-300">Authors</h1>
                    <div class="dark:bg-dark-fg bg-light-fg flex flex-col max-w-sm px-6 py-4 mx-auto rounded shadow-lg">
                        <ul class="-mx-4">
                            <li class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                <p><a href="#" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:underline">Alex John</a><span
                                        class="dark:text-dark-secondary text-light-secondary transition ease-in-out duration-300 text-sm font-light">Created 23 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                <p><a href="#" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:underline">Jane Doe</a><span
                                        class="dark:text-dark-secondary text-light-secondary transition ease-in-out duration-300 text-sm font-light">Created 52 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                <p><a href="#" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:underline">Lisa Way</a><span
                                        class="dark:text-dark-secondary text-light-secondary transition ease-in-out duration-300 text-sm font-light">Created 73 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                <p><a href="#" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:underline">Steve Matt</a><span
                                        class="dark:text-dark-secondary text-light-secondary transition ease-in-out duration-300 text-sm font-light">Created 245 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                    alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                <p><a href="#" class="text-gray-900 dark:text-white transition ease-in-out duration-300 font-bold mx-1 hover:underline">Khatab
                                        Wedaa</a><span class="dark:text-dark-secondary text-light-secondary transition ease-in-out duration-300 text-sm font-light">Created 332 Posts</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 px-8">
                    <h1 class="mb-4 text-xl font-bold dark:text-dark-primary text-light-primary transition ease-in-out duration-300">Categories</h1>
                    <div class="dark:bg-dark-fg bg-light-fg flex flex-col px-4 py-6 max-w-sm mx-auto rounded shadow-lg">
                        <ul>
                            <li><button id="searchCat1" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:text-gray-600 hover:underline" value="Personal Blogs">- Personal Blogs</button></li>
                            <li class="mt-2"><button id="searchCat2" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:text-gray-600 hover:underline" value="Life Practice Blogs">- Life Practice Blogs</button></li>
                            <li class="mt-2"><button id="searchCat3" class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-bold mx-1 hover:text-gray-600 hover:underline" value="Psych Blogs">- Psych Blogs</button></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 px-8">
                    <h1 class="mb-4 text-xl font-bold dark:text-dark-primary text-light-primary transition ease-in-out duration-300">Recent Post</h1>
                    <div class="dark:bg-dark-fg bg-light-fg flex flex-col px-8 py-6 max-w-sm mx-auto rounded shadow-lg">
                        <div class="flex justify-center items-center"><a href="#" class="px-2 py-1 bg-mjtheme-theme text-sm text-dark-primary rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-4"><a href="#" class="text-lg dark:text-dark-primary text-light-primary transition ease-in-out duration-300 font-medium hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a></div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="w-8 h-8 object-cover rounded-full"><a href="#"
                                    class="dark:text-dark-primary text-light-primary transition ease-in-out duration-300 text-sm mx-3 hover:underline">Alex John</a></div><span
                                class="font-light text-sm dark:text-dark-secondary text-light-secondary">Jun 1, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
var table = $('#table_id').DataTable();
  $('#searchCat1').on('click', function () {
    table.search( this.value ).draw();
  } );
  $('#searchCat2').on('click', function () {
    table.search( this.value ).draw();
  } );
  $('#searchCat3').on('click', function () {
    table.search( this.value ).draw();
  } );
  //enter search bar navigation
  var searchBar = document.getElementById("searchBar");
  searchBar.addEventListener("keydown", function (e) {
    if (e.keyCode === 13) {
        document.querySelector('#table_id_filter label input').value = searchBar.value;
        document.querySelector('#table_id_filter label input').select();
    }
  });
});


</script>
