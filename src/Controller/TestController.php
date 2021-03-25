<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article\Article;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @author Evert Harmeling <evert@yoursportpro.nl>
 */
final class TestController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke()
    {
        $article = new Article('Test article');

        $this->entityManager->persist($article);
        $this->entityManager->flush();

        dd($article);
    }
}
