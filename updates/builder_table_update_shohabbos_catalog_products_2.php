<?php namespace Shohabbos\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosCatalogProducts2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_catalog_products', function($table)
        {
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_catalog_products', function($table)
        {
            $table->dropColumn('category_id');
            $table->dropColumn('brand_id');
        });
    }
}
