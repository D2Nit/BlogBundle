<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_6e1dda04be0e67cc705178c475d6a103 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'form' => array($this, 'block_form'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if ((($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("VIEW", ), "method", false)) && (!twig_test_empty($this->getAttribute($this->getContext($context, 'admin'), "getViewFieldDescriptions", array(), "any", false))))) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("view", array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)), ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_view", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if ($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false)) {
            // line 21
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "            ";
        if ($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("LIST", ), "method", false)) {
            // line 24
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>
";
    }

    // line 30
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), "render", array(), "any", false);
    }

    // line 32
    public function block_form($context, array $blocks = array())
    {
        // line 33
        echo "
    ";
        // line 34
        if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
            // line 35
            echo "        ";
            $context['url'] = "edit";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            $context['url'] = "create";
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array($this->getContext($context, 'url'), array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false), "uniqid" => $this->getAttribute($this->getContext($context, 'admin'), "uniqid", array(), "any", false)), ), "method", false), "html");
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " method=\"POST\">

        ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "vars", array(), "any", false), "errors", array(), "any", false)) > 0)) {
            // line 43
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 44
            echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
            echo "
            </div>
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "formgroups", array(), "any", false));
        foreach ($context['_seq'] as $context['name'] => $context['form_group']) {
            // line 49
            echo "            ";
            if ($this->getContext($context, 'name')) {
                // line 50
                echo "                <fieldset>
                    <legend>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'name'), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "
                        ";
                // line 53
                if ($this->getAttribute($this->getContext($context, 'form_group'), "collapsed", array(), "any", false)) {
                    // line 54
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "</a>
                        ";
                }
                // line 56
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
            ";
            }
            // line 60
            echo "

            ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'form_group'), "fields", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['field_name']) {
                // line 63
                echo "                ";
                if ($this->getAttribute((($this->getAttribute(((array_key_exists("admin", $context)) ? (twig_default_filter($this->getContext($context, 'admin'))) : ("")), "formfielddescriptions", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'admin'), "formfielddescriptions", array(), "any", false))) : ("")), $this->getContext($context, 'field_name'), array(), "array", true)) {
                    // line 64
                    echo "                    ";
                    echo $this->env->getExtension('sonata_admin')->renderFormElement($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "formfielddescriptions", array(), "any", false), $this->getContext($context, 'field_name'), array(), "array", false), $this->getContext($context, 'form'), $this->getContext($context, 'object'));
                    echo "
                ";
                }
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 67
            echo "
            ";
            // line 68
            if ($this->getContext($context, 'name')) {
                // line 69
                echo "                    </div>
                </fieldset>
            ";
            }
            // line 72
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "
        ";
        // line 74
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

        ";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "isxmlhttprequest", array(), "any", false)) {
            // line 77
            echo "            ";
            if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
                // line 78
                echo "                <input type=\"submit\" name=\"btn_update\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                echo "\"/>
            ";
            } else {
                // line 80
                echo "                <input type=\"submit\" name=\"btn_create\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                echo "\"/>
            ";
            }
            // line 82
            echo "        ";
        } else {
            // line 83
            echo "            ";
            if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
                // line 84
                echo "                <input type=\"submit\" name=\"btn_update_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                <input type=\"submit\" name=\"btn_update_and_list\" value=\"";
                // line 85
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                echo "\"/>
            ";
            } else {
                // line 87
                echo "                <input type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                <input type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 88
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                echo "\"/>
            ";
            }
            // line 90
            echo "        ";
        }
        // line 91
        echo "    </form>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
