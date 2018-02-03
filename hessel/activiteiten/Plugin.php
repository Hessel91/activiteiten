<?php namespace Hessel\Activiteiten;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
         return [
            'Hessel\Activiteiten\Components\Activiteit' => 'activiteit',
        ];
    }

 
    public function registerSettings()
    {
    }
}
