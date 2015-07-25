<?php namespace Anomaly\AddonsModule\Http\Controller\Admin;

use Anomaly\AddonsModule\FieldType\Table\FieldTypeTableBuilder;

/**
 * Class FieldTypesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AddonsModule\Http\Controller\Admin
 */
class FieldTypesController extends AddonsController
{

    /**
     * Return an index of existing field types.
     *
     * @param FieldTypeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(FieldTypeTableBuilder $table)
    {
        return $table->render();
    }
}
