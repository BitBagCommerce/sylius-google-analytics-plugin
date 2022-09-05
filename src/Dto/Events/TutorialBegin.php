<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spinbits\SyliusGoogleAnalytics4Plugin\Dto\Events;

use Spinbits\SyliusGoogleAnalytics4Plugin\Dto\JsonSerializeTrait;

class TutorialBegin implements \JsonSerializable
{
    use JsonSerializeTrait;

    public function getName(): string
    {
        return 'tutorial_begin';
    }
}
