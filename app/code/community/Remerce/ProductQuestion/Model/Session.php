<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Remerce
 * @package    Remerce_ProductQuestion
 * @copyright  Copyright (c) 2009 Remerce (http://remerce.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class  Remerce_ProductQuestion_Model_Session extends Mage_Core_Model_Session_Abstract
{
	  protected $_question = null;
     public function __construct()
    {
        $this->init('productquestion');
    }
	 public function unsetAll()
    {
        parent::unsetAll();
        $this->_question = null;
    }
	protected function _getQuestionKey()
    {
        return 'question_key_' . Mage::app()->getStore()->getWebsiteId();
    }
	protected function _getKeyAttempts()
    {
        return 'question_key_' . Mage::app()->getStore()->getWebsiteId();
    }
	 public function setQuestionKey($qkey)
    {
        $this->setData($this->_getQuestionKey(), $qkey);
    }
    public function getQuestionKey()
    {
        return $this->getData($this->_getQuestionKey());
    }
	public function setKeyAttempts($qAttem)
    {
        $this->setData($this->_getKeyAttempts(), $qAttem);
    }

    public function getKeyAttempts()
    {
        return $this->getData($this->_getKeyAttempts());
    }

}