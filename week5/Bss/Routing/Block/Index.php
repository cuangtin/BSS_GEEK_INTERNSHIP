<?php
namespace Bss\Routing\Block;

use Bss\Routing\Helper\Data;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Index extends Template
{
    public function __construct(Context $context,RequestInterface $request,  Data $helper)
    {
        parent::__construct($context);
        $this->request = $request;
        $this->helper = $helper;
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function getCustomerData(){
        $name = $this->request->getParam('name', 'dv2uang');
        $dob = $this->request->getParam('dob', '26, OCt 2000');
        $address = $this->request->getParam('address', 'BG');
        $description = $this->request->getParam('description', '25SDF21SD465F465G1GD');
        $arr = [$name,$dob,$address,$description];
        return $arr;
    }

    public function getTitle(){
        return  $this->helper->getText('page_title');
    }

    public function getDescription(){
        return $this->helper->getText('page_description');
    }
}
