<?php

namespace Bss\Schema\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Intern extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    protected PageFactory $pageFactory;

    /**
     * @param Magento\Framework\App\Action\Context $context
     * @param Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}
