<?php
declare(strict_types=1);

namespace YuriiZh\ControllerDemo\Block;

/**
 * Class Demo
 * @package YuriiZh\ControllerDemo\Block
 */
class Demo extends \Magento\Framework\View\Element\Template
{
    /**
     * Demo constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getFullName()
    {
        return $this->getRequest()->getParam('firstName')
            . ' '
            . $this->getRequest()->getParam('lastName');
    }

    public function getRepositoryUrl()
    {
        return $this->getRequest()->getParam('repositoryUrl');
    }
}
