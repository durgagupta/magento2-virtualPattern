<?php


namespace Ace\VirtualPattern\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Ace\VirtualPattern\Model\CustomLogger
     */
    private $customLogger;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Ace\VirtualPattern\Model\CustomLogger $customLogger

    ) {
        parent::__construct($context);
        $this->customLogger = $customLogger;
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->customLogger->getLogger()->info("VirtualPattern Demo");
        echo "<pre>";
        var_dump($this->customLogger->getLogger()->getName());

        exit;
    }
}
