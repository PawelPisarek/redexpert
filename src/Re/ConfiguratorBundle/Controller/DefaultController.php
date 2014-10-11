<?php

namespace Re\ConfiguratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ReConfiguratorBundle:Default:index.html.twig', array('name' => $name));
    }
}
