<?php

namespace Ace\VirtualPattern\Model;

use Psr\Log\LoggerInterface;


abstract class EntityAbstract
{

    /**
     *
     * @var LoggerInterface
     */
    protected $logger;


    /**
     * ImportAbstract constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * Get logger instance
     *
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

}
