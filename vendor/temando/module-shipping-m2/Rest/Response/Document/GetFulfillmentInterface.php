<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\Document;

use Temando\Shipping\Rest\Response\DataObject\Fulfillment;

/**
 * Temando API Get Fulfillment Document
 *
 * @package Temando\Shipping\Rest
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
interface GetFulfillmentInterface
{
    /**
     * @return \Temando\Shipping\Rest\Response\DataObject\Fulfillment
     */
    public function getData();

    /**
     * @param \Temando\Shipping\Rest\Response\DataObject\Fulfillment $fulfillment
     * @return void
     */
    public function setData(Fulfillment $fulfillment);
}
