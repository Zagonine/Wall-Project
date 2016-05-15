<?php

namespace Eg\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EgWallBundle:Default:index.html.twig');
    }
}
