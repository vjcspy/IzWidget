<?php namespace Modules\IzWidget\Widgets;

use Modules\IzCore\Repositories\IzMenu;
use Teepluss\Theme\Theme;
use Teepluss\Theme\Widget;

class IzAdminNavigation extends Widget {

    /**
     * Widget template.
     *
     * @var string
     */
    public $template = 'izadminnavigation';

    /**
     * Watching widget tpl on everywhere.
     *
     * @var boolean
     */
    public $watch = false;

    /**
     * Arrtibutes pass from a widget.
     *
     * @var array
     */
    public $attributes
        = [
            'userId' => 9999,
            'label'  => 'Generated Widget',
        ];

    /**
     * Turn on/off widget.
     *
     * @var boolean
     */
    public $enable = true;

    /**
     * Code to start this widget.
     *
     * @param \Teepluss\Theme\Theme $theme
     */
    public function init(Theme $theme) {
        // Initialize widget.

        //$theme->asset()->usePath()->add('widget-name', 'js/widget-execute.js', array('jquery', 'jqueryui'));
        //$this->setAttribute('user', User::find($this->getAttribute('userId')));
    }

    /**
     * Logic given to a widget and pass to widget's view.
     *
     * @return array
     */
    public function run() {
        $attrs = [];

        /** @var IzMenu $izMenu */
        $izMenu = app()['izMenu'];

        $attrs['izAdminMenu'] = ($izMenu->getMenu('izAdminNav'));

        return $attrs;
    }

}