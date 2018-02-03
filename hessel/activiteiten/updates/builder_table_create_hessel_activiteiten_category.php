<?php namespace Hessel\Activiteiten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHesselActiviteitenCategory extends Migration
{
    public function up()
    {
        Schema::create('hessel_activiteiten_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->string('lang', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hessel_activiteiten_category');
    }
}
