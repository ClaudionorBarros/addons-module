<?php namespace Anomaly\AddonsModule;

use Anomaly\AddonsModule\Composer\ComposerAuthorizer;
use Anomaly\AddonsModule\Console\Download;
use Anomaly\AddonsModule\Repository\Contract\RepositoryRepositoryInterface;
use Anomaly\AddonsModule\Repository\RepositoryRepository;
use Anomaly\Streams\Platform\Model\Addons\AddonsRepositoriesEntryModel;
use Anomaly\AddonsModule\Repository\RepositoryModel;
use Anomaly\AddonsModule\Addon\Contract\AddonRepositoryInterface;
use Anomaly\AddonsModule\Addon\AddonRepository;
use Anomaly\Streams\Platform\Model\Addons\AddonsAddonsEntryModel;
use Anomaly\AddonsModule\Addon\AddonModel;
use Anomaly\AddonsModule\Console\Sync;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class AddonsModuleServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AddonsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon commands.
     *
     * @var array
     */
    protected $commands = [
        Sync::class,
        Download::class,
    ];

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        AddonsModulePlugin::class,
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        RepositoryRepositoryInterface::class => RepositoryRepository::class,
        AddonRepositoryInterface::class      => AddonRepository::class,
        ComposerAuthorizer::class            => ComposerAuthorizer::class,
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/addons/repositories'           => 'Anomaly\AddonsModule\Http\Controller\Admin\RepositoriesController@index',
        'admin/addons/repositories/create'    => 'Anomaly\AddonsModule\Http\Controller\Admin\RepositoriesController@create',
        'admin/addons/repositories/edit/{id}' => 'Anomaly\AddonsModule\Http\Controller\Admin\RepositoriesController@edit',
        'admin/addons'                        => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@index',
        'admin/addons/enable/{addon}'         => [
            'as'   => 'anomaly.module.addons::addon.enable',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@enable',
        ],
        'admin/addons/disable/{addon}'        => [
            'as'   => 'anomaly.module.addons::addon.disable',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@disable',
        ],
        'admin/addons/install/{addon}'        => [
            'as'   => 'anomaly.module.addons::addon.install',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@install',
        ],
        'admin/addons/options/{addon}'        => [
            'as'   => 'anomaly.module.addons::addon.options',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@options',
        ],
        'admin/addons/uninstall/{addon}'      => [
            'as'   => 'anomaly.module.addons::addon.uninstall',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@uninstall',
        ],
        'admin/addons/migrate/{addon}'        => [
            'as'   => 'anomaly.module.addons::addon.migrate',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@migrate',
        ],
        'admin/addons/view/{addon}'           => [
            'as'   => 'anomaly.module.addons::addon.view',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\AddonsController@view',
        ],
        'admin/addons/remove/{addon}'         => [
            'as'   => 'anomaly.module.addons::composer.remove',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\ComposerController@remove',
        ],
        'admin/addons/update/{addon}'         => [
            'as'   => 'anomaly.module.addons::composer.update',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\ComposerController@update',
        ],
        'admin/addons/download/{addon}'       => [
            'as'   => 'anomaly.module.addons::composer.download',
            'uses' => 'Anomaly\AddonsModule\Http\Controller\Admin\ComposerController@download',
        ],
    ];

}
