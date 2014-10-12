<?php

namespace Re\ConfiguratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReConfiguratorBundle:Homepage:index.html.twig');
    }
}
