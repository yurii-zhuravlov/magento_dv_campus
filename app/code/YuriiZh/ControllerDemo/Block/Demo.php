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

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->getRequest()->getParam('firstName')
            . ' '
            . $this->getRequest()->getParam('lastName');
    }

    /**
     * @return string
     */
    public function getRepositoryUrl(): string
    {
        return $this->getRequest()->getParam('repositoryUrl');
    }
}
