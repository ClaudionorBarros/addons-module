<?php namespace Anomaly\AddonsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class AddonsModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AddonsModule
 */
class AddonsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\AddonsModule\AddonsModulePlugin'
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/addons'                         => 'Anomaly\AddonsModule\Http\Controller\Admin\ModulesController@index',
        'admin/addons/modules'                 => 'Anomaly\AddonsModule\Http\Controller\Admin\ModulesController@index',
        'admin/addons/themes'                  => 'Anomaly\AddonsModule\Http\Controller\Admin\ThemesController@index',
        'admin/addons/themes/activate/{theme}' => 'Anomaly\AddonsModule\Http\Controller\Admin\ThemesController@activate',
        'admin/addons/plugins'                 => 'Anomaly\AddonsModule\Http\Controller\Admin\PluginsController@index',
        'admin/addons/extensions'              => 'Anomaly\AddonsModule\Http\Controller\Admin\ExtensionsController@index',
        'admin/addons/field_types'             => 'Anomaly\AddonsModule\Http\Controller\Admin\FieldTypesController@index'
    ];

}
