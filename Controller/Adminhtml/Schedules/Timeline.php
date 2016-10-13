<?php
/**
 * Copyright © 2015 DIT. All rights reserved.
 */

namespace DIT\CronManager\Controller\Adminhtml\Schedules;

class Timeline extends \DIT\CronManager\Controller\Adminhtml\Schedules {
    /**
     * Index Action*
     * @return void
     */
    public function execute() {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('DIT_CronManager::schedules_timeline');
        $resultPage->getConfig()->getTitle()->prepend(__('Schedules Timeline'));
        // Changing the page title

        $collection = $this->_scheduleFactory->create()->getCollection();
        $resultPage->getLayout()->getBlock('schedules_timeline')->setSchedulesCollection($collection);

        return $resultPage;
    }

}
