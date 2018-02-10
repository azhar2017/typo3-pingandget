<?php
namespace Azhar\Pingandget\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CustomerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Azhar\Pingandget\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Azhar\Pingandget\Domain\Model\Customer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCustomerId()
        );
    }

    /**
     * @test
     */
    public function setCustomerIdForIntSetsCustomerId()
    {
        $this->subject->setCustomerId(12);

        self::assertAttributeEquals(
            12,
            'customerId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMobileNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMobileNumber()
        );
    }

    /**
     * @test
     */
    public function setMobileNumberForIntSetsMobileNumber()
    {
        $this->subject->setMobileNumber(12);

        self::assertAttributeEquals(
            12,
            'mobileNumber',
            $this->subject
        );
    }
}
