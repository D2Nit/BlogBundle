<?php

namespace D2Nit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('D2NitBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
