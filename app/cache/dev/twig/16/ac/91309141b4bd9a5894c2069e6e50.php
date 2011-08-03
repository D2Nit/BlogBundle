<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_16ac91309141b4bd9a5894c2069e6e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<div>
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 21
        echo "
    <div class=\"sonata-ba-field";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'filter_form'), "vars", array(), "any", false), "errors", array(), "any", false)) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "    </div>
</div>";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute((($this->getAttribute((($this->getAttribute(((array_key_exists("filter", $context)) ? (twig_default_filter($this->getContext($context, 'filter'))) : ("")), "fielddescription", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'filter'), "fielddescription", array(), "any", false))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, 'filter'), "fielddescription", array(), "any", false), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'filter_form'), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'filter'), "fielddescription", array(), "any", false), "options", array(), "any", false), "name", array(), "any", false));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'filter_form'));
            echo "
        ";
        }
        // line 19
        echo "        <br />
    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'filter_form'));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
