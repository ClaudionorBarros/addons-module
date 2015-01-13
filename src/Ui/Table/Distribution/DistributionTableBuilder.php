<?php namespace Anomaly\AddonsModule\Ui\Table\Distribution;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class DistributionTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Distribution\Addons\Ui\Table
 */
class DistributionTableBuilder extends TableBuilder
{

    /**
     * The table entries.
     *
     * @var string
     */
    protected $entries = 'Anomaly\AddonsModule\Ui\Table\Distribution\Handler\EntriesHandler@handle';

    /**
     * The columns configuration.
     *
     * @var string
     */
    protected $columns = 'Anomaly\AddonsModule\Ui\Table\Distribution\Handler\ColumnHandler@handle';

    /**
     * The buttons configuration.
     *
     * @var string
     */
    protected $buttons = 'Anomaly\AddonsModule\Ui\Table\Distribution\Handler\ButtonHandler@handle';

}
