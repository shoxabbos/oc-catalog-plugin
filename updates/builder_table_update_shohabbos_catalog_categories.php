<?php namespace Shohabbos\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosCatalogCategories extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_catalog_categories', function($table)
        {
            $table->integer('sort')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_catalog_categories', function($table)
        {
            $table->dropColumn('sort');
        });
    }
}
