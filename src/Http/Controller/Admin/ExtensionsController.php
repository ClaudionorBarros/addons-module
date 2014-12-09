<?php namespace Anomaly\Streams\Addon\Module\Addons\Http\Controller\Admin;

use Anomaly\Streams\Addon\Module\Addons\Ui\Table\ExtensionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class ExtensionsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\Addons\Http\Controllers\Admin
 */
class ExtensionsController extends AdminController
{

    /**
     * Return an index of existing modules.
     *
     * @param ExtensionTableBuilder $table
     * @return mixed|null
     */
    public function index(ExtensionTableBuilder $table)
    {
        return $table->render();
    }
}
 