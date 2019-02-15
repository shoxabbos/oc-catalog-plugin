<?php namespace Shohabbos\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosCatalogBrands extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_catalog_brands', function($table)
        {
            $table->string('website', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_catalog_brands', function($table)
        {
            $table->string('website', 255)->nullable(false)->change();
        });
    }
}
