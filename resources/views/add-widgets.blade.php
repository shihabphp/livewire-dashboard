<div>
<x-dashboard::secondary-button wire:click="createShowModal" >
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4v16m8-8H4" />
</svg>  {{ucfirst(trans('dashboard::lang.add_dashboard_widgets'))}}
</x-dashboard::secondary-button>
<div class="text-left">      
<x-dashboard::dialog-modal wire:model="modalFormVisible" maxWidth="{{$this->modalWidth}}" >   >
    <x-slot name="title">
    @if($this->modelId)
    {{ucfirst(trans('dashboard::lang.update_dashboard_widgets'))}}
    @else
    {{ucfirst(trans('dashboard::lang.add_dashboard_widgets'))}}
     @endif
       
    </x-slot>

    <x-slot name="content">
        

  


    @if($modelId)
    @else
                <div class="mt-4">
     
      <h4 class="mb-2 text-base  font-bold font-heading" data-config-id="01_title">
      {{ucfirst(trans('dashboard::lang.step'))}} 1. {{ucfirst(trans('dashboard::lang.widget_type'))}}
      </h4>
    

<div class="flex flex-wrap -mx-8">
  <div class="w-full md:w-1/2 lg:w-1/5 py-2 px-0 mb-4 lg:mb-0 text-center align-bottom ">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-primary-lighter hover:text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
</svg>
<x-dashboard::label for="{{ucfirst(trans('dashboard::lang.line_chart'))}}" value="{{ucfirst(trans('dashboard::lang.line_chart'))}}" />

<input type="radio"  wire:model.lazy="widget_type"  value="line-chart"  required="required" @error('widget_type') class="border-red-600 bg-red-50" @enderror> 

  </div>
  <div class="w-full md:w-1/2 lg:w-1/5 py-2 px-0 mb-4 lg:mb-0 text-center align-bottom">
 
  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-primary-lighter hover:text-primary" viewBox="0 0 20 20" fill="currentColor">
  <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
</svg>
<x-dashboard::label for="{{ucfirst(trans('dashboard::lang.bar_chart'))}}" value="{{ucfirst(trans('dashboard::lang.bar_chart'))}}" />

<input type="radio" wire:model.lazy="widget_type" value="bar-chart"  required="required" @error('widget_type') class="border-red-600 bg-red-50" @enderror>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/5 py-2 px-0 mb-4 lg:mb-0 text-center align-bottom">


  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-primary-lighter hover:text-primary"
   viewBox="0 0 20 20" fill="currentColor">
  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
</svg>


<x-dashboard::label for="{{ucfirst(trans('dashboard::lang.pie_chart'))}}" value="{{ucfirst(trans('dashboard::lang.pie_chart'))}}" />

<input type="radio" wire:model.lazy="widget_type" value="pie-chart"  required="required" @error('widget_type') class="border-red-600 bg-red-50" @enderror>
  </div>
  <div class="w-full md:w-1/2 lg:w-1/5 py-2 px-0 mb-4 lg:mb-0 text-center align-bottom">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-primary-lighter hover:text-primary" 
  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.024 512.024" style="enable-background:new 0 0 512.024 512.024;" xml:space="preserve">

<rect y="35.964" style="fill:#E04F5F;" width="512.024" height="349.52"/>
<g>
	<path style="fill:#FFFFFF;" d="M107.116,295.452v-4.695c5.74-0.319,11.089-3.005,14.78-7.414   c6.704-10.945,12.364-22.496,16.908-34.502l53.179-125.276h5.014l63.606,144.719c2.36,6.457,5.795,12.468,10.156,17.785   c3.723,2.734,8.147,4.345,12.755,4.648v4.735h-64.858v-4.695c4.895-0.183,9.741-0.988,14.429-2.392   c2.16-0.949,3.244-3.292,3.237-7.015c-0.175-2.232-0.59-4.432-1.244-6.569c-0.909-3.388-2.081-6.704-3.484-9.925l-10.22-24.553   h-67.281c-6.64,16.629-10.602,26.801-11.886,30.524c-1.1,2.806-1.754,5.764-1.929,8.769c-0.303,3.779,1.786,7.35,5.229,8.936   c3.93,1.347,8.035,2.097,12.189,2.232v4.735L107.116,295.452z M217.062,229.885l-29.256-70.303l-29.392,70.311L217.062,229.885z"/>
	<path style="fill:#FFFFFF;" d="M315.146,240.487c14.588-8.163,29.902-14.971,45.742-20.32v-10.594   c0.399-6.011-0.446-12.037-2.487-17.705c-3.683-6.027-10.578-9.311-17.578-8.354c-4.249,0-8.418,1.124-12.093,3.244   c-3.508,1.73-5.732,5.301-5.74,9.215c0.08,1.698,0.287,3.388,0.622,5.054c0.303,1.499,0.518,3.013,0.622,4.544   c0.399,3.85-1.379,7.597-4.608,9.726c-1.889,1.108-4.05,1.658-6.234,1.594c-3.284,0.199-6.465-1.164-8.594-3.675   c-1.937-2.28-2.997-5.174-2.997-8.163c0.837-7.334,4.759-13.966,10.786-18.231c9-6.959,20.248-10.363,31.6-9.566   c16.127,0,27.056,5.237,32.788,15.704c3.5,7.868,5.078,16.462,4.608,25.063v49.983c-0.175,3.364,0.167,6.736,0.996,9.997   c0.781,3.029,3.611,5.07,6.736,4.863c1.626,0.056,3.236-0.239,4.735-0.869c2.272-1.236,4.44-2.655,6.481-4.241v6.481   c-2.471,3.061-5.365,5.74-8.601,7.972c-4.145,2.989-9.096,4.64-14.206,4.735c-4.767,0.407-9.407-1.658-12.284-5.477   c-2.607-3.882-4.05-8.426-4.169-13.098c-5.038,4.536-10.459,8.625-16.207,12.221c-6.449,4.145-13.903,6.473-21.564,6.728   c-6.951,0.08-13.64-2.639-18.566-7.541c-5.214-4.974-8.075-11.926-7.852-19.132C297.353,258.105,304.217,246.641,315.146,240.487z    M360.888,226.393c-8.267,2.583-16.214,6.09-23.684,10.467c-11.966,7.406-17.944,15.8-17.952,25.183   c-0.502,6.473,2.312,12.763,7.477,16.701c3.149,2.296,6.943,3.524,10.842,3.492c5.588-0.032,11.049-1.626,15.768-4.616   c4.48-2.216,7.382-6.72,7.541-11.718L360.888,226.393z"/>
</g>

</svg>
<x-dashboard::label for="{{ucfirst(trans('dashboard::lang.number_block'))}}" value="{{ucfirst(trans('dashboard::lang.number_block'))}}" />

<input type="radio" wire:model.lazy="widget_type" value="number_block"  required="required" @error('widget_type') class="border-red-600 bg-red-50" @enderror>


  </div>
  <div class="w-full md:w-1/2 lg:w-1/5 py-2 px-0 mb-4 lg:mb-0 text-center align-bottom">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-primary-lighter hover:text-primary" 
  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M492,236H144.262c-11.046,0-20,8.954-20,20s8.954,20,20,20H492c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z
			"/>
	</g>
</g>
<g>
	<g>
		<path d="M492,86H144.262c-11.046,0-20,8.954-20,20s8.954,20,20,20H492c11.046,0,20-8.954,20-20S503.046,86,492,86z"/>
	</g>
</g>
<g>
	<g>
		<path d="M492,386H144.262c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20H492c11.046,0,20-8.954,20-20
			C512,394.954,503.046,386,492,386z"/>
	</g>
</g>
<g>
	<g>
		<circle cx="27" cy="106" r="27"/>
	</g>
</g>
<g>
	<g>
		<circle cx="27" cy="256" r="27"/>
	</g>
</g>
<g>
	<g>
		<circle cx="27" cy="406" r="27"/>
	</g>
</g>

</svg>
<x-dashboard::label for="{{ucfirst(trans('dashboard::lang.latest_entries'))}}" value="{{ucfirst(trans('dashboard::lang.latest_entries'))}}" />

<input type="radio" wire:model.lazy="widget_type" value="basic-kpi"  required="required"  @error('widget_type') class="border-red-600 bg-red-50" @enderror>
  </div>
</div>


@error('widget_type')<span class="text-xs text-red-700">{{ $message }}</span>@enderror    
     
  </div>



  <div class="mt-4">
     
     <h4 class="mb-2 text-base  font-bold font-heading" data-config-id="01_title">
     {{ucfirst(trans('dashboard::lang.step'))}} 2. {{ucfirst(trans('dashboard::lang.data_source'))}}
     </h4>

     <div class="px-4 pb-4 grid md:grid-cols-4">
          
          <div class="mt-4 pr-4" wire:key="quickinsert0">
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="crud_model">
     {{ucfirst(trans('dashboard::lang.crud'))}}
</label>
                        <div x-data="" class="flex flex-col">
<div class="flex">

 <select x-ref="select" class="
 @error('crud_model') border-red-600 bg-red-50 @enderror
 block h-9 mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0  dark:bg-dark dark:border-transparent dark:text-primary block mt-1 w-full
     " wire:model.lazy="crud_model">
     <option value="" selected="selected" disabled="disabled">
     {{ucfirst(trans('dashboard::lang.select_crud'))}}
     </option>
                    
     @foreach($this->displaymodels() as $model)
     
     <option value="{{$model}}"><?php echo  basename($model);?></option>
     @endforeach
                           
                         </select>
                       
</div>
@error('crud_model')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
</div>
      
    
 </div>
     
          <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="aggregate_function">
     {{ucfirst(trans('dashboard::lang.aggregating_function'))}}
</label>
                        <div x-data="" class="flex flex-col">
                        <select x-ref="select"
                         class="@error('aggregate_function') border-red-600 bg-red-50 @enderror
                         block h-9 mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0  dark:bg-dark dark:border-transparent dark:text-primary block mt-1 w-full
     " wire:model.lazy="aggregate_function">
   
     <option value="count">count()</option>
                                    
                         </select>
</div>
@error('aggregate_function')<span class="text-xs text-red-700">{{ $message }}</span>@enderror


      
    
 </div>
     
 <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="groupbycolumn">
     {{ucfirst(trans('dashboard::lang.group_by_column'))}}
</label>
                        <div x-data="" class="flex flex-col">
                        <select x-ref="select" 
                        class="@error('groupbycolumn') border-red-600 bg-red-50 @enderror
                       h-9 block mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0  dark:bg-dark dark:border-transparent dark:text-primary block mt-1 w-full
     " wire:model.lazy="groupbycolumn">
     <option value="" selected="selected" disabled="disabled">
     {{ucfirst(trans('dashboard::lang.select_group_by_column'))}}
     </option>
     
     @foreach($this->groupingcolumns as $key=>$column)
     
     <option value="{{$key}}">{{$column}}</option>
     @endforeach

     

    </select>
                      
</div>
@error('groupbycolumn')<span class="text-xs text-red-700">{{ $message }}</span>@enderror


      
    
 </div>
 <div class="mt-4 pr-4" wire:key="quickinsert1">
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="ranges">
     
     {{ucfirst(trans('dashboard::lang.show_filtered_data'))}}
</label>
                        <div x-data="" class="flex flex-col">
                        <select x-ref="select"
                        class="@error('ranges') border-red-600 bg-red-50 @enderror 
                        h-9 block mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0    dark:bg-dark dark:border-transparent dark:text-primary 
      
     " wire:model.lazy="ranges">
     <option value="">
     {{ucfirst(trans('dashboard::lang.no_filter'))}}
     </option> 
   
     @foreach($this->allRanges() as $range=>$key)
     
     <option value="{{$range}}">{{$range}}</option>
     @endforeach
      
     
    
    </select>
</div>
  
 </div>
 
     </div>
    
 </div>

@endif
 <div class="mt-4">
     
     <h4 class="mb-2 text-base  font-bold font-heading" data-config-id="01_title">
     {{ucfirst(trans('dashboard::lang.step'))}} 3. {{ucfirst(trans('dashboard::lang.visual_style'))}}
     </h4>

     <div class="px-4 pb-4 grid md:grid-cols-4">
          <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="title">
     {{ucfirst(trans('dashboard::lang.widget_title'))}}
</label>
                        <div x-data="" class="flex flex-col">
<div class="flex">
<input placeholder="{{ucfirst(trans('dashboard::lang.widget_title'))}}" x-ref="input" type="text"
 class="@error('title') border-red-600 bg-red-50 @enderror block mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0    dark:bg-dark dark:border-transparent dark:text-primary 
        " wire:model.lazy="title">
</div>
@error('title')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
</div>
 </div>
 <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="position">
     {{ucfirst(trans('dashboard::lang.widget_position'))}}
</label>
                        <div x-data="" class="flex flex-col">
<div class="flex">
<input placeholder="{{ucfirst(trans('dashboard::lang.widget_position'))}}" x-ref="input"   type="number"
 class="@error('position') border-red-600 bg-red-50 @enderror block mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0    dark:bg-dark dark:border-transparent dark:text-primary 
        " wire:model.lazy="position">
</div>
@error('position')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
</div>
 </div>
 <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="width">
     {{ucfirst(trans('dashboard::lang.widget_width'))}}
</label>
                        <div x-data="" class="flex flex-col">
<div class="flex">
<select x-ref="select"
                         class="@error('width') border-red-600 bg-red-50 @enderror
                         block mt-1 h-9 w-full shadow-sm border-gray-300 text-sm  focus:ring-0  dark:bg-dark dark:border-transparent dark:text-primary block mt-1 w-full
     " wire:model.lazy="width">
     <option value="" selected="selected" disabled="disabled">
     {{ucfirst(trans('dashboard::lang.select_widget_width'))}}
     </option>
     @for ($i = 1; $i <= 12; $i++) 
     <option value="{{$i}}">{{$i}}</option>
    @endfor
      </select>
</div>
@error('width')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
</div>
 </div>
 <div class="mt-4 pr-4" >
     <label class="block font-medium text-sm text-gray-700 dark:text-primary-light" for="height">
     {{ucfirst(trans('dashboard::lang.widget_height'))}}
</label>
                        <div x-data="" class="flex flex-col">
<div class="flex">
<select x-ref="select"
                         class="@error('height') border-red-600 bg-red-50 @enderror
                         block h-9 mt-1 w-full shadow-sm border-gray-300 text-sm  focus:ring-0  dark:bg-dark dark:border-transparent dark:text-primary block mt-1 w-full
     " wire:model.lazy="height">
     <option value="" selected="selected" disabled="disabled">
     {{ucfirst(trans('dashboard::lang.select_widget_height'))}}
     </option>
     @for ($i = 1; $i <= 12; $i++) 
     <option value="{{$i}}">{{$i}}</option>
    @endfor
      </select>
</div>
@error('height')<span class="text-xs text-red-700">{{ $message }}</span>@enderror
</div>
 </div>
     </div>
    
     
 </div>

    </x-slot>

    <x-slot name="footer">
        <x-dashboard::secondary-button wire:click="refreshpages" >
        {{ucfirst(trans('dashboard::lang.nevermind'))}}
        </x-dashboard::secondary-button>
        @if ($modelId)
        <x-dashboard::button class="ml-2" wire:click="update" wire:loading.attr="disabled">
        {{ucfirst(trans('dashboard::lang.update'))}}
            </x-dashboard::button>
        @else

        <x-dashboard::button class="ml-2"  wire:click="create" >
        {{ucfirst(trans('dashboard::lang.create'))}}
        </x-dashboard::button>
      @endif
    </x-slot>
</x-dashboard::dialog-modal>
</div></div>