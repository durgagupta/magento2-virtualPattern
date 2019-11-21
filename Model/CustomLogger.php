<?php

namespace Ace\VirtualPattern\Model;

use Psr\Log\LoggerInterface;

class CustomLogger extends EntityAbstract
{

    public function __construct(LoggerInterface $logger)
    {

        parent::__construct($logger);
        $this->logger = $logger;
    }

}