<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Events;

use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\EventInterface;
use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\ItemsContainerEvent;
use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\JsonSerializeTrait;

class AddToWishlist extends ItemsContainerEvent implements \JsonSerializable, EventInterface
{
    use JsonSerializeTrait;

    public function getName(): string
    {
        return 'add_to_wishlist';
    }
}
