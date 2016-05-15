<?php

namespace Eg\WallBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eg\WallBundle\Entity\Post;
use Eg\WallBundle\Form\PostType;

/**
 * Post controller.
 *
 */
class PostController extends Controller
{

    /**
     * Creates a new Post entity.
     *
     */
    public function newAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm('Eg\WallBundle\Form\PostType', $post);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('eg_wall_homepage');
        }

        return $this->redirectToRoute('eg_wall_homepage', [
            'request' => $request
        ], 307);
    }
    
}
