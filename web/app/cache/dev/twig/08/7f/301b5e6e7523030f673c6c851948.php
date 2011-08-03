<?php

/* D2NitBlogBundle:Default:index.html.twig */
class __TwigTemplate_087f301b5e6e7523030f673c6c851948 extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "D2NitBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
