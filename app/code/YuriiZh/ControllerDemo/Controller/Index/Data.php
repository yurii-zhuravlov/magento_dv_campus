<?php
declare(strict_types=1);

namespace YuriiZh\ControllerDemo\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Data
 * @package YuriiZh\ControllerDemo\Controller\Index
 */
class Data extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
