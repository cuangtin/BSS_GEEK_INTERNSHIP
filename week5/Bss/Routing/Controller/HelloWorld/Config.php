<?php
namespace Bss\Routing\Controller\HelloWorld;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Bss\Routing\Helper\Data;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;

class Config extends Action
{

    protected $helper;
    private $pageFactory;

    public function __construct(Context $context, Data $helper, PageFactory $pageFactory, ForwardFactory $forwardFactory)
    {
        parent::__construct($context);
        $this->helper = $helper;
        $this->pageFactory = $pageFactory;
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        $enable = $this->helper->getGeneralConfig('enable');
        if($enable == 0){
            $resultForward = $this->forwardFactory->create();
            $resultForward->setController('index');
            $resultForward->forward('defaultNoRoute');
            return $resultForward;
        }else{
            $page = $this->pageFactory->create();
            $page->getLayout()->getBlock('routing_helloworld_config');
            return $page;
        }
    }
}
