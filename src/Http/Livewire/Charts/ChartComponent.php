<?php

namespace Shihabphp\Dashboard\Http\Livewire\Charts;

use Livewire\Component;

use Illuminate\Support\Str;
use Shihabphp\Dashboard\Traits\DashboardTraits;
class ChartComponent extends Component
{
   use DashboardTraits;
   
    public $modelname;
    public $ranges;
    public $title;
    public $query='';
    public $type;
    public $groupbycolumn;
    public $seriesname = '';
    public $widgetId;

    public function mount($details)
    {
      

        
        $this->modelname =  $details['crud_model'];
        $this->groupbycolumn = $details['groupbycolumn'];
        $this->ranges = $details['ranges'];
        $this->title = $details['title'];
        $this->widgetId = $details['id'];
        $this->seriesname = Str::plural(strtolower(basename($this->modelname)));
       


    }


  /**
     * Calculate the value of the metric.
     *
     */


public function builder()
{
    return $this->modelname::query();
}

    public function getResultsProperty()
    {
        $this->query = $this->builder();
        $this->query= $this->addDateRangeFilter($this->query);
        $this->query= $this->addSelectFilters($this->query);
                          
       
        $this->query = $this->query
        -> orderBy('label', 'asc')
        ->groupBy('label')
        ->pluck('count','label')->all();
       
       return $results =  $this->query; 
    }

    
 
    public function render()
    {
      //  $this->calculate(); 
    
   
  
    return view('dashboard-chart-tiles::tile', [
        'widgetId' => $this->widgetId
    ]);

  



      
    }
}  