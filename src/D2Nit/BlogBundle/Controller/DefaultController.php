<?php

namespace D2Nit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\MenuBundle\MenuItem;


class DefaultController extends Controller
{
	public function menuAction()
	{
		$categories = $this->getDoctrine()
			->getRepository('D2NitBlogBundle:Category')
			->getAll();

		$router = $this->get('router');
		$menu = new MenuItem('categories');
					
		$menu->addChild('Home', $router->generate('D2NitBlogBundle_homepage'));
		
		foreach ($categories as $category)
		{
			$menu->addChild($category->getName(), $router->generate('D2NitBlogBundle_category_show', array('category' => $category->getId())));
		}	
			
		
		return $menu->render();
	}
    
    public function indexAction()
    {
        return $this->render('D2NitBlogBundle:Default:index.html.twig');
    }
}
