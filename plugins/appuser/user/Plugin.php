<?php namespace AppUser\User;

use Backend;
use System\Classes\PluginBase;

/**
 * auth Plugin Information File
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
            'name'        => 'auth',
            'description' => 'No description provided yet...',
            'author'      => 'appAuth',
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
            'AppUser\User\Components\MyComponent' => 'myComponent',
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
            'appuser.user.some_permission' => [
                'tab' => 'user',
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
            'user' => [
                'label'       => 'user',
                'url'         => Backend::url('appuser/user/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['appuser.user.*'],
                'order'       => 500,
            ],
        ];
    }
}
