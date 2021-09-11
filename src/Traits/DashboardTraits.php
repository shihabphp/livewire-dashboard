<?php

namespace Shihabphp\Dashboard\Traits;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Shihabphp\Dashboard\Models\DashboardTile;

trait DashboardTraits
{
   public $modelId;
   public $modalConfirmDeleteVisible = false;
    public function displaymodels(): array
    {
        $composer = json_decode(file_get_contents(base_path('composer.json')), true);
        $models = [];
        foreach ((array)data_get($composer, 'autoload.psr-4') as $namespace => $path) {
            $models = array_merge(collect(File::allFiles(base_path($path)))
                ->map(function ($item) use ($namespace) {
                    $path = $item->getRelativePathName();
                    return sprintf('\%s%s',
                        $namespace,
                        strtr(substr($path, 0, strrpos($path, '.')), '/', '\\'));
                })
                ->filter(function ($class) {
                    $valid = false;
                    if (class_exists($class)) {
                        $reflection = new \ReflectionClass($class);
                        $valid = $reflection->isSubclassOf(Model::class) &&
                            !$reflection->isAbstract();
                    }
                    return $valid;
                })
                ->values()
                ->toArray(), $models);
        }
        return $models;
    }
    public function displaycolumns($modelname){
      $table= $modelname::getModel()->getTable(); 
      $primaryKey = App::make($modelname)->getKeyName();
       $cols=  Schema::getColumnListing($table);
       $colsWithFields = [];
       foreach ($cols as $key => $column) {
           $columntype= Schema::getColumnType($table,$column);
           if(!in_array($column, array($primaryKey,'deleted_by','deleted_at','restored_by'))){
               $columnlabel =   ucfirst(str_replace('_', ' ', $column));
            if( $columntype== 'datetime'){
                $colsWithFields[$column.'|DAY'] = 'DAY('.$columnlabel.')';
                $colsWithFields[$column.'|DATE'] = 'DATE('.$columnlabel.')';
                $colsWithFields[$column.'|MONTH'] = 'MONTH('.$columnlabel.')';
                $colsWithFields[$column.'|YEAR'] = 'YEAR('.$columnlabel.')';
                
            }else if( $columntype== 'text') {}

            else{
                $colsWithFields[$column] = $columnlabel;
            }
        }

          

    }
  
    return $colsWithFields;
       
    }
    public function addDateRangeFilter($query){
   
        switch($this->AvailableRanges){
            case 'TODAY':
                $query->whereDate('created_at', Carbon::today());
                break;
            case 'WEEK':
                $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                break; 
            case 'MONTH':
                $query->whereMonth('created_at', date('m'))
                        ->whereYear('created_at', date('Y'));
                break;
            case 'YEAR':
                $query->whereYear('created_at', date('Y'));
                break;
        }
    
        return $query;
    }
    
public function addSelectFilters($query){
    $groupbycolumn=  $this->groupbycolumn;
    $groupbycolumnArr = explode("|",$groupbycolumn);
if(count($groupbycolumnArr)>1){
    switch($groupbycolumnArr[1]){
        case 'DAY':
            $query->selectRaw('(COUNT(*)) as count, DAYNAME('.$groupbycolumnArr[0].') as label');
            break;
        case 'DATE':
                $query->selectRaw('(COUNT(*)) as count, DATE_FORMAT('.$groupbycolumnArr[0].',"%d/%m/%Y") as label');
                break;
            
        case 'YEAR':
            $query->selectRaw('(COUNT(*)) as count, YEAR('.$groupbycolumnArr[0].') as label');
            break;
        case 'MONTH':
            $query->selectRaw('(COUNT(*)) as count, MONTHNAME('.$groupbycolumnArr[0].') as label');
            break;
        default:
        $query->selectRaw('(COUNT(*)) as count, ('.$groupbycolumnArr[0].') as label');
        break;
        }
    }
    else{
        $query->selectRaw('(COUNT(*)) as count, '.$groupbycolumn.' as label');
    }
      
    return $query;
}

     /**
     * Get the ranges available.
     *
     * @return array
     */
    public function getAvailableRangesProperty()
    {
        return $this->allRanges()[$this->ranges ?? 'all'];
        
    }
    public function allRanges(){
        return $ranges = [
            'Today' => 'TODAY',
            'This Week' => 'WEEK',
            'This Month' => 'MONTH',
            'This Year' => 'YEAR',
            'all' => ''
        ];
    }
    public function reorder($orderIds){
    
       foreach($orderIds as $key=>$val){
         DashboardTile::where("id", $val)->update(["position" => $key]);
         session()->flash('success', trans('dashboard::lang.record_reorder_success'));
       }
      $this->dispatchBrowserEvent('refreshDashboardOrder');
 $this->emitTo('DashboardComponent', 'widgetAdded');
        $this->dispatchBrowserEvent('refreshDashboard');
      return false;
            }
  
   
  
}