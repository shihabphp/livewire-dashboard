<?php

namespace Shihabphp\Dashboard\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Shihabphp\Dashboard\Models\DashboardTile;
use Shihabphp\Dashboard\Traits\DashboardTraits;

class DashboardComponent extends Component
{
    use DashboardTraits;
    public $updatemode=false;
    protected $listeners = ['widgetAdded'];
    public $modalFormVisible = false;
    public $modalWidth  = '7xl';
    public $aggregate_function,$crud_model,$widget_type,$groupbycolumn,$title,$ranges,$position,$width,$height;
    public $groupingcolumns=[];

    public function getDashboardWidgetsProperty(){
       return  $this->widgetAdded();
    }
    protected $rules = [
        'widget_type' => 'required',
        'crud_model' => 'required',
        'groupbycolumn' => 'required',
        'title' => 'required',
        'width' => 'required',
        'height' => 'required'
        
    ];


    public function create(){
        $this->validate();
        DashboardTile::create([
            'widget_type' => $this->widget_type,
            'crud_model' => $this->crud_model,
            'groupbycolumn' => $this->groupbycolumn,
            'title' => $this->title,
            'ranges' => $this->ranges,
            'position'=>$this->position,
            'width'=>$this->width,
            'height'=>$this->height

        ]);
       $this->refreshPages();
    }
    public function update(){
        $details = DashboardTile::find($this->modelId)->update([
            'title' => $this->title,
            'position'=>$this->position,
            'width'=>$this->width,
            'height'=>$this->height

       ]);
       session()->flash('success', trans('dashboard::lang.record_updated_success'));
       $this->modalFormVisible = false;
       $this->refreshPages();
    }

    public function refreshpages(){
        $this->reset();
        $this->emitTo('DashboardComponent', 'widgetAdded');
        $this->dispatchBrowserEvent('refreshDashboardOrder');
        $this->dispatchBrowserEvent('refreshDashboard');
    }
   
public function widgetAdded(){
    return  DashboardTile::where('created_by','=',Auth::user()->id)->orderBy('position', 'ASC')->get();
}



    public function makeUpdateMode(){
        
        $this->refreshPages();
        
        $this->updatemode=true;
        $this->dispatchBrowserEvent('refreshDashboardOrder');
       
    }
    public function render()
    {
        return view('dashboard::dashboard');
    }
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }
    public function updatedCrudModel(){
        $this->groupingcolumns= $this->displaycolumns($this->crud_model);
    }
    public function closeCreateModal(){
        $this->modalFormVisible = false;
        $this->reset();
    }
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }
    public function delete()
    {
        $this->modalConfirmDeleteVisible = false;
        DashboardTile::whereKey($this->modelId)->delete();
        $this->dispatchBrowserEvent('refreshDashboardOrder');
        $this->emitTo('DashboardComponent', 'widgetAdded');
               $this->dispatchBrowserEvent('refreshDashboard');
        session()->flash('warning', trans('dashboard::lang.record_deleted_success'));
        
    }
    public function updateShowModal($id)
    {
       $this->reset();
        $this->modalFormVisible = true;
        $this->modalWidth  = '7xl';
        $this->modalFullFormVisible = true;
        $this->modelId = $id;
        $this->setFormProperties();
    }
    public function setFormProperties(){
        $data = DashboardTile::find($this->modelId);
        $this->crud_model  =   $data['crud_model'];
        $this->widget_type  =   $data['widget_type'];
        $this->groupbycolumn  =   $data['groupbycolumn'];
        $this->title  =   $data['title'];
        $this->ranges  =   $data['ranges'];
        $this->position  =   $data['position'];
        $this->width  =   $data['width'];
        $this->height  =   $data['height'];

    }
  
}
