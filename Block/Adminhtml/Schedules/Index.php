<?php
/**
 * Copyright © 2015 DIT. All rights reserved.
 */
namespace DIT\CronManager\Block\Adminhtml\Schedules;

class Index extends \Magento\Backend\Block\Widget\Grid\Container {
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct() {
        $this->_controller = 'schedules';
        $this->_headerText = __('List of Schedules');
        $this->removeButton('add');
        parent::_construct();
    }

}
