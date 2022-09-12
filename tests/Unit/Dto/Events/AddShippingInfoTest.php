<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Events\AddShippingInfo;
use PHPUnit\Framework\TestCase;
use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Item;
use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\ItemInterface;

class AddShippingInfoTest extends TestCase
{
    /** @var AddShippingInfo */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new AddShippingInfo();
    }

    public function testGetName()
    {
        $this->assertSame('add_shipping_info', $this->sut->getName());
    }

    public function testSerializeMockItem()
    {
        $item=$this->createMock(ItemInterface::class);

        $item->expects($this->any())
            ->method('getCurrency')
            ->willReturn('USD');

        $item->expects($this->any())
            ->method('getPrice')
            ->willReturn(1.23);

        $item->expects($this->any())
            ->method('getDiscount')
            ->willReturn(0.23);

        $item->expects($this->any())
            ->method('getQuantity')
            ->willReturn(1);

        $this->sut->addItem($item);
        $this->sut->addItem($item);

        $this->sut->setCoupon('some_coupon');
        $this->sut->setShippingTier('tier');

        $result = json_encode($this->sut);

        $expected = '{"coupon":"some_coupon","shipping_tier":"tier","currency":"USD","value":2,"items":[{},{}]}';
        $this->assertEqualsCanonicalizing(json_decode($expected, true), json_decode($result, true));
    }
}
