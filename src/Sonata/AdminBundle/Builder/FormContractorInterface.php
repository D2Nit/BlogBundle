<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Builder;

use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Model\ModelManagerInterface;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;

interface FormContractorInterface
{

    /**
     * @abstract
     * @param \Symfony\Component\Form\FieldFactory\FormFactoryInterface $formFactory
     */
    function __construct(FormFactoryInterface $formFactory);

    /**
     * @abstract
     * @param \Symfony\Component\Form\FormBuilder $formBuilder
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @return void
     */
    function addField(FormBuilder $formBuilder, FieldDescriptionInterface $fieldDescription);

    /**
     * @abstract
     * @param \Sonata\AdminBundle\Admin\AdminInterface $admin
     * @param \Sonata\AdminBundle\Admin\FieldDescriptionInterface $fieldDescription
     * @param array $options
     * @return void
     */
    function fixFieldDescription(AdminInterface $admin, FieldDescriptionInterface $fieldDescription, array $options = array());

    /**
     * @abstract
     * @param string $name
     * @param array $options
     * @return void
     */
    function getFormBuilder($name, array $options = array());
}
