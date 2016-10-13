<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace DIT\CronManager\Controller\Adminhtml\Schedules;

class MassDelete extends \DIT\CronManager\Controller\Adminhtml\Schedules {

    public function execute() {
        $scheduleIds = $this->getRequest()->getParam('schedule_ids');
        $collection = $this->_scheduleFactory->create()->getCollection()->addFieldToFilter('schedule_id', array('in' => $scheduleIds));
        $count = 0;
        foreach ($collection as $item) {
            $item->delete();
            $count++;
        }
        $this->messageManager->addSuccess(__('A total of %1 record(s) have been deleted.', $count));

        /* Do your controller action stuff here */
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('dit_cronmanager/schedules/index');
        return $resultRedirect;

    }

}
