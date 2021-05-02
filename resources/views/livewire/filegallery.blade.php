<div class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white">
  <h1 class="text-center title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">File Galleries</h1>
    <div class="text-center container-fluid text-center max-w-full py-10 grid 2xl:grid-cols-6 grid-cols-4 bg-white text-gray-900 dark:bg-gray-900 dark:text-white px-5">

<div class="2xl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-2 col-span-4">
      <form action="/dashboard/filegallery" method="post" enctype="multipart/form-data" class="p-3 ring-4 ring-inset rounded p-2 bg-blue-100 dark:bg-gray-800">
        @csrf
        <div class="inline-block">
            <input name="fg_name" placeholder="File name" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
            <input name="fg_file[]" multiple type="file" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
        </div>
            <input type="submit" value="Upload" class="active:bg-indigo-700 bg-indigo-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-indigo-700 focus:outline-none focus:shadow-outline-indigo font-medium hover:bg-indigo-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">
          </form>
          </div>
          <div class="2xl:col-span-5 2xl:grid-cols-6 2xl:min-h-0 lg:col-span-3 col-span-4 gap-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 lg:min-h-0 m-5 md:col-span-3 md:min-h-0 sm:col-span-2 xl:col-span-3 xl:grid-cols-6 xl:min-h-0">
            <?php foreach($filegallery as $fileg): ?>
              <?php foreach ($fileg->fg_file as $fimages): ?>
                <?php if (pathinfo($fimages)['extension'] === 'mp3'): ?>
                  <div onclick="copyFunc(this)" class="bg-blue-100 cursor-pointer flex h-24 justify-around mb-5 relative rounded w-full ">
                    <pre style="--tw-translate-y: -100%;background: white;padding: .3rem;width: 100%;" class="absolute top-0 rounded text-black transform translate-y-full">{{$fileg->fg_name}}</pre>
                            <audio controls preload="metadata">
                              <source src="https://webfilebucket.s3-ap-southeast-1.amazonaws.com/storage/image/{{$fileg->fg_name}}/{{$fimages}}" type="audio/mpeg">
                                Your browser does not support the audio element.
                              </audio>
                    <input type="input" value="https://webfilebucket.s3-ap-southeast-1.amazonaws.com/storage/image/{{$fileg->fg_name}}/{{$fimages}}" class="absolute bottom-0 rounded text-black">
                  </div>
                  <?php else: ?>
                <div onclick="copyFunc(this)" class="bg-blue-100 cursor-pointer flex h-24 justify-around mb-5 relative rounded w-full ">
                  <pre style="--tw-translate-y: -100%;background: white;padding: .3rem;width: 100%;" class="absolute top-0 rounded text-black transform translate-y-full">{{$fileg->fg_name}}</pre>
                  <img src="https://webfilebucket.s3-ap-southeast-1.amazonaws.com/storage/image/{{$fileg->fg_name}}/{{$fimages}}" alt="{{$fileg->fg_name}}" title="https://webfilebucket.s3-ap-southeast-1.amazonaws.com/storage/image/{{$fileg->fg_name}}/{{$fimages}}" class="duration-300 ease-in-out h-full hover:scale-150 rounded transform transition w-auto">
                  <input type="input" value="https://webfilebucket.s3-ap-southeast-1.amazonaws.com/storage/image/{{$fileg->fg_name}}/{{$fimages}}" class="absolute bottom-0 rounded text-black transform translate-y-full opacity-0">
                </div>
              <?php endif; ?>
              <?php endforeach; ?>
            <?php endforeach; ?>
            <script type="text/javascript">
              function copyFunc(sss){
                sss.children[2].select();
                sss.children[2].setSelectionRange(0, 99999)
                document.execCommand("copy");
                console.log();
              }
            </script>
          </div>
        </div>
  </div>
  </div>
