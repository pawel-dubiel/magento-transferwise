<?php

/**
 * Pay on delivery payment method model
 */
class OrangeCluster_Payondelivery_Model_Method_Payondelivery extends Mage_Payment_Model_Method_Abstract {

  /**
   * Payment method code
   *
   * @var string
   */
    protected $_code = 'payondelivery';
    protected $_isInitializeNeeded = TRUE;
    protected $_canUseInternal = TRUE;

    protected $_canUseForMultishipping = TRUE;

  /**
   * Cash On Delivery payment block paths
   *
   * @var string
   */
  protected $_infoBlockType = 'payment/info';
  protected $_formBlockType = 'orangecluster_payondelivery/form_payondelivery';



  /**
   * Get instructions text from config
   *
   * @return string
   */
  public function getInstructions() {
    return trim($this->getConfigData('instructions'));
  }

}
