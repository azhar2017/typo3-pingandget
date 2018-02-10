<?php
namespace Azhar\Pingandget\Domain\Model;

/***
 *
 * This file is part of the "pingandget" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * orderId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $orderId = 0;

    /**
     * orderType
     *
     * @var string
     * @validate NotEmpty
     */
    protected $orderType = '';

    /**
     * origin
     *
     * @var string
     * @validate NotEmpty
     */
    protected $origin = '';

    /**
     * destination
     *
     * @var string
     * @validate NotEmpty
     */
    protected $destination = '';

    /**
     * orderDescription
     *
     * @var string
     * @validate NotEmpty
     */
    protected $orderDescription = '';

    /**
     * orderPrice
     *
     * @var int
     * @validate NotEmpty
     */
    protected $orderPrice = 0;

    /**
     * customerId
     *
     * @var \Azhar\Pingandget\Domain\Model\Customer
     */
    protected $customerId = null;

    /**
     * Returns the orderId
     *
     * @return int $orderId
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets the orderId
     *
     * @param int $orderId
     * @return void
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns the orderType
     *
     * @return string $orderType
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets the orderType
     *
     * @param string $orderType
     * @return void
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * Returns the origin
     *
     * @return string $origin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets the origin
     *
     * @param string $origin
     * @return void
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * Returns the destination
     *
     * @return string $destination
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets the destination
     *
     * @param string $destination
     * @return void
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Returns the orderDescription
     *
     * @return string $orderDescription
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * Sets the orderDescription
     *
     * @param string $orderDescription
     * @return void
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * Returns the orderPrice
     *
     * @return int $orderPrice
     */
    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    /**
     * Sets the orderPrice
     *
     * @param int $orderPrice
     * @return void
     */
    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;
    }

    /**
     * Returns the customerId
     *
     * @return \Azhar\Pingandget\Domain\Model\Customer $customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets the customerId
     *
     * @param \Azhar\Pingandget\Domain\Model\Customer $customerId
     * @return void
     */
    public function setCustomerId(\Azhar\Pingandget\Domain\Model\Customer $customerId)
    {
        $this->customerId = $customerId;
    }
}
