<?php

namespace D2Nit\BlogBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;

class CommentAdminController extends Controller
{
	protected $list = array(
		'id' => array('identifier' => true),
		'article'
	);
}