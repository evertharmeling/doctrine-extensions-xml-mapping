<?php

declare(strict_types=1);

namespace App\Entity\Article;

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @final
 */
class Article
{
    private ?int $id;
    private string $title;

    /**
     * @Gedmo\Slug(fields={"title"})
     */
    private ?string $slug;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }
}
