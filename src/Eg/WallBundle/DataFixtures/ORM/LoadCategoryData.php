<?php
/**
 * Created with <3 by Zagonine <hello@zagonine.io>
 * on 15/05/2016.
 */

namespace Eg\WallBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Eg\WallBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $categoryAventure = new Category();
        $categoryAventure->setName('Aventure');
        $this->addReference('aventure', $categoryAventure);
        $manager->persist($categoryAventure);

        $categoryFun = new Category();
        $categoryFun->setName('Fun');
        $this->addReference('fun', $categoryFun);
        $manager->persist($categoryFun);

        $categoryDecale = new Category();
        $categoryDecale->setName('Décalé');
        $this->addReference('decale', $categoryDecale);
        $manager->persist($categoryDecale);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
    }
}