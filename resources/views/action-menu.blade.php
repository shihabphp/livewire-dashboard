
@if($updatemode)  

<div x-data="{ 'istilemenuOpen': false }" class="inline absolute top-0 right-4 z-20 text-xs font-medium">
               
<button
              type="button"
              title="Open the actions menu"
              class="font-mono text-2xl px-2"
              @click="istilemenuOpen = true"
              :class="{ 'bg-gray-100': istilemenuOpen }"
            >
              &ctdot;
            </button>

            <ul
                x-show="istilemenuOpen"
                x-cloak
                @click.away="istilemenuOpen = false"
                class="relative border bg-white dark:bg-darker shadow-md text-left -mt-8 right-0  "
            >
<li>
<button  class="p-2 hover:bg-gray-100 block w-full text-left" 
 wire:click="updateShowModal({{ $widget->id }})">
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
</svg>  {{__('dashboard::lang.edit')}}</a>
</button>
</li>
<li>
<button  class="p-2 hover:bg-gray-100 block w-full text-left" 
wire:click="deleteShowModal({{ $widget->id }})">

<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg>  {{__('dashboard::lang.delete')}}</a>
</button>
</li>     
            </ul>

</div>
@endif
