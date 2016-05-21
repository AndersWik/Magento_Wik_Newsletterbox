<?php

/**
 * Newsletterbox for Magento
 *
 * @package     Wik_Newsletterbox
 * @author      Anders Wik
 * @copyright   Copyright (C) 2016 Anders Wik (http://www.anderswik.se/)
 * @license     Open Source License (OSL v3)
 */
class Wik_Newsletterbox_Helper_Data extends Mage_Core_Helper_Abstract
{
	const LOG_FILENAME = 'Wik_Newsletterbox.log';

	//Mage::helper('newsletterbox')->log($e);
	public function log($e, $error = null)
	{
		Mage::log($e, $error, self::LOG_FILENAME);
	}

	public function getConfigVal($path, $store = null)
	{
		if ($store == null) {
			$store = Mage::app()->getStore();
		}
		return Mage::getStoreConfig($path, $store);
	}
}
