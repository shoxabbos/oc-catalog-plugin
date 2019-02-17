<?php namespace Shohabbos\Catalog\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    const SORT_ORDER = 'sort';
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_catalog_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'products' => Product::class
    ];

}
