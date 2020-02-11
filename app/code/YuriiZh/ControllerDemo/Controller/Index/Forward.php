<?php
declare(strict_types=1);

namespace YuriiZh\ControllerDemo\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Forward as ForwardResult;

/**
 * Class Forward
 * @package YuriiZh\ControllerDemo\Controller\Index
 */
class Forward extends \Magento\Framework\App\Action\Action implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|ForwardResult|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var ForwardResult $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_FORWARD);
        $response->setModule(
            'YuriiZh_ControllerDemo'
        )->setParams([
            '_secure' => true,
            'firstName' => 'Yurii',
            'lastName' => 'Zhuravlov',
            'repositoryUrl' => 'https://github.com/yurii-zhuravlov/magento_dv_campus'
        ])
        ->forward('data');

        return $response;
    }
}
