<?php

namespace Dtc\QueueBundle\ORM;

use Dtc\QueueBundle\Doctrine\DoctrineJobTimingManager;

class JobTimingManager extends DoctrineJobTimingManager
{
    use CommonTrait;

    public function getObjectManager()
    {
        return $this->getObjectManagerReset();
    }
}
