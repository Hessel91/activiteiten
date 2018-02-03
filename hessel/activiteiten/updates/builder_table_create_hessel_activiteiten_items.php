<?php namespace Hessel\Activiteiten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHesselActiviteitenItems extends Migration
{
    public function up()
    {
        Schema::create('hessel_activiteiten_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id')->nullable();
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hessel_activiteiten_items');
    }
}
