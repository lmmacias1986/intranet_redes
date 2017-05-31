<?php namespace PlanetaDelEste\SignOut;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * SignOut Plugin Information File
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
            'name'        => 'planetadeleste.signout::lang.plugin.name',
            'description' => 'planetadeleste.signout::lang.plugin.description',
            'author'      => 'PlanetaDelEste',
            'icon'        => 'icon-power-off'
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
        return [
            'PlanetaDelEste\SignOut\Components\SessionClose' => 'SessionClose',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'planetadeleste.signout.access' => [
                'tab' => 'planetadeleste.signout::lang.plugin.name',
                'label' => 'planetadeleste.signout::lang.permissions.access'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'planetadeleste.signout::lang.plugin.name',
                'description' => 'planetadeleste.signout::lang.plugin.description',
                'category'    => SettingsManager::CATEGORY_USERS,
                'icon'        => 'icon-power-off',
                'class'       => '\PlanetaDelEste\SignOut\Models\Setting',
                'order'       => 500,
                'keywords'    => 'frontend user signout logout session timeout',
                'permissions' => ['planetadeleste.signout.access']
            ]
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
    }

}
