<?php

namespace a\aBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('aaBundle:Default:index.html.twig', array('name' => $name));
    }
}
