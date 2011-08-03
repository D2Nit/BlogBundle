<?php
Namespace D2Nit\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ArticleAdmin extends Admin
{
	protected $list = array(
		'identifier' => array('identifier' => true),
		'title',
		'author'
	);
	
	protected $form = array(
		'author' => array('edit' => 'list'),
		'permalink',
		'title' => array('form_fields_options' => array('required' => true)),
		'isCommentable' => array('form_fields_options' => array('required' => false))
	);
	
	protected $filter = array('author');
}