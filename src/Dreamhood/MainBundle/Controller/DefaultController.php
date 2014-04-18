<?php

namespace Dreamhood\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DreamhoodMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
