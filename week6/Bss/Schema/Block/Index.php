<?php

namespace Bss\Schema\Block;

use Bss\Schema\Model\DataExampleFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\App\RequestInterface;

class Index extends Template
{
    protected DataExampleFactory $_dataExample;
    protected RequestInterface $request;

    public function __construct(Template\Context $context, RequestInterface $request, DataExampleFactory $dataExample)
    {
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->request = $request;
    }

    public function getInternship()
    {
        $internship = $this->_dataExample->create();
        $id = $this->request->getParam('id');
        return $internship->load($id);
    }

    public function getName()
    {
        if (self::getInternship()) {
            return self::getInternship()->getName();
        }
    }

    public function getDateOfBirth()
    {
        if (self::getInternship()) {
            return self::getInternship()->getBirthday();
        }
    }

    public function getGender()
    {
        if (self::getInternship()) {
            return self::getInternship()->getGender();
        }
    }

    public function getAddress()
    {
        if (self::getInternship()) {
            return self::getInternship()->getAddress();
        }
    }

    public function getEmail()
    {
        if (self::getInternship()) {
            return self::getInternship()->getEmail();
        }
    }
}
