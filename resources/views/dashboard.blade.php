<div class="bg-gray-100">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="py-3 pr-3 pt-0">
<section class="bg-transparent">
 
   
   
    <div class="flex items-center justify-end py-3 pb-1 text-right w-full lg:w-auto ml-auto px-3">



    <x-dashboard::secondary-button class="border-r-0" 
wire:click="makeUpdateMode" >
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
</svg>
{{ucfirst(trans('dashboard::lang.reorder_dashboard_widgets'))}}
</x-dashboard::secondary-button>

@include('dashboard::add-widgets')
@include('dashboard::delete-widget')



   
  </div>
</section>





<div>
<ul drag-root
    class="flex flex-wrap md:flex-wrap px-3 py-2 pr-0 -mr-4 text-default overflow-auto grid-stack" >
    @foreach($this->DashboardWidgets as $widget)
   
    <li drag-item="{{$widget->id}}" @if($updatemode) draggable="true" @else draggable="false" @endif id="drag_{{$widget->id}}"
style="min-height: 8.3333vw;min-width: 8.3333333333%;
@if($widget->height) height:{{(($widget->height)*8.3333)}}vw;  @endif
@if($widget->width) width:{{(($widget->width)*8.3333333333)}}%;  @endif"
class=" overflow-hidden relative bg-tile   m-0  mb-4"
gs-w="{{$widget->width}}" gs-h="{{$widget->height}}">
<div class=" bg-white dark:bg-grey-800 p-4 mb-4 block h-full mr-4 
@if($updatemode)   rounded rounded-md flex   @endif"
@if($updatemode) style=" cursor:move; box-shadow: 0 1px 10px 0 rgb(0 0 0 / 20%); " @endif>
@include('dashboard::action-menu')


 
@if($widget->widget_type == 'line-chart')
    
    <livewire:line-chart-tile
      :details=$widget
      :key="time().$widget->id"/>
                               
                             
    @elseif($widget->widget_type == 'bar-chart')
    <livewire:bar-chart-tile
   
      :details=$widget :key="time().$widget->id"/>
   
    @elseif($widget->widget_type == 'column-chart')
    <livewire:column-chart-tile
   
      :details=$widget :key="time().$widget->id"/> 
    @elseif($widget->widget_type == 'pie-chart')
    <livewire:pie-chart-tile
   
      :details=$widget :key="time().$widget->id"/> 
   
      @elseif($widget->widget_type == 'basic-kpi')
      <livewire:basic-kpi-tile
     
      :details=$widget :key="time().$widget->id"/> 
@endif


</div>

</li>

    @endforeach
</ul>
     




</div>

</div>
@include('dashboard::action-menu')
<script>


  function refreshDashboardOrderFn(){
  let root=document.querySelector('[drag-root]')
  root.querySelectorAll('[drag-item]').forEach(el => {

    el.addEventListener('dragstart', e=> {
            e.target.setAttribute('dragging',true)
    })

     el.addEventListener('drop', e=> {
      e.target.classList.remove('bg-yellow-100')

      let draggingEl=root.querySelector('[dragging]')

      e.target.before(draggingEl)

      let component=Livewire.find(
        e.target.closest('[wire\\:id]').getAttribute('wire:id')
      )
      let orderIds = Array.from(root.querySelectorAll('[drag-item]'))
          .map(itemEl=>itemEl.getAttribute('drag-item'))
      component.call('reorder',orderIds)
    
    })

    el.addEventListener('dragenter', e=> {
        e.target.classList.add('bg-yellow-100')

        e.preventDefault()
    })

    el.addEventListener('dragover', e=> {
          e.preventDefault()
    })
    el.addEventListener('dragleave', e=> {
      e.target.classList.remove('bg-yellow-100')
    })
    el.addEventListener('dragend', e=> {
     e.target.removeAttribute('dragging')
    })

  


  })
}

refreshDashboardOrderFn();
window.addEventListener('refreshDashboardOrder', event => {
  refreshDashboardOrderFn(); 
});

  </script>




@stack('scripts')

</div>

