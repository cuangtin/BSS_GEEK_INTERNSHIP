<?php
namespace Bss\Routing\Block;

use Bss\Routing\Helper\Data;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class CustomerBlock extends Template
{
    public function __construct(Context $context,RequestInterface $request,  Data $helper)
    {
        parent::__construct($context);
        $this->request = $request;
    }

    public function getCustomerName(){
        return $this->request->getParam('name', 'dv2uang');
    }

    public function getCustomerDob(){
        return  $this->request->getParam('dob', '26, OCt 2000');
    }

    public function getCustomerAddress(){
        return $this->request->getParam('address', 'BG');
    }

    public function getCustomerDescription(){
        return $this->request->getParam('description', '25SDF21SD465F465G1GD');
    }
}
