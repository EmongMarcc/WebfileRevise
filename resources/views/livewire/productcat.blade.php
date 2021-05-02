
<style media="screen">
  .rotate-270:hover{
    transform:rotate(270deg);
  }
  .rotate-45-inv:hover{
    transform:rotate(-45deg);
  }
  .rotate-90-inv:hover{
    transform:rotate(-90deg);
  }
  .skew-y-inv:hover{
    transform: skewY(
352deg
);
  }
  .popover:before{
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -10px;
    border-width: 7px;
    border-style: solid;
    border-color: transparent transparent lightgray transparent;
  }
</style>
<div class="grid grid-cols-1 md:grid-cols-2 py-6">


<div>
<h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl mx-3 dark:text-dark-primary text-light-primary border-mjtheme-theme border-b-2 w-1/4 whitespace-nowrap">Back End</h1>
<div class="p-10 flex md:flex-row items-center justify-around bg-trans flex-wrap sm:flex-col">
  <!-- scale -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 dark:bg-white bg-gray-300 opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform  hover:scale-75 transition duration-300" @mouseover="open = true, msg = 'Apache'" @mouseleave="open = false, msg = ''">
      <svg class="p-3 h-full w-full bg-white rounded-lg shadow-2xl" xmlns="http://www.w3.org/2000/svg" fill="SlateBlue" role="img" viewBox="0 0 24 24"><title>Apache</title><path d="M17.805 2.197v.066h.156v.44h.072v-.44h.156v-.066zm.9 0l-.175.353-.172-.353h-.087v.506h.067V2.3l.172.35h.045l.172-.35v.404h.066v-.506zm-4.257 1c-.204.31-.424.66-.66 1.06l-.04.062a44.457 44.457 0 00-1.265 2.29c-.187.36-.38.742-.577 1.146l2.267-.25c.66-.302.955-.578 1.242-.976a15.5 15.5 0 00.23-.342c.23-.363.46-.763.663-1.16.197-.386.37-.767.505-1.11.083-.22.15-.422.198-.6.042-.158.074-.307.1-.45-.884.15-1.965.295-2.668.33zM11.894 7.78l-.077.16c-.078.16-.157.32-.236.488-.086.18-.172.364-.26.552l-.132.287a75.265 75.265 0 00-1.427 3.3c-.163.397-.327.807-.493 1.23-.15.38-.297.765-.45 1.164l-.02.06c-.15.396-.3.802-.453 1.22l-.01.027.72-.08a.213.213 0 01-.042-.006c.863-.106 2.01-.75 2.75-1.547.342-.367.652-.8.94-1.306.213-.377.413-.795.604-1.258.168-.405.328-.843.48-1.318-.196.105-.423.18-.673.235a2.184 2.184 0 01-.273.046c.806-.31 1.314-.905 1.683-1.64a2.816 2.816 0 01-.968.428c-.06.012-.116.022-.174.03l-.043.006h.002c.278-.118.514-.248.718-.403a2.571 2.571 0 00.637-.698l.063-.104.077-.154a8.107 8.107 0 00.367-.85l.03-.088a3.04 3.04 0 00.123-.463.733.733 0 01-.094.065c-.243.145-.66.277-.996.34l.663-.074-.664.073h-.017l-.1.017c.006-.003.01-.006.017-.008l-2.265.25-.013.022zM8.27 16.45c-.117.323-.236.654-.355.992l-.005.015c-.016.046-.032.094-.05.142-.08.227-.15.432-.31.9.264.12.475.435.675.793a1.44 1.44 0 00-.466-.99c1.293.06 2.41-.27 2.99-1.217.05-.084.096-.173.14-.268-.26.333-.59.474-1.2.44 0 0-.004 0-.005.002l.004-.002c.9-.404 1.354-.79 1.754-1.433.094-.153.186-.32.28-.503-.788.81-1.702 1.04-2.664.865l-.72.078a6.43 6.43 0 00-.067.183zM15.42.112c-.376.222-1 .85-1.748 1.763l.686 1.294c.48-.687.97-1.307 1.462-1.836l.058-.062c-.02.02-.04.04-.057.062-.16.176-.644.74-1.375 1.863.703-.035 1.784-.18 2.666-.33.262-1.47-.258-2.142-.258-2.142s-.66-1.07-1.436-.61zm-3.084 6.402a40.253 40.253 0 011.306-2.26l.04-.064c.224-.352.45-.693.677-1.02l-.685-1.293-.157.192c-.197.245-.403.51-.613.79a39.853 39.853 0 00-2.016 2.97l-.022.038.893 1.763c.19-.378.38-.752.575-1.118zm-3.73 8.32c.158-.406.319-.81.483-1.225.156-.394.32-.79.484-1.19a91.133 91.133 0 011.6-3.604l.205-.424c.12-.243.237-.485.36-.724a.125.125 0 01.02-.04l-.895-1.763-.044.07c-.207.34-.414.687-.617 1.042a38.056 38.056 0 00-1.092 2.04l-.094.193a24.573 24.573 0 00-1.258 3.087 18.492 18.492 0 00-.52 1.997l.896 1.77c.117-.317.24-.638.364-.963zm-1.376-.476a13.38 13.38 0 00-.234 1.692c0 .02-.004.04-.005.06-.28-.45-1.03-.888-1.026-.884.537.778.944 1.55 1.005 2.31-.29.058-.684-.027-1.14-.195.475.436.83.556.97.588-.434.03-.89.328-1.346.67.668-.27 1.21-.38 1.596-.29-.61 1.74-1.23 3.655-1.843 5.69a.538.538 0 00.364-.354c.11-.368.84-2.786 1.978-5.965l.097-.27.028-.078c.12-.332.246-.672.374-1.02l.09-.237v-.004L7.24 14.3c-.003.02-.01.04-.012.06z"/></svg>

    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <!-- roatate and scale -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform hover:rotate-90 hover:scale-75 transition duration-300" @mouseover="open = true, msg = 'Laravel'" @mouseleave="open = false, msg = ''">
      <div class="absolute h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-270" xmlns="http://www.w3.org/2000/svg" fill="OrangeRed" role="img" viewBox="0 0 24 24"><title>Laravel</title><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <!-- rotate -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform  hover:rotate-45 transition duration-300" @mouseover="open = true, msg = 'Javascript'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-45-inv" xmlns="http://www.w3.org/2000/svg" fill="DarkKhaki" role="img" viewBox="0 0 24 24"><title>JavaScript icon</title><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <!-- Origin -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform origin-left hover:-rotate-45 transition duration-300" @mouseover="open = true, msg = 'MySQL'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition hover:rotate-45" xmlns="http://www.w3.org/2000/svg" fill="Chocolate" role="img" viewBox="0 0 24 24"><title>MySQL</title><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <!-- translate -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform hover:-translate-x-10 transition duration-300" @mouseover="open = true, msg = 'PHP'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="RoyalBlue" role="img" viewBox="0 0 24 24"><title>PHP</title><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
    <div class="absolute inset-0 transform  hover:rotate-45 transition duration-300" @mouseover="open = true, msg = 'Livewire'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <img src="{{asset('images/livewire.png')}}" class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-45-inv" >
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>

    <div class="absolute inset-0 transform hover:rotate-90 hover:translate-x-full hover:scale-150 transition duration-300" @mouseover="open = true, msg = 'Node.js'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-90-inv" xmlns="http://www.w3.org/2000/svg" fill="LimeGreen" role="img" viewBox="0 0 24 24"><title>Node.js icon</title><path d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>


</div>
</div>
<div>
<h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl mx-3 dark:text-dark-primary text-light-primary border-mjtheme-theme border-b-2 w-1/4 whitespace-nowrap">Front End</h1>
  <div class="p-10 flex md:flex-row items-center justify-around bg-trans flex-wrap sm:flex-col">
    <!-- skew -->
    <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
      <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
      <div class="absolute inset-0 transform hover:skew-y-12 transition duration-300" @mouseover="open = true, msg = 'Vue.js'" @mouseleave="open = false, msg = ''">
        <div class="h-full w-full bg-white rounded-lg shadow-2xl">
          <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition skew-y-inv" xmlns="http://www.w3.org/2000/svg" fill="MediumSeaGreen" role="img" viewBox="0 0 24 24"><title>Vue.js</title><path d="M24,1.61H14.06L12,5.16,9.94,1.61H0L12,22.39ZM12,14.08,5.16,2.23H9.59L12,6.41l2.41-4.18h4.43Z"/></svg>
        </div>
      </div>
      <div
      x-cloak
      x-show.transition="open"
      class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
      <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
    </div>
    </div>

    <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
      <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
      <div class="absolute inset-0 transform  hover:rotate-45 transition duration-300" @mouseover="open = true, msg = 'Alpine JS'" @mouseleave="open = false, msg = ''">
        <div class="h-full w-full bg-white rounded-lg shadow-2xl">
          <img src="{{asset('images/alpine.png')}}" class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-45-inv" >
        </div>
      </div>
      <div
      x-cloak
      x-show.transition="open"
      class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
      <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
    </div>
    </div>

    <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
      <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
      <div class="absolute inset-0 transform  hover:rotate-45 transition duration-300" @mouseover="open = true, msg = 'tailwindcss'" @mouseleave="open = false, msg = ''">
        <div class="h-full w-full bg-white rounded-lg shadow-2xl">
          <img src="{{asset('images/tailwind.png')}}" class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-45-inv" >
        </div>
      </div>
      <div
      x-cloak
      x-show.transition="open"
      class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
      <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
    </div>
    </div>

    <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
      <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
      <div class="absolute inset-0 transform  hover:rotate-45 transition duration-300" @mouseover="open = true, msg = 'Bootstrap'" @mouseleave="open = false, msg = ''">
        <div class="h-full w-full bg-white rounded-lg shadow-2xl">
          <img src="{{asset('images/bootstrap.png')}}" class="p-3 absolute duration-100 ease-in-out top-0 transform transition rotate-45-inv" >
        </div>
      </div>
      <div
      x-cloak
      x-show.transition="open"
      class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
      <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
    </div>
    </div>

  <!-- rotate minus -->
  <div class="h-32 w-32 relative cursor-pointer mb-5" x-data="{open: false, msg: '' }">
    <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl" ></div>
    <div class="absolute inset-0 transform  hover:-rotate-45 transition duration-300" @mouseover="open = true, msg = 'JQuery'" @mouseleave="open = false, msg = ''">
      <div class="h-full w-full bg-white rounded-lg shadow-2xl">
        <svg class="p-3 absolute duration-100 ease-in-out top-0 transform transition hover:rotate-45" xmlns="http://www.w3.org/2000/svg" fill="SteelBlue" role="img" viewBox="0 0 24 24"><title>jQuery</title><path d="M1.525 5.87c-2.126 3.054-1.862 7.026-.237 10.269.037.079.078.154.118.229.023.052.049.1.077.15.013.027.031.056.047.082.026.052.054.102.081.152l.157.266c.03.049.057.097.09.146.056.094.12.187.178.281.026.04.05.078.079.117a6.368 6.368 0 00.31.445c.078.107.156.211.24.315.027.038.058.076.086.115l.22.269c.028.03.055.067.084.099.098.118.202.233.306.35l.005.006a3.134 3.134 0 00.425.44c.08.083.16.165.245.245l.101.097c.111.105.223.209.34.309.002 0 .003.002.005.003l.057.05c.102.089.205.178.31.26l.125.105c.085.068.174.133.26.2l.137.105c.093.07.192.139.287.207.035.025.07.05.106.073l.03.023.28.185.12.08c.148.094.294.184.44.272.041.02.084.044.123.068.108.062.22.125.329.183.06.034.122.063.184.094.075.042.153.083.234.125a.324.324 0 01.056.023c.033.015.064.031.096.047.12.06.245.118.375.175.024.01.05.02.076.034.144.063.289.123.438.182.034.01.07.027.105.04.135.051.274.103.411.152l.05.018c.154.052.305.102.46.15.036.01.073.023.111.033.16.048.314.105.474.137 10.273 1.872 13.258-6.177 13.258-6.177-2.508 3.266-6.958 4.127-11.174 3.169-.156-.036-.312-.086-.47-.132a13.539 13.539 0 01-.567-.182l-.062-.024c-.136-.046-.267-.097-.4-.148a1.615 1.615 0 00-.11-.04c-.148-.06-.29-.121-.433-.184-.031-.01-.057-.024-.088-.036a23.44 23.44 0 01-.362-.17 1.485 1.485 0 01-.106-.052c-.094-.044-.188-.095-.28-.143a3.947 3.947 0 01-.187-.096c-.114-.06-.227-.125-.34-.187-.034-.024-.073-.044-.112-.066a15.922 15.922 0 01-.439-.27 2.107 2.107 0 01-.118-.078 6.01 6.01 0 01-.312-.207c-.035-.023-.067-.048-.103-.073a9.553 9.553 0 01-.295-.212c-.042-.034-.087-.066-.132-.1-.088-.07-.177-.135-.265-.208l-.118-.095a10.593 10.593 0 01-.335-.28.258.258 0 00-.037-.031l-.347-.316-.1-.094c-.082-.084-.166-.164-.25-.246l-.098-.1a9.081 9.081 0 01-.309-.323l-.015-.016c-.106-.116-.21-.235-.313-.355-.027-.03-.053-.064-.08-.097l-.227-.277a21.275 21.275 0 01-.34-.449C2.152 11.79 1.306 7.384 3.177 3.771m4.943-.473c-1.54 2.211-1.454 5.169-.254 7.508a9.111 9.111 0 00.678 1.133c.23.33.484.721.793.988.107.122.223.24.344.36l.09.09c.114.11.232.217.35.325l.016.013a9.867 9.867 0 00.414.342c.034.023.063.05.096.073.14.108.282.212.428.316l.015.009c.062.045.128.086.198.13.028.018.06.042.09.06.106.068.21.132.318.197.017.007.032.016.048.023.09.055.188.108.282.157.033.02.065.035.1.054.066.033.132.068.197.102l.032.014c.135.067.273.129.408.19.034.014.063.025.092.039.111.048.224.094.336.137.05.017.097.037.144.052.102.038.21.073.31.108l.14.045c.147.045.295.104.449.13C22.164 17.206 24 11.098 24 11.098c-1.653 2.38-4.852 3.513-8.261 2.628a8.04 8.04 0 01-.449-.13c-.048-.014-.09-.029-.136-.043-.104-.036-.211-.07-.312-.109l-.144-.054c-.113-.045-.227-.087-.336-.135-.034-.015-.065-.025-.091-.04-.14-.063-.281-.125-.418-.192l-.206-.107-.119-.06a5.673 5.673 0 01-.265-.15.62.62 0 01-.062-.035c-.106-.066-.217-.13-.318-.198-.034-.019-.065-.042-.097-.062l-.208-.136c-.144-.1-.285-.208-.428-.313-.032-.029-.063-.053-.094-.079-1.499-1.178-2.681-2.79-3.242-4.613-.59-1.897-.46-4.023.56-5.75m4.292-.147c-.909 1.334-.996 2.99-.37 4.46.665 1.563 2.024 2.79 3.608 3.37.065.025.128.046.196.07l.088.027c.092.03.185.063.28.084 4.381.845 5.567-2.25 5.886-2.704-1.043 1.498-2.792 1.857-4.938 1.335a4.85 4.85 0 01-.516-.16 6.352 6.352 0 01-.618-.254 6.53 6.53 0 01-1.082-.66c-1.922-1.457-3.113-4.236-1.859-6.5"/></svg>
      </div>
    </div>
    <div
    x-cloak
    x-show.transition="open"
    class="popover p-3 space-y-1 mt-36 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 relative z-20">
    <strong x-text="msg" class="text-sm text-gray-800 font-semibold"></strong>
  </div>
  </div>

</div>
</div>
</div>
