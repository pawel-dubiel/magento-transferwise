<?php

gutclass OrangeCluster_Transferwise_Model_Method_Transferwise extends Mage_Payment_Model_Method_Abstract {

  /**
   * Payment method code
   *
   * @var string
   */
    protected $_code = 'transferwise';
    protected $_isInitializeNeeded = TRUE;
    protected $_canUseInternal = TRUE;

    protected $_canUseForMultishipping = TRUE;

  /**
   * Cash On Delivery payment block paths
   *
   * @var string
   */
  protected $_infoBlockType = 'orangecluster_transferwise/info';
  protected $_formBlockType = 'orangecluster_transferwise/form_transferwise';



  /**
   * Get instructions text from config
   *
   * @return string
   */
  public function getInstructions() {
    return trim($this->getConfigData('instructions'));
  }

}
