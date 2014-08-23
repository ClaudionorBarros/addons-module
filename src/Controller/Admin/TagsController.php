<?php namespace Addon\Module\Addons\Controller\Admin;

use Addon\Module\Addons\Model\TagEntryModel;

class TagsController extends AddonsControllerAbstract
{
    /**
     * Create a new TagsController instance.
     */
    public function __construct()
    {
        $this->addons = new TagEntryModel();

        parent::__construct();
    }
}