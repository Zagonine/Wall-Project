<?php

namespace Eg\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{


    /**
     * Home page, return all Posts
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('EgWallBundle:Post')->findAll();
        
        return $this->render('EgWallBundle:Home:index.html.twig', array(
            'posts' => $posts,
        ));
    }
    
}
