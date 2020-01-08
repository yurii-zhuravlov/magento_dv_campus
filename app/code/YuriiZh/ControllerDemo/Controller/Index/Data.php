<?php
declare(strict_types=1);

namespace YuriiZh\ControllerDemo\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Page;

class Data extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var Page $response */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
