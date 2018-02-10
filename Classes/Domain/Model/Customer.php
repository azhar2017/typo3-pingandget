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
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * customerId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $customerId = 0;

    /**
     * address
     *
     * @var string
     * @validate NotEmpty
     */
    protected $address = '';

    /**
     * mobileNumber
     *
     * @var int
     * @validate NotEmpty
     */
    protected $mobileNumber = 0;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the customerId
     *
     * @return int $customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets the customerId
     *
     * @param int $customerId
     * @return void
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the mobileNumber
     *
     * @return int $mobileNumber
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Sets the mobileNumber
     *
     * @param int $mobileNumber
     * @return void
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }
}
