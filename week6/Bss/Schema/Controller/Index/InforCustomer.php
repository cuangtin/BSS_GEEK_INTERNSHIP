<?php
namespace Bss\Schema\Controller\Index;

use Bss\Schema\Model\DataExampleFactory;
use Bss\Schema\Helper\Forward;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Action\Action;

class InforCustomer extends Action
{
    /**
     * @var DataExampleFactory
     */
    protected DataExampleFactory $_dataExample;
    /**
     * @var ResultFactory
     */
    protected ResultFactory $resultRedirect;
    /**
     * @var RequestInterface
     */
    private RequestInterface $request;
    /**
     * @var Forward
     */
    protected Forward $helper;

    /**
     * @param Context $context
     * @param DataExampleFactory $dataExample
     * @param ResultFactory $result
     * @param RequestInterface $request
     * @param Forward $helper
     */
    public function __construct(Context $context, DataExampleFactory $dataExample, ResultFactory $result, RequestInterface $request, Forward $helper)
    {
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
        $this->request = $request;
        $this->helper = $helper;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        if ($this->helper->isEnable() == 1) {
            $name = $this->request->getParam('name');
            $birthday = $this->request->getParam('birthday');
            $gender = $this->request->getParam('gender');
            $address = $this->request->getParam('address');
            $email = $this->request->getParam('email');
            if ($name !== '' && $birthday !== '' && $address !== '' && $email !== '') {
                $resultRedirect->setUrl($this->_redirect->getRefererUrl());
                $model = $this->_dataExample->create();
                $model->addData([
                    "name" => $name,
                    "birthday" => $birthday,
                    "gender" => $gender,
                    "address" => $address,
                    "email" => $email,
                ]);
                $saveData = $model->save();
                isset($saveData) ? $this->messageManager->addSuccessMessage(__('Your data has been saved!')) : $this->messageManager->addErrorMessage(__('There was an error while saving Internship data, please try again!'));
            }
            return $resultRedirect;
        }
        $this->messageManager->addErrorMessage(__('You do not have enough permissions to access this page, please contact the administrator!'));
        $resultRedirect->setUrl('/');
        return $resultRedirect;
    }
}
