<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_58a1e88fd6f17ff68d4d3bdbe955cd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_element'), "vars", array(), "any", false), "id", array(), "any", false), "html");
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 21
        echo "
    <div class=\"sonata-ba-field sonata-ba-field-";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, 'edit'), "html");
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, 'inline'), "html");
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'field_element'), "vars", array(), "any", false), "errors", array(), "any", false)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        if ($this->getAttribute($this->getContext($context, 'field_description'), "help", array(), "any", false)) {
            // line 27
            echo "            <em class=\"sonata-ba-field-help\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</em>
        ";
        }
        // line 29
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 31
        $this->displayBlock('errors', $context, $blocks);
        // line 32
        echo "        </div>

    </div>
</div>";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'), $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "name", array(), "any", false));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'field_element'));
            echo "
        ";
        }
        // line 19
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'field_element'));
    }

    // line 27
    public function block_help($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field_description'), "help", array(), "any", false), "html");
    }

    // line 31
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'field_element'));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
