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

class Search implements \JsonSerializable
{
    use JsonSerializeTrait;

    private string $search_term;

    /**
     * @param string $search_term
     */
    public function __construct(string $search_term)
    {
        $this->search_term = $search_term;
    }

    public function getName(): string
    {
        return 'search';
    }
}
