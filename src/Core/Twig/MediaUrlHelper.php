<?php
declare(strict_types=1);

/*
 * (c) Sebastian Schreier <info@sebastianschreier.de>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sschreier\CustomizingAdministrationLoginPage\Core\Twig;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MediaUrlHelper extends AbstractExtension
{
    /** @var Environment */
    private $twigEnvironment;

    public function __construct(
        Environment $twigEnvironment,
        protected EntityRepository $mediaRepository
    ) {
        $this->twigEnvironment = $twigEnvironment;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'sschreier_get_media_url_by_media_id',
                [$this, 'getMediaUrlByMediaId']
            ),
        ];
    }

    public function getMediaUrlByMediaId($mediaId): string
    {
        $media = $this->mediaRepository->search(
            (new Criteria())
                ->addFilter(new EqualsFilter('id', $mediaId)),
            Context::createDefaultContext()
        )->getEntities()->first();

        if (isset($media) && $media->getUrl()) {
            return $media->getUrl();
        }

        return "";
    }
}
