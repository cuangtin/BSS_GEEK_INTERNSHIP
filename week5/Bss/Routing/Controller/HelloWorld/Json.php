<?php
declare(strict_types=1);

namespace Bss\Routing\Controller\HelloWorld;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;

class Json implements HttpGetActionInterface
{
    private $pageFactory;
    private $request;
    protected $_resultJsonFactory;

    public function __construct(PageFactory $pageFactory, RequestInterface $request, JsonFactory $resultJsonFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
        $this->_resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        $arr = [$this->request->getParam('name', 'dv2uang'),$this->request->getParam('dob', '26, OCt 2000')
            ,$this->request->getParam('address', 'BG'),$this->request->getParam('description', '25SDF21SD465F465G1GD')];
        $result = $this->_resultJsonFactory->create();
        $result->setData($arr);
        return $result;
    }
}
