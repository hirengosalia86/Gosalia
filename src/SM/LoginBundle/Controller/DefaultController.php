<?php

namespace SM\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SMLoginBundle:Default:index.html.twig', array('name' => $name));
    }
}
