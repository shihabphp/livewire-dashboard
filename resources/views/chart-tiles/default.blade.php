
@php
    
    $chartId = "chart_$widgetId";
    $title=  $this->title;
    $labelsData= [];
    $seriesData = [];
    foreach($this->results as $label=>$value){
        $labelsData[] = $label;
        $seriesData[] = $value;
    }
    $labels =" ' " . join("','", array_values( $labelsData) ) . " ' ";
    $series = implode(", ", $seriesData);

@endphp
@push('scripts')
<script type="text/javascript">
function chart<?php echo $chartId;?>() {
    Highcharts.chart('<?php echo $chartId;?>', {
    
    title: {
    text: '<?php echo $title;?>'
},

chart: {
    type: '<?php echo $type;?>'
},

xAxis: {
categories: [<?php echo $labels;?>]
},


series: [{
    name: '<?php echo ucfirst($this->seriesname);?>',
    data: [<?php echo $series;?>]
}],
});   
}
chart<?php echo $chartId;?>();
window.addEventListener('refreshDashboard', event => {
chart<?php echo $chartId;?>(); 
});
</script>
@endpush