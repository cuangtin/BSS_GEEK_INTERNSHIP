<?php

namespace Bss\Schema\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Bss\Schema\Model\DataExampleFactory;

class ChangeInternshipName implements ObserverInterface
{
    /**
     * @var DataExampleFactory
     */
    protected DataExampleFactory $_dataExample;
    /**
     * @var CustomerRepositoryInterface
     */
    protected CustomerRepositoryInterface $_customerRepositoryInterface;

    /**
     * @param DataExampleFactory $dataExample
     * @param CustomerRepositoryInterface $customerRepositoryInterface
     */
    public function __construct(DataExampleFactory $dataExample, CustomerRepositoryInterface $customerRepositoryInterface)
    {
        $this->_dataExample = $dataExample;
        $this->_customerRepositoryInterface = $customerRepositoryInterface;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $name = $customer->getFirstname() . " " . $customer->getLastname();
        $model = $this->_dataExample->create()->load($customer->getEmail(), 'email');
        if ($model->getData()) {
            $model->setName($name);
            $model->save();
        }
    }
}
