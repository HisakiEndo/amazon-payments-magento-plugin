<?php
/**
 * Amazon Payments Checkout Controller
 *
 * @category    Amazon
 * @package     Amazon_Payments
 * @copyright   Copyright (c) 2014 Amazon.com
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Amazon_Payments_IndexController extends Mage_Core_Controller_Front_Action
{

    /**
     * Checkout page
     */
    public function indexAction()
    {

        $api = Mage::getModel('amazon_payments/api');

        $result = $api->getOrderReferenceDetails($_GET['id']);

        print_r($result);


        ///die('here');

    }

}

?>