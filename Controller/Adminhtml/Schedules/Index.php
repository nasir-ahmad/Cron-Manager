<?php
/**
 * Copyright © 2015 DIT. All rights reserved.
 */

namespace DIT\CronManager\Controller\Adminhtml\Schedules;

class Index extends \DIT\CronManager\Controller\Adminhtml\Schedules {
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute() {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();

        $resultPage->setActiveMenu('DIT_CronManager::cronmanager');
        $resultPage->getConfig()->getTitle()->prepend(__('Cron Manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('List of Schedules'));

        $resultPage->addBreadcrumb(__('Cron Manager'), __('Cron Manager'));
        $resultPage->addBreadcrumb(__('List of Schedules'), __('List of Schedules'));
        return $resultPage;
    }

    protected function _initAction() {
        $this->_view->loadLayout();

        return $this;
    }

}
