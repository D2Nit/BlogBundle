<?php
Namespace D2Nit\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CommentAdmin extends Admin
{
	protected $list = array(
		'id' => array('identifier' => true),
		'body',
		'createAt'
	);

	protected $form = array(
		'body',
		'article' => array('edit' => 'list')
	);
}