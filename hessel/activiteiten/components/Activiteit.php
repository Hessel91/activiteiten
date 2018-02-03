<?php namespace Hessel\Activiteiten\Components;

use Cms\Classes\ComponentBase;
use Hessel\Activiteiten\Models\Items;
use Hessel\Activiteiten\Models\Category;

class Activiteit extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Activiteit Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
             'categoryId' => [
             'title'             => 'Category id',
             'description'       => 'List all questions from given category',
             'default'           => 1,
             'type'              => 'string',
             'validationPattern' => '^[0-9]+$',
             'validationMessage' => 'The Category id property can contain only numeric symbols'
            ],
            'sortOrder' => [
             'title'             => 'Sort Order',
             'description'       => 'Choose sort ordering method. Default newest questions first',
             'default'           => 'desc',
             'type'              => 'dropdown',
             'placeholder'       => 'Select sort order',
             'options'           => ['desc'=>'Newest first', 'asc'=>'Oldest first', 'order'=>'User order']
            ]
        ];
    }

   
}
