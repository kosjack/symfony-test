<?php

namespace LuxSiteUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        


        return $this->render('LuxSiteUserBundle:Default:index.html.twig');
    }
}
