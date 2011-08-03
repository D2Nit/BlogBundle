<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_f69c1fe0540f5ecbadf73a3c1efa5e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<div>

    <div class=\"sonata-ba-field ";
        // line 14
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_element'), "vars", array(), "any", false), "errors", array(), "any", false)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 15
        $this->displayBlock('field', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 26
        $this->displayBlock('errors', $context, $blocks);
        // line 27
        echo "        </div>

    </div>
</div>";
    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'field_element'));
    }

    // line 16
    public function block_label($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        if ($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
            // line 18
            echo "                ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'), $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "name", array(), "any", false));
            echo "
            ";
        } else {
            // line 20
            echo "                ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'));
            echo "
            ";
        }
        // line 22
        echo "            <br />
        ";
    }

    // line 26
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'field_element'));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
