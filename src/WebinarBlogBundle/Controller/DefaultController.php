<?php

namespace WebinarBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebinarBlogBundle:Default:index.html.twig');
    }
}
