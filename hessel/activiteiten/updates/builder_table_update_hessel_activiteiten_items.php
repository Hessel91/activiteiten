<?php namespace Hessel\Activiteiten\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselActiviteitenItems extends Migration
{
    public function up()
    {
        Schema::table('hessel_activiteiten_items', function($table)
        {
            $table->boolean('is_approved')->default(0);
            $table->string('link', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->dateTime('ipdated_at')->nullable();
            $table->integer('sort_order')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('afstand')->nullable();
            $table->smallInteger('tijd')->nullable();
            $table->text('intro')->nullable();
            $table->string('image', 255);
        });
    }
    
    public function down()
    {
        Schema::table('hessel_activiteiten_items', function($table)
        {
            $table->dropColumn('is_approved');
            $table->dropColumn('link');
            $table->dropColumn('created_at');
            $table->dropColumn('ipdated_at');
            $table->dropColumn('sort_order');
            $table->dropColumn('description');
            $table->dropColumn('afstand');
            $table->dropColumn('tijd');
            $table->dropColumn('intro');
            $table->dropColumn('image');
        });
    }
}
