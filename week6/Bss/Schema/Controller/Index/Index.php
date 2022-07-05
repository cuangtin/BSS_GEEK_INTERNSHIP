<?php
namespace Bss\Schema\Controller\Index;

use Bss\Schema\Helper\Forward;
use Magento\Framework\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $pageFactory;
    protected Forward $helper;
    protected ResultFactory $resultRedirect;

    /**
     * @param Action\Context $context
     * @param Forward $helper
     * @param ResultFactory $result
     * @param PageFactory $pageFactory
     */
    public function __construct(Action\Context $context, Forward $helper, ResultFactory $result, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->helper = $helper;
        $this->resultRedirect = $result;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        if ($this->helper->isEnable() == 0) {
            $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
            $this->messageManager->addErrorMessage(__('You do not have enough permissions to access this page, please contact the administrator!'));
            $resultRedirect->setUrl('/');
            return $resultRedirect;
        } else return $this->pageFactory->create();
    }
}
