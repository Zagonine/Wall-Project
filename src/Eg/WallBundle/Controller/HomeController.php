<?php

namespace Eg\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eg\WallBundle\Entity\Post;

class HomeController extends Controller
{


    /**
     * Home page, return all Posts
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        //Get all post
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('EgWallBundle:Post')->findAll();

        //Create Form insert Post
        $post = new Post();
        $form = $this->createForm('Eg\WallBundle\Form\PostType', $post, array('action' => $this->generateUrl('post_new')));
        
        return $this->render('EgWallBundle:Home:index.html.twig', array(
            'posts' => $posts,
            'form' => $form->createView()
        ));
    }
    
}
