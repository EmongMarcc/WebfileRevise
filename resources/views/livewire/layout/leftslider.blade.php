<section
  x-data="slideout()"
  x-cloak
  @open-menu.window="open = $event.detail.open"
  @keydown.window.tab="usedKeyboard = true"
  @keydown.escape="open = false"
  x-init="init()">
  <div
    x-show.transition.opacity.duration.500="open"
    @click="open = false"
    class="fixed inset-0 bg-black bg-opacity-25 "></div>
  <div class="z-20 fixed transition duration-300 right-0 top-0 transform w-full max-w-xs h-screen bg-gray-100 overflow-hidden dark:bg-mjtheme-light bg-mjtheme-dark translate-x-full"
    :class="{'translate-x-full': !open}">
    <button
      @click="open = false"
      x-ref="closeButton"
      :class="{'focus:outline-none': !usedKeyboard}"
      class="fixed top-0 right-0 mr-4 mt-2 z-50">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
      <div class="p-16 px-6 absolute top-0 h-full w-full overflow-y-scroll">
        <div class="relative flex flex-col">
        <input wire:model="searchTerm" type="text" placeholder="Search users..."/>
        <div wire:loading.flex wire:target="searchTerm">
          <span class="flex justify-center w-full dark:text-mjtheme-dark text-mjtheme-light">
          <svg class="animate-spin h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M341.54 197.85l-11.37-13.23a103.37 103.37 0 1022.71 105.84" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/>
            <path d="M367.32 162a8.44 8.44 0 00-6 2.54l-59.54 59.54a8.61 8.61 0 006.09 14.71h59.54a8.62 8.62 0 008.62-8.62v-59.56a8.61 8.61 0 00-8.68-8.63z"/>
          </svg>Searching...
        </span>
        </div>
          <ul wire:loading.remove>
                      <?php if (count($tableSearch)<=0): ?>
                        <li class="align-middle dark:bg-black bg-black duration-150  font-medium h-28 hover:scale-100 hover:shadow-2xl text-red-400 mx-auto my-1 p-2 rounded scale-95 text-center text-sm transform w-full">
                          <span class="flex justify-center"><svg class="h-10 w-10 text-red-500" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z"></path>
               <circle cx="12" cy="12" r="9"></circle>
               <line x1="9" y1="10" x2="9.01" y2="10"></line>
               <line x1="15" y1="10" x2="15.01" y2="10"></line>
               <path d="M9.5 16a10 10 0 0 1 6 -1.5"></path>
             </svg></span>
                          <span class="h-full left-0 py-4 rounded top-0 w-full" style="z-index:1">No Result!</span>
                        </li>
                            <?php else: ?>
                <?php foreach ($tableSearch as $searcht): ?>



                  <li class="align-middle bg-center bg-cover bg-no-repeat duration-150  font-medium h-28 hover:scale-100 hover:shadow-2xl text-mjtheme-light mx-auto my-1 p-2 rounded scale-95 text-center text-sm transform w-full" style="background-image:url('{{ $searcht->audio[0] }}')">
                    <a style="background-color:rgba(0,0,0,0.6)" class="absolute grid grid-cols-1 h-full left-0 py-4 rounded top-0 w-full" href="{{ url('blogpage/'.$searcht->id) }}">
                    <span style="z-index:1">{{ $searcht->title }}</span>
                    <span style="z-index:1">{{ $searcht->p_date }}</span>
                    <span style="z-index:1">{{ $searcht->category }}</span></a>
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>

          </ul>
        </div>

      </div>
      </div>
    </section>
<script type="text/javascript">
function slideout() {
return {
  open: false,
  usedKeyboard: false,
  init() {
    this.$watch('open', value => {
      value && this.$refs.closeButton.focus()
      this.toggleOverlay()
    })
    this.toggleOverlay()
  },
  toggleOverlay() {
    document.body.classList[this.open ? 'add' : 'remove']('h-screen', 'overflow-hidden')
  }
}
}

</script>
