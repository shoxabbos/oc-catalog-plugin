<?php namespace Shohabbos\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosCatalogSlides extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_catalog_slides', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('url', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_catalog_slides');
    }
}
