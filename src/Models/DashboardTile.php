<?php

namespace Shihabphp\Dashboard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashboardTile extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $guarded = [];

    /**
     * Register the necessary event listeners.
     *
     * @return void
     */

    public static function boot()
    {
       parent::boot();
       static::creating(function($model)
       { 
           $model->created_by = auth()->id();
       });

       static::updating(function($model)
       {
           $model->updated_by = auth()->id();
       });
 
       
   } 
   

    
}





