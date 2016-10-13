<?php /**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace DIT\CronManager\Controller\Adminhtml\Schedules;

class MassRun extends \DIT\CronManager\Controller\Adminhtml\Schedules {

    public function execute() {
        $scheduleIds = $this->getRequest()->getParam('schedule_ids');
        $collection = $this->_scheduleFactory->create()->getCollection()->addFieldToFilter('schedule_id', array('in' => $scheduleIds));
        $collection->getSelect()->limit(1);

        try {
            foreach ($collection as $item) {
                $this->messageManager->addSuccess(__('Schedule #%1 %2 was executed successfully.', $item->getId(), $item->getJobCode()));
            }
        } catch (\Exception $ex) {
            $this->messageManager->addError(__('An error occured while running schedule #%1 %2.', $item->getId(), $item->getJobCode()));
        }

        /* Do your controller action stuff here */
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('dit_cronmanager/schedules/index');
        return $resultRedirect;

    }

}
