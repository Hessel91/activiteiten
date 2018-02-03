<?php namespace Hessel\Activiteiten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselActiviteitenItems2 extends Migration
{
    public function up()
    {
        Schema::table('hessel_activiteiten_items', function($table)
        {
            $table->renameColumn('ipdated_at', 'updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('hessel_activiteiten_items', function($table)
        {
            $table->renameColumn('updated_at', 'ipdated_at');
        });
    }
}
