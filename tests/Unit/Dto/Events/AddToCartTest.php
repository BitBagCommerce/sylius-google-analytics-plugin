<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Spinbits\SyliusGoogleAnalytics4Plugin\Unit\Dto\Events;

use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Events\AddToCart;
use PHPUnit\Framework\TestCase;
use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Item;

class AddToCartTest extends TestCase
{
    /** @var AddToCart */
    private $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new AddToCart();
    }

    public function testGetName()
    {
        $this->assertSame('add_to_cart', $this->sut->getName());
    }

    public function testSerializeMockItem()
    {
        $item=$this->createMock(Item::class);

        $item->expects($this->any())
            ->method('getCurrency')
            ->willReturn('USD');

        $item->expects($this->any())
            ->method('getPrice')
            ->willReturn('1.23');

        $item->expects($this->any())
            ->method('getDiscount')
            ->willReturn('0.23');

        $this->sut->addItem($item);
        $this->sut->addItem($item);

        $result = json_encode($this->sut);

        $expected = '{"currency":"USD","value":2,"items":[null,null]}';
        $this->assertSame($expected, $result);
    }
}
