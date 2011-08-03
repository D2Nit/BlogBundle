<?php
namespace D2Nit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
	public function showAction($category, $identifier)
	{
		$article = $this->getDoctrine()
			->getRepository('D2NitBlogBundle:Article')
			->find($identifier);
		
		if (!$article)
			throw $this->createNotFoundException('Article not found');	
			
		return $this->render('D2NitBlogBundle:Article:show.html.twig',
			array('article' => $article));
	}
}