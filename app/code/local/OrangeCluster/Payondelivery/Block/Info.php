<?php

class OrangeCluster_Payondelivery_Block_Info extends Mage_Payment_Block_Info {



  protected $_instructions;

  protected function _construct()
  {
    parent::_construct();
    $this->setTemplate('orangecluster/payondelivery/info.phtml');
  }

  /**
   * Get instructions text from order payment
   * (or from config, if instructions are missed in payment)
   *
   * @return string
   */
  public function getInstructions()
  {
    if (is_null($this->_instructions)) {
      $this->_instructions = $this->getInfo()->getAdditionalInformation('instructions');
      if(empty($this->_instructions)) {
        $this->_instructions = $this->getMethod()->getInstructions();
      }
    }
    return $this->_instructions;
  }

}

