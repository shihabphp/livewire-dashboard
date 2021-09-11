@php 
    $chartId = "chart_$widgetId";

@endphp

 <div id="{{$chartId}}" style="width:100%; height:100%"></div>


@once
    @push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    @endpush
@endonce
@if($type=='pie')
    @include('dashboard-chart-tiles::pie')
@else
@include('dashboard-chart-tiles::default')
@endif





