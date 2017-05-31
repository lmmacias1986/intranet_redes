<?php namespace PlanetaDelEste\SignOut\Components;

use Auth;
use Cms\Classes\ComponentBase;
use PlanetaDelEste\SignOut\Models\Setting;

class SessionClose extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'planetadeleste.signout::lang.components.sessionclose.name',
            'description' => 'planetadeleste.signout::lang.components.sessionclose.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'load_js' => [
                'title'       => 'planetadeleste.signout::lang.components.sessionclose.load_js.title',
                'description' => 'planetadeleste.signout::lang.components.sessionclose.load_js.description',
                'default'     => 1,
                'type'        => 'checkbox',
            ]
        ];
    }

    public function onRun()
    {
        if (Auth::check()) {
            /** @var Setting|\System\Behaviors\SettingsModel $settings */
            $settings = Setting::instance();
            $this->page['settings'] = $settings->toJson();
            $this->addJs('assets/vendor/jquery-timeout/jquery.timeout.min.js');
            $this->addJs('assets/vendor/jquery-timer/jquery.timer.js');

            if($this->property('load_js')){
                $this->addCss('assets/vendor/sweetalert/sweetalert.css');
                $this->addJs('assets/vendor/sweetalert/sweetalert.min.js');
            }

            $this->addJs('assets/js/signout.js');
        }
    }

}