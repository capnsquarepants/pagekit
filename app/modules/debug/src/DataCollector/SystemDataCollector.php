<?php

namespace Pagekit\Debug\DataCollector;

use Pagekit\Info\InfoHelper;
use DebugBar\DataCollector\DataCollectorInterface;

class SystemDataCollector implements DataCollectorInterface
{
    /**
     * @var InfoHelper
     */
    protected $info;

    /**
     * Constructor.
     *
     * @param InfoHelper $info
     */
    function __construct(InfoHelper $info)
    {
        $this->info = $info;
    }

    /**
     * {@inheritdoc}
     */
    public function collect()
    {
        return $this->info->get();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'system';
    }
}
