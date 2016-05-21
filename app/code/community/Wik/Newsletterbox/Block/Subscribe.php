<?php

/**
 * Newsletterbox for Magento
 *
 * @package     Wik_Newsletterbox
 * @author      Anders Wik
 * @copyright   Copyright (C) 2016 Anders Wik (http://www.anderswik.se/)
 * @license     Open Source License (OSL v3)
 */
class Wik_Newsletterbox_Block_Subscribe extends Mage_Newsletter_Block_Subscribe
{
    const XML_CONFIG_VALUE_HEADLINE = "newsletterbox/content/headline";
    const XML_CONFIG_VALUE_PARAGRAPH = "newsletterbox/content/paragraph";
    const XML_CONFIG_VALUE_PLACEHOLDER = "newsletterbox/content/placeholder";
    const XML_CONFIG_VALUE_BUTTONTEXT = "newsletterbox/content/buttontext";
    const XML_CONFIG_VALUE_SUCCESS = "newsletterbox/content/success";
    const XML_CONFIG_VALUE_ERROR = "newsletterbox/content/error";

    const XML_CONFIG_VALUE_COLOR_BACKGROUND = "newsletterbox/style/color-background";
    const XML_CONFIG_VALUE_COLOR_TEXT = "newsletterbox/style/color-text";
    const XML_CONFIG_VALUE_COLOR_BUTTON = "newsletterbox/style/color-button";
    const XML_CONFIG_VALUE_COLOR_BUTTON_HOVER = "newsletterbox/style/color-button-hover";
    const XML_CONFIG_VALUE_COLOR_BUTTON_TEXT = "newsletterbox/style/color-button-text";
    const XML_CONFIG_VALUE_COLOR_BUTTON_TEXT_HOVER = "newsletterbox/style/color-button-text-hover";

    protected $_helper = null;

    protected function _construct()
    {
        $this->_helper = Mage::helper('newsletterbox');
    }

    public function getHeadline()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_HEADLINE);
    }

    public function getParagraph()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_PARAGRAPH);
    }

    public function getPlaceholder()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_PLACEHOLDER);
    }

    public function getButtontext()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_BUTTONTEXT);
    }

    public function getSuccess()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_SUCCESS);
    }

    public function getError()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_ERROR);
    }

    public function getColorBackground()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_BACKGROUND);
    }

    public function getColorText()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_TEXT);
    }

    public function getColorButton()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_BUTTON);
    }

    public function getColorButtonHover()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_BUTTON_HOVER);
    }

    public function getColorButtonText()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_BUTTON_TEXT);
    }

    public function getColorButtonTextHover()
    {
        return $this->_helper->getConfigVal(self::XML_CONFIG_VALUE_COLOR_BUTTON_TEXT_HOVER);
    }
}