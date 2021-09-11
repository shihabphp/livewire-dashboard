<?php

namespace Shihabphp\Dashboard\Http\Livewire;

use Livewire\Component;
use Shihabphp\Dashboard\Traits\DashboardTraits;

class BasicKPITileComponent extends Component
{
    use DashboardTraits;
    public $position;
    public $model;
    public $number;
    public $ranges;
    public $width;
    public $height;
    public $title;
    public $query='';
    public $updateMode;
    public $widgetId;

    public function mount($details)
    {
        $this->model =  $details['crud_model'];
        $this->groupbycolumn = $details['groupbycolumn'];
        $this->ranges = $details['ranges'];
        $this->title = $details['title'];
        $this->widgetId = $details['id'];
    
    }


public function builder()
{
    return $this->model::query();
}

    public function calculate()
    {
    
        $this->query = $this->builder();
        $this->query= $this->addDateRangeFilter($this->query);
        $this->query = $this->query->toBase()
        ->count();
       return $this->query;    
    }

    public function getResultsProperty()
    {
        return $this->calculate();
    }

  
    public function render()
    {
        return view('dashboard-kpi-tiles::basic');
    }
}