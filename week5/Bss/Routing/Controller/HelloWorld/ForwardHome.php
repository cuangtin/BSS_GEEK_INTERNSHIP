<?php
declare(strict_types=1);
namespace Bss\Routing\Controller\HelloWorld;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\ForwardFactory;

class ForwardHome extends Action
{

    protected $_resultForwardFactory;

    public function __construct(
        Context $context,
        ForwardFactory $_resultForwardFactory
    ) {
        $this->_resultForwardFactory = $_resultForwardFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();
        $resultForward->setController('index')
            ->setModule('cms')
            ->forward('index');
        return $resultForward;
    }
}
?>
