<?php

namespace Bss\Schema\Plugin;

use Bss\Schema\Model\DataExampleFactory;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Message\ManagerInterface;

class ShowMessage
{
    /**
     * @var DataExampleFactory
     */
    protected DataExampleFactory $dataExample;
    /**
     * @var ManagerInterface
     */
    protected ManagerInterface $managerMessage;

    /**
     * @param DataExampleFactory $dataExample
     * @param ManagerInterface $managerMessage
     */
    public function __construct(DataExampleFactory $dataExample, ManagerInterface $managerMessage)
    {
        $this->dataExample = $dataExample;
        $this->managerMessage = $managerMessage;
    }

    /**
     * @return void
     */
    public function beforeExecute()
    {
        $objectManager = ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        if ($customerSession->isLoggedIn()) {
            $model = $this->dataExample->create()->load($customerSession->getCustomer()->getEmail(), 'email');
            if ($model->getData()) {
                $this->managerMessage->addSuccessMessage(__('You got 50% off for all orders!'));
            }
        }
    }
}
