<?php

/**
 * Newsletterbox for Magento
 *
 * @package     Wik_Newsletterbox
 * @author      Anders Wik
 * @copyright   Copyright (C) 2016 Anders Wik (http://www.anderswik.se/)
 * @license     Open Source License (OSL v3)
 */
class Wik_Newsletterbox_Block_Box extends Mage_Core_Block_Template
{
    const XML_CONFIG_VALUE_ACTIVE = "newsletterbox/general/active";

    protected $_helper = null;

    protected function _construct()
    {
        $this->_helper = Mage::helper('newsletterbox');
    }

    public function getActive()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_ACTIVE);
    }
}