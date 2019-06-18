<?php namespace Amsoft\Tutorial\Models;

use Model;

/**
 * Item Model
 */
class Item extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'amsoft_tutorial_items';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */

    public $belongsTo = [
        'category' => ['Amsoft\Tutorial\Models\Category']
    ];

}
