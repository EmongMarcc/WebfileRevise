<div class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white  mx-auto px-5 py-24" id="blogC">
  <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
    <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl"> Blog</h1>
    <p class="lg:w-1/2 w-full leading-relaxed text-base">
      Sub title paragraph. Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.
    </p>
  </div>
  <div class="2xl:grid-cols-6 2xl:min-h-0 gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:min-h-0 m-5 md:col-span-2 md:min-h-0 min-h-screen sm:col-span-2 sm:min-h-screen xl:col-span-3 xl:grid-cols-5 xl:min-h-0">
    <?php foreach ($blogposts as $blog): ?>
    <div class="h-full w-full">
      <div class="bg-gray-300 dark:bg-gray-800 border border-gray-300 p-3 rounded-lg transition duration-75 ease-linear transform hover:shadow-2xl hover:-translate-y-6">
        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full mj-indigo-bg text-white mb-4">
          <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>

        </div>
        <h2 class="text-lg  font-medium title-font mb-2">{{$blog->title}}</h2>
        <!-- <p class="leading-relaxed text-base">{{$blog->body}}</p> -->
        <div class="text-center mt-2 leading-none flex justify-between w-full">
          <iframe src="https://open.spotify.com/embed/track/{{$blog->embed}}" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="mx-2 px-3 w-full flex">

            <!-- <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
              <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
              Ratings:&nbsp;
            </span> -->
            <span> Ratings:</span>
            <div x-data="{rating: 4,hoverRating: 0,ratings: [ 1, 2, 3, 4, 5]}">
                <template x-for="star in ratings">
                    <button class="rounded-sm focus:outline-none focus:shadow-outline p-1">
                        <svg :class="{ 'text-gray-600' : hoverRating >= star, 'text-yellow-400' : rating >= star }" class="w-4 text-gray-400 fill-current transition duration-150 cursor-pointer" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"/></svg>
                    </button>
                </template>
                <div class="hidden">
                    <label for="rating">Your star rating</label>
                    <input type="number" name="rating" x-model="rating">
                </div>
            </div>

        </div>

      </div>
    </div>
    <?php endforeach; ?>

  </div>
<?php if (Auth::check()): ?>
  <div class="container text-center max-w-full py-10">

    <h1 class="text-center title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">Post Blog</h1>
    <form action="/" method="post" class="max-w-4xl inline-block max-w-4xl w-1/2">
      @csrf
    <div class="sm:col-span-6">
        <label for="title" class="block text-sm font-medium dark:text-gray-200 text-gray-900">
            Post Title
        </label>
        <div class="mt-1">
            <input name="title" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
    </div>
    <div class="sm:col-span-6 pt-5">
        <label for="body" class="block text-sm font-medium dark:text-gray-200 text-gray-900">Body</label>
        <div class="mt-1">
            <textarea name="body" rows="3" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 shadow-sm focus:ring-indigo-500 appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-200">Add the body for your post.</p>
    </div>
    <div class="sm:col-span-6">
        <label for="title" class="block text-sm font-medium dark:text-gray-200 text-gray-900">
            Embed Spotify Music:
        </label>
        <div class="mt-1">
            <input name="embed" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
    </div>
    <div class="sm:col-span-6">
        <label for="title" class="block text-sm font-medium dark:text-gray-200 text-gray-900">
            Select Date:
        </label>
        <div class="mt-1">

            <input name="p_date" type="date" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
    </div>
    <input type="submit" value="Submit" class="active:bg-indigo-700 bg-indigo-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-indigo-700 focus:outline-none focus:shadow-outline-indigo font-medium hover:bg-indigo-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">
    </form>
  </div>
<?php endif; ?>
  </div>
