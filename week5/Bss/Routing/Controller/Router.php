<?php
declare(strict_types=1);

namespace Bss\Routing\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;

/**
 * Class Router
 */
class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private $actionFactory;

    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * Router constructor.
     *
     * @param ActionFactory $actionFactory
     * @param ResponseInterface $response
     */
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }
    /**
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {
        $identifier = trim($request->getPathInfo(), '/');
        $array = explode('/', $identifier);
        if (strpos($identifier, 'internship-course') !== false) {
            if(count($array) == 1){
                $request->setModuleName('routing');
                $request->setControllerName('index');
                $request->setActionName('index');
            }else {
                $request->setModuleName('routing');
                $request->setControllerName('index');
                $request->setActionName('index');
                $request->setParams([
                    'name' => $array[1]
                ]);
            }

            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }
        return null;
    }
}
