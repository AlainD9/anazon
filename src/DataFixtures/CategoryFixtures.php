<?php

namespace App\DataFixtures;

// use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_ANE_PELUCHES = 'CATEGORY_ANE_PELUCHES';

    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Ane en peluches');
        $manager->persist($category);
        $this->addReference(self::CATEGORY_ANE_PELUCHES, $category);

        $manager->flush();
    }
}
