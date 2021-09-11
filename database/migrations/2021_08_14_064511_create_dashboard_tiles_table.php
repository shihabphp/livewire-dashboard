<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardTilesTable extends Migration
{
    public function up()
    {
        Schema::create('dashboard_tiles', function (Blueprint $table) {
            $table->id();
            $table->string('widget_type')->nullable();
            $table->string('crud_model')->nullable();
            $table->string('groupbycolumn')->nullable();
            $table->string('title')->nullable();
            $table->string('ranges')->nullable();
            $table->integer('position')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->foreignId('created_by') ->nullable()->constrained('users');
            $table->foreignId('updated_by') ->nullable()->constrained('users');
            $table->foreignId('deleted_by') ->nullable()->constrained('users');
            $table->foreignId('restored_by') ->nullable()->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}