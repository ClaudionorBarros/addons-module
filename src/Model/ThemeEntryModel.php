<?php namespace Streams\Addon\Module\Addons\Model;

use Addon\Module\Addons\Traits\SyncTrait;
use Streams\Core\Model\Addons\AddonsThemesEntryModel;

class ThemeEntryModel extends AddonsThemesEntryModel
{
    use SyncTrait;

    /**
     * Minutes to cache queries for.
     *
     * @var int
     */
    protected $cacheMinutes = null;
}
