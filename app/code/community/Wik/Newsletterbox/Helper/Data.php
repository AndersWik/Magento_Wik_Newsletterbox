<?php

class Wik_Newsletterbox_Helper_Data extends Mage_Core_Helper_Abstract
{
	const LOG_FILENAME = 'Wik_Newsletterbox.log';

	//Mage::helper('newsletterbox')->log($e);
	public function log($e, $error = null) {
  		Mage::log($e, $error, self::LOG_FILENAME);
	}
}
