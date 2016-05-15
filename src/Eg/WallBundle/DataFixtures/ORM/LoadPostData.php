<?php
/**
 * Created with <3 by Zagonine <hello@zagonine.io>
 * on 15/05/2016.
 */


namespace Eg\WallBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Eg\WallBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $post1 = new Post();
        $post1
            ->setPseudo('Enzo')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor sed ligula a vulputate. Sed vehicula quam id ante posuere, ac laoreet dolor gravida. Donec id sodales diam, sed laoreet purus. Maecenas lacinia sagittis ullamcorper. Suspendisse sodales arcu at ante porta mollis. Quisque vitae lacus magna. Proin faucibus egestas est, quis viverra arcu interdum nec. Donec scelerisque orci nisi, vel tristique enim feugiat at.')
            ->addCategory($this->getReference('fun'))
            ->addCategory($this->getReference('decale'));
        $manager->persist($post1);

        $post2 = new Post();
        $post2
            ->setPseudo('Francis')
            ->setContent('Donec justo elit, faucibus vitae posuere non, interdum sed odio. Maecenas maximus vitae libero ac aliquet. Ut aliquam tincidunt turpis, in sagittis nunc congue sit amet. Ut turpis lacus, fringilla eget ullamcorper cursus, rhoncus sed nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.')
            ->addCategory($this->getReference('aventure'));
        $manager->persist($post2);

        $post3 = new Post();
        $post3
            ->setPseudo('René')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor sed ligula a vulputate. Sed vehicula quam id ante posuere, ac laoreet dolor gravida. Donec id sodales diam, sed laoreet purus. Maecenas lacinia sagittis ullamcorper.')
            ->addCategory($this->getReference('fun'))
            ->addCategory($this->getReference('aventure'));
        $manager->persist($post3);

        $post4 = new Post();
        $post4
            ->setPseudo('Simone')
            ->setContent('In euismod egestas lacus quis interdum. Phasellus eget risus quis orci egestas maximus quis eget quam. Donec vehicula scelerisque lacinia. Cras ut sem nisi.')
            ->addCategory($this->getReference('fun'));
        $manager->persist($post4);

        $post5 = new Post();
        $post5
            ->setPseudo('Lily')
            ->setContent('Morbi nec nisi mauris. Aliquam erat volutpat. Proin eu nulla viverra, porttitor eros ut, dictum metus. Phasellus ullamcorper diam eu justo elementum, sit amet suscipit leo condimentum. Nulla fermentum, lacus et mollis tempor, massa nunc gravida justo, vitae dapibus tortor orci et mi. Duis viverra nec nisi sit amet sodales.')
            ->addCategory($this->getReference('fun'))
            ->addCategory($this->getReference('decale'))
            ->addCategory($this->getReference('aventure'));
        $manager->persist($post5);

        $manager->flush();
    }


    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}