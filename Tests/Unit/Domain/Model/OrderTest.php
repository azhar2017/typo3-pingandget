<?php
namespace Azhar\Pingandget\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Azhar\Pingandget\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Azhar\Pingandget\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOrderIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderId()
        );
    }

    /**
     * @test
     */
    public function setOrderIdForIntSetsOrderId()
    {
        $this->subject->setOrderId(12);

        self::assertAttributeEquals(
            12,
            'orderId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrderType()
        );
    }

    /**
     * @test
     */
    public function setOrderTypeForStringSetsOrderType()
    {
        $this->subject->setOrderType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orderType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOriginReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrigin()
        );
    }

    /**
     * @test
     */
    public function setOriginForStringSetsOrigin()
    {
        $this->subject->setOrigin('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'origin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDestinationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDestination()
        );
    }

    /**
     * @test
     */
    public function setDestinationForStringSetsDestination()
    {
        $this->subject->setDestination('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'destination',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrderDescription()
        );
    }

    /**
     * @test
     */
    public function setOrderDescriptionForStringSetsOrderDescription()
    {
        $this->subject->setOrderDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orderDescription',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderPrice()
        );
    }

    /**
     * @test
     */
    public function setOrderPriceForIntSetsOrderPrice()
    {
        $this->subject->setOrderPrice(12);

        self::assertAttributeEquals(
            12,
            'orderPrice',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerIdReturnsInitialValueForCustomer()
    {
        self::assertEquals(
            null,
            $this->subject->getCustomerId()
        );
    }

    /**
     * @test
     */
    public function setCustomerIdForCustomerSetsCustomerId()
    {
        $customerIdFixture = new \Azhar\Pingandget\Domain\Model\Customer();
        $this->subject->setCustomerId($customerIdFixture);

        self::assertAttributeEquals(
            $customerIdFixture,
            'customerId',
            $this->subject
        );
    }
}
