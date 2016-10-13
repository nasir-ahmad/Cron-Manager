<?php
/**
 * Copyright © 2015 DIT. All rights reserved.
 */

namespace DIT\CronManager\Controller\Adminhtml;

abstract class Schedules extends \Magento\Backend\App\Action
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
		\Magento\Cron\Model\ScheduleFactory $scheduleFactory
    ) {
        parent::__construct($context);

        $this->_coreRegistry = $coreRegistry;
        $this->_resultForwardFactory = $resultForwardFactory;
        $this->_resultPageFactory = $resultPageFactory;
		$this->_scheduleFactory = $scheduleFactory;
    }
}
