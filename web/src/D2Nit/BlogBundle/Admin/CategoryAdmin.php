<?php
Namespace D2Nit\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CategoryAdmin extends Admin
{
	protected $list = array(
		'name' => array('identifier' => true),
		'description'
	);
	
	protected $form = array(
		'name',
		'description'
	);
	
	protected $filter = array(
		'name'
	);
}