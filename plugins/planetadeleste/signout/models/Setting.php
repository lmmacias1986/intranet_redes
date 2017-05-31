<?php namespace PlanetaDelEste\SignOut\Models;

use Model;

/**
 * Setting Model
 *
 * @property int    timeout
 * @property bool   notify
 * @property int    notify_timeout
 * @property string message
 * @property string close_button
 * @property string ok_button
 */
class Setting extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'planetadeleste_signout_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

}
