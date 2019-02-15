<?php namespace Shohabbos\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosCatalogBrands2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_catalog_brands', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_catalog_brands', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
