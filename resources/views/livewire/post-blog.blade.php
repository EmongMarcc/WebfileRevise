   <div class="mt-6 justify-center flex">
  <form class="max-w-4xl mj-theme-bg relative rounded-lg shadow-md w-full">
      <div class="grid grid-cols-3">
        <input required type="text" name="c_name" id="c_name"  placeholder="Name" class="w-full 2xl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-3 sm:col-span-3 col-span-3 my-1 dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-2/4 transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        <input required type="email" name="c_email" id="c_email"  placeholder="Email" class="w-full 2xl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-3 sm:col-span-3 col-span-3 my-1 dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-2/4 transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        <div class="w-full 2xl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-3 sm:col-span-3 col-span-3 flex mj-theme-text my-1">
          <div x-data="
                      {
                          rating: 0,
                          hoverRating: 0,
                          ratings: [ 1, 2, 3, 4, 5]
                      }
                      " class="flex items-center space-x-1"
                      >

              <template x-for="star in ratings">
                <a
                @click="rating = star"
                @mouseover="hoverRating = star"
                @mouseleave="hoverRating = rating"
                aria-hidden="true"
                class="rounded-sm focus:outline-none focus:shadow-outline p-1">
                    <svg
                        :class="{ 'text-gray-600' : hoverRating >= star, 'text-yellow-400' : rating >= star }"
                        class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"/></svg>
                </a>

              </template>

              <div class="hidden">
                <label for="rating">Your star rating</label>
                <input required type="number" name="rating" id="rating" x-model="rating">
              </div>

            </div>
          </div>
      </div>

            <textarea placeholder="Say something..." name="c_comment" id="c_comment" rows="4" cols="33" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
          <button id="btn-submit" type="submit" class="active:bg-indigo-700 bg-indigo-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-indigo-700 focus:outline-none focus:shadow-outline-indigo font-medium hover:bg-indigo-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">post a comment</button>
      </form>
    </div>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script type="text/javascript">

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
      });

      $("#btn-submit").click(function(e){

          e.preventDefault();

            var c_name =document.getElementById("c_name").value;
            var c_email =document.getElementById("c_email").value;
            var rating =document.getElementById("rating").value;
            var c_comment =document.getElementById("c_comment").value;
            var blog_id = '{{$blogposts->id}}';
          $.ajax({
             type:'POST',
             url:"{{ route('ajaxRequest.post') }}",
             data:{
                c_name:c_name,
                c_email:c_email,
                rating:rating,
                c_comment:c_comment,
                blog_id:blog_id
              },
             success:function(data){
                alert(data.dataaa);
             }
          });

      });
  </script>
