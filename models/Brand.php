<?php namespace Shohabbos\Catalog\Models;

use Model;

/**
 * Model
 */
class Brand extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_catalog_brands';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'logo' => 'System\Models\File'
    ];

    public $hasMany = [
        'products' => Product::class
    ];

    public function loadCategories() {
        $categories = $this->products()->lists('category_id');

        return Category::whereIn('id', $categories)->get();
    }

}
