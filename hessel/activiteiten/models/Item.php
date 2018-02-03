<?php namespace Hessel\Activiteiten\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'hessel_activiteiten_items';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    
    public $translatable = ['title', 'intro', 'description', 'link'];

    public $rules = [
        'category_id' => 'integer|required',
        'answer' => ''
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['text', 'answer'];

    /**
     * @var array Relations
     */
     public $belongsTo = [
        'category' => 'Hessel\Activiteiten\Models\Category'
    ];
}


