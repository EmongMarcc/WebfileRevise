@extends('layouts.Home')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">

<style media="screen">
  .sun-editor-editable{
    background-color: transparent;
  }
  .audio-duration {
    height: 10px;
    width: 100%;
    border-radius: 10px;
    position: relative;
    box-shadow: 1px 1px 1px grey inset;
  }

  .audio-duration-indicator {
    border-radius: 10px;
    height: 100%;
    width: 0;
  }

  input[type=range] {
    -webkit-appearance: none;
    background: transparent;
  }

  input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    transition: transform 300ms;
  }

  input[type=range]::-webkit-slider-thumb:hover {
    transform: scale(1.3);
  }

  .audio-duration-toggler {
    width: 100%;
    position: absolute;
    height: 20px;
    top: 0;
    margin-top: -5px;
    left: 0;
  }

  .audio-duration-toggler::-webkit-slider-thumb {
    border: 1px solid grey;
    height: 20px;
    width: 10px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
    border-radius: 30px;
    margin-left: -3px;
  }

  .volume {
    width: 100%;
    height: 3px;
    border-radius: 5px;
    margin-top: 20px;
    position: relative;
  }

  .volume-indicator {
    width: 100%;
    height: 100%;
  }

  .volume-toggler {
    position: absolute;
    top: 0;
    margin-top: -4px;
    width: 100%;
  }

  .volume-toggler::-webkit-slider-thumb {
    border: 1px solid rgb(224, 224, 224);
    background: white;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    cursor: pointer;
    margin-left: -3px;
  }
  	[x-cloak] { display: none; }
</style>
  <livewire:navigationcc />
  <div class="min-h-screen dark:bg-mjtheme-dark bg-mjtheme-white duration-150 ease-in flex justify-center overflow-x-hidden pt-16 transition-colors" >
    <div class="pt-6 w-full mx-8">
      @include('livewire.layout.breadcrumbs',['pages'=>'blogs'])
<div class="grid grid-cols-12 ">
  <div class="2xl:col-start-2 xl:col-start-2 2xl:col-span-2 xl:col-span-2 lg:col-span-3 md:col-span-3 md:h-full sm:h-full h-auto col-span-12 rounded">
    <div class="2xl:mt-24 xl:mt-24 lg:mt-20 md:mt-16">
    <audio id="myAudio" ontimeupdate="document.getElementById('tracktime').innerHTML = time_convert(Math.round(this.currentTime));document.getElementById('trackduration').innerHTML = time_convert(Math.round(this.duration))">
      <source src="{{$blogposts->audio[1]}}" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <div class="rounded shadow-lg rounded-lg bg-cover bg-center bg-no-repeat" style="background-image:url('{{$blogposts->audio[0]}}')">
				<div class="w-full p-8">
					<div class="flex justify-center items-center mt-8">
						<div x-data="{ isShowing: false }" class="text-white p-5 rounded-full bg-gradient-to-r shadow-lg">
                <div @click="isShowing=true" onclick="playAudio()" x-show="!isShowing" class="h-8 w-8 relative cursor-pointer">
                    <div class="absolute inset-0 bg-transparent opacity-25 rounded-full shadow-2xl"></div>
                    <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                      <div class="h-full w-full bg-transparent rounded-full shadow-2xl">
                        <svg class="w-full h-full mj-theme-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                      </div>
                    </div>
                </div>
                <div @click="isShowing=false" onclick="pauseAudio()" x-show="isShowing" style="display:none;" class="h-8 w-8 relative cursor-pointer">
                  <div class="absolute inset-0 bg-transparent opacity-25 rounded-full shadow-2xl"></div>
                  <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                    <div class="h-full w-full bg-transparent rounded-full shadow-2xl">
                        <svg class="w-full h-full mj-theme-text p-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"/></svg>
                    </div>
                  </div>
                </div>
              </div>
					</div>
				</div>
			<div class="mx-8 py-4">
				<div class="flex justify-between text-sm text-grey-200">
	         <span id="tracktime"></span>
          <div class="audio-duration bg-gray-100 mx-4 my-auto">
            <div class="audio-duration-indicator dark:bg-blue-200 bg-gray-400">
            </div>
            <input class="audio-duration-toggler" id="duration-toggler" type="range" value="0" />
          </div>
          <span id="trackduration"></span>
				</div>
        <div class="volume dark:bg-indigo-500 bg-gray-800">
          <div class="volume-indicator dark:bg-blue-200 bg-gray-400"></div>
          <input class="volume-toggler" id='volume-toggler' type="range" value="100" />
        </div>
			</div>
		</div>
		</div>
		</div>
    <div class="min-w-full 2xl:col-span-9 xl:col-span-9 lg:col-span-9 md:col-span-9 sm:col-span-12 col-span-12">
      <div class="flex justify-center w-full">
        <div class="text-center w-full">
          <h3 class="text-4xl mj-theme-text-theme font-medium mj-text-border font-extrabold">{{$blogposts->title}}</h3>
          <div class="flex justify-around mt-1">
            <p class="text-sm mj-theme-text">{{$blogposts->p_date}}</p>
            <p class="text-sm mj-theme-text ">@Chrissy Camilla</p>
            <?php if (count($comments)): ?>
              <?php $total = 0; foreach ($comments as $comment):
              $total += $comment->rating;
              endforeach; ?>
              <div class="flex flex-col">
                <p class="text-sm mj-theme-text ">Ratings:</p>
                <p class="text-white pt-2 rounded-full bg-gradient-to-r shadow-lg w-10 h-10 ring-1 ring-inset dark:ring-mjtheme-light ring-mjtheme-dark">{{round($total/count($comments))}}</p>
            </div>
            <?php endif; ?>


          </div>

        </div>
      </div>
      <div class="flex justify-center">
      <div class="sun-editor-editable mj-theme-text bg-transparent relative w-full 2xl:max-w-4xl xl:max-w-3xl lg:max-w-2xl">
        <?php echo htmlspecialchars_decode(stripslashes($blogposts->body)); ?>
      </div>
    </div>
      @livewire('layout.comment', ['blogid' => $blogposts->id])
    </div>
  </div>
  </div>
  </div>
  @livewire('layout.leftslider')
  <livewire:theme />
  <livewire:footer />
  <script>
  function time_convert(num){
  var hours = Math.floor(num / 60);
  var minutes = num % 60;
  return hours + ":" + minutes;
  }
  function playAudio() {
    document.getElementById("myAudio").play();
  }
  function pauseAudio() {
    document.getElementById("myAudio").pause();
  }
  const durationIndicator = document.querySelector('.audio-duration-indicator');
  const volumeIndicator = document.querySelector('.volume-indicator');
  const audio = document.getElementById('myAudio');
  const durationToggler = document.getElementById('duration-toggler');
  const volumeToggler = document.getElementById('volume-toggler');
  let duration;
  audio.addEventListener('loadedmetadata', () => {
    duration = audio.duration;
  })
  const setCurrentTime = (currentTime) => {
  audio.currentTime = currentTime;
}

const getAudioProgress = (currentTime) => {
  const progress = currentTime / duration * 100
  durationIndicator.style.width = progress + '%';
  durationToggler.value = progress;
  return progress;
}

audio.addEventListener('timeupdate', (e) => {
  const currentTime = e.target.currentTime;
  getAudioProgress(currentTime);
});

durationToggler.addEventListener('input', (e) => {
  const progress = parseInt(e.target.value);
  const time = progress / 100 * duration;
  setCurrentTime(time);
  getAudioProgress(time, duration);
})

volumeToggler.addEventListener('input', (e) => {
  const value = e.target.value;
  const volume = value / 100;
  audio.volume = volume;
  volumeIndicator.style.width = value + '%';
})
  </script>
@endsection
