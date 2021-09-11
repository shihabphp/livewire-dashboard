@php
    $title=  $this->title;
    $pieDataArr = [];
    foreach($this->results as $label=>$value){
        $pieDataArr[] =  " {
      name: '$label',
      y: $value
    }";  
    }
   $series =join(",", array_values( $pieDataArr) );
@endphp

@push('scripts')
<script>
 function chart<?php echo $chartId;?>() {
  Highcharts.chart('<?php echo $chartId;?>', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: '<?php echo $type;?>'
  },
  title: {
    text: '<?php echo $title;?>'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: '<?php echo ucfirst($this->seriesname);?>',
    data: [<?php echo $series;?>
  ]
  }]
}); 
  }
  chart<?php echo $chartId;?>();
window.addEventListener('refreshDashboard', event => {
chart<?php echo $chartId;?>(); 
});





  

</script>

@endpush



