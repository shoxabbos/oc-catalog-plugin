<?php namespace Shohabbos\Catalog\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_catalog_products';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['properties'];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public $belongsTo = [
        'brand' => Brand::class,
        'category' => Category::class,
    ];

}
