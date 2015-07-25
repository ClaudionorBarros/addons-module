<?php namespace Anomaly\AddonsModule\Http\Controller\Admin;

use Anomaly\AddonsModule\Plugin\Table\PluginTableBuilder;

/**
 * Class PluginsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AddonsModule\Http\Controller\Admin
 */
class PluginsController extends AddonsController
{

    /**
     * Return an index of existing plugins.
     *
     * @param PluginTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PluginTableBuilder $table)
    {
        return $table->render();
    }
}
