<?php namespace Amsoft\Tutorial;

use Backend;
use System\Classes\PluginBase;

/**
 * Tutorial Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Tutorial',
            'description' => 'No description provided yet...',
            'author'      => 'Amsoft',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Amsoft\Tutorial\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'amsoft.tutorial.some_permission' => [
                'tab' => 'Tutorial',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'tutorial' => [
                'label'       => 'Tutorial',
                'url'         => Backend::url('amsoft/tutorial/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['amsoft.tutorial.*'],
                'order'       => 500,
            ],
        ];
    }
}
