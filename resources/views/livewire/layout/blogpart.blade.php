
<div class="py-3 transition duration-300 ease-in-out">
<h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl mx-3 dark:text-mjtheme-light text-mjtheme-dark ">Featured Blogs</h1>
<div class="container mx-auto p-3  dark:bg-dark-fg bg-light-fg rounded shadow-lg">
                <?php  if (count($blogposts)-1 >= 0): ?>
  <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('{{$blogposts[count($blogposts)-1]->audio[0]}}')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">{{$blogposts[count($blogposts)-1]->title}}</h2>
                        <p class="mt-2 text-gray-400">{{$blogposts[count($blogposts)-1]->category}} - {{$blogposts[count($blogposts)-1]->p_date}}</p>
                        <a href="blogpage/{{$blogposts[count($blogposts)-1]->id}}" class="flex text-center items-center mt-4 mj-theme-text text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                                   <span>read me</span>
                                                   <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                         </a>
                         <?php if (count($comments)): ?>
                         <?php $total = 0;$countIter = 0; foreach ($comments as $comment):?>
                           <?php if ($comment->blog_id == $blogposts[count($blogposts)-1]->id): ?>
                       <?php  $total += $comment->rating; $countIter++ ?>
                       <?php endif; ?>
                     <?php  endforeach; ?>
                         <div class="flex justify-center" title="Users vote: {{$countIter}}">
                           <?php if ($countIter): ?>
                           <?php for($j = 0; $j < round($total/$countIter); $j++): ?>
                             <svg class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer text-gray-600 text-yellow-400" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"></path></svg>
                           <?php endfor; ?>
                         <?php endif; ?>
                         </div>
                       <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="md:flex mt-8 md:-mx-4">
              <?php  if (count($blogposts)-2 >= 0): ?>
              <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('{{$blogposts[count($blogposts)-2]->audio[0]}}')">
                  <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                      <div class="px-10 max-w-xl">
                          <h2 class="text-2xl text-white font-semibold">{{$blogposts[count($blogposts)-2]->title}}</h2>
                          <p class="mt-2 text-gray-400">{{$blogposts[count($blogposts)-2]->category}} - {{$blogposts[count($blogposts)-2]->p_date}}</p>
                          <div class="flex justify-around w-full">
                          <a href="blogpage/{{$blogposts[count($blogposts)-2]->id}}" class="flex text-center items-center mt-4 mj-theme-text text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                                     <span>read me</span>
                                                     <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                           </a>
                           <?php if (count($comments)): ?>
                           <?php $total = 0;$countIter = 0; foreach ($comments as $comment):?>
                             <?php if ($comment->blog_id == $blogposts[count($blogposts)-2]->id): ?>
                         <?php  $total += $comment->rating; $countIter++ ?>
                         <?php endif; ?>
                       <?php  endforeach; ?>
                           <div class="flex justify-center" title="Users vote: {{$countIter}}">
                             <?php if ($countIter): ?>
                             <?php for($j = 0; $j < round($total/$countIter); $j++): ?>
                               <svg class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer text-gray-600 text-yellow-400" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"></path></svg>
                             <?php endfor; ?>
                           <?php endif; ?>
                           </div>
                         <?php endif; ?>
                           </div>
                      </div>
                  </div>
              </div>
            <?php endif; ?>
                <?php  if (count($blogposts)-3 >= 0): ?>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('{{$blogposts[count($blogposts)-3]->audio[0]}}')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">{{$blogposts[count($blogposts)-3]->title}}</h2>
                            <p class="mt-2 text-gray-400">{{$blogposts[count($blogposts)-3]->category}} - {{$blogposts[count($blogposts)-3]->p_date}}</p>
                            <div class="flex justify-around w-full">
                            <a href="blogpage/{{$blogposts[count($blogposts)-3]->id}}" class="flex text-center items-center mt-4 mj-theme-text text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                                       <span>read me</span>
                                                       <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                             </a>
                             <?php if (count($comments)): ?>
                             <?php $total = 0;$countIter = 0; foreach ($comments as $comment):?>
                               <?php if ($comment->blog_id == $blogposts[count($blogposts)-3]->id): ?>
                           <?php  $total += $comment->rating; $countIter++ ?>
                           <?php endif; ?>
                         <?php  endforeach; ?>
                             <div class="flex justify-center" title="Users vote: {{$countIter}}">
                               <?php if ($countIter): ?>
                               <?php for($j = 0; $j < round($total/$countIter); $j++): ?>
                                 <svg class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer text-gray-600 text-yellow-400" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"></path></svg>
                               <?php endfor; ?>
                             <?php endif; ?>
                             </div>
                           <?php endif; ?>
                             </div>
                        </div>
                    </div>
                </div>
              <?php endif; ?>
            </div>

</div>

</div>
