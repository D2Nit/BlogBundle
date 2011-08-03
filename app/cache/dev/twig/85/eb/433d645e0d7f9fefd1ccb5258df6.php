<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_85eb433d645e0d7f9fefd1ccb5258df6 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->getContext($context, 'base_template');
            if (!$this->parent instanceof Twig_Template) {
                $this->parent = $this->env->loadTemplate($this->parent);
            }
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'groups'));
        foreach ($context['_seq'] as $context['code'] => $context['group']) {
            // line 19
            echo "        <table class=\"sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'code'), array(), "SonataAdminBundle"), "html");
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'group'));
            foreach ($context['_seq'] as $context['_key'] => $context['admin']) {
                // line 28
                echo "                    <tr>
                        <td class=\"sonata-ba-list-label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'admin'), "label", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "</td>
                        <td>
                            ";
                // line 31
                if ($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false)) {
                    // line 32
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                    echo "\" /> ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "</a>
                            ";
                }
                // line 34
                echo "                        </td>
                        <td>
                            ";
                // line 36
                if ($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("LIST", ), "method", false)) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html");
                    echo "\" />";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                    echo "</a>
                            ";
                }
                // line 39
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
