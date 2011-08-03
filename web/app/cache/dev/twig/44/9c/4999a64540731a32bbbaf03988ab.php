<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_449c4999a64540731a32bbbaf03988ab extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
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
        if ($this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false)) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "        </ul>
    </div>
";
    }

    // line 24
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), "render", array(), "any", false);
    }

    // line 31
    public function block_table_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <tr class=\"sonata-ba-list-field-header\">
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['field_description']) {
            // line 34
            echo "                            ";
            if ((($this->getAttribute($this->getContext($context, 'field_description'), "getOption", array("code", ), "method", false) == "_batch") && (twig_length_filter($this->env, $this->getContext($context, 'batchactions')) > 0))) {
                // line 35
                echo "                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                  <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                </th>
                            ";
            } else {
                // line 39
                echo "                                ";
                $context['sortable'] = false;
                // line 40
                echo "                                ";
                if (($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "sortable", array(), "any", true) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "sortable", array(), "any", false))) {
                    // line 41
                    echo "                                    ";
                    $context['sortable'] = true;
                    // line 42
                    echo "                                    ";
                    $context['current'] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), "_sort_by", array(), "any", false) == $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "sortable", array(), "any", false));
                    // line 43
                    echo "                                    ";
                    $context['sort_parameters'] = $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "sortparameters", array($this->getContext($context, 'field_description'), $this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), ), "method", false);
                    // line 44
                    echo "                                    ";
                    $context['sort_active_class'] = (($this->getContext($context, 'current')) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 45
                    echo "                                    ";
                    $context['sort_by'] = (($this->getContext($context, 'current')) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), "_sort_order", array(), "any", false)) : ($this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "_sort_order", array(), "any", false)));
                    // line 46
                    echo "                                ";
                }
                // line 47
                echo "
                                ";
                // line 48
                ob_start();
                // line 49
                echo "                                    <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field_description'), "type", array(), "any", false), "html");
                echo " ";
                if ($this->getContext($context, 'sortable')) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, 'sort_by')), "html");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'sort_active_class'), "html");
                }
                echo "\">
                                        ";
                // line 50
                if ($this->getContext($context, 'sortable')) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getContext($context, 'sort_parameters'), ), "method", false), "html");
                    echo "\">";
                }
                // line 51
                echo "
                                        ";
                // line 52
                if ($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
                    // line 53
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "name", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                    echo "
                                        ";
                } else {
                    // line 55
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'field_description'), "name", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                    echo "
                                        ";
                }
                // line 57
                echo "
                                        ";
                // line 58
                if ($this->getContext($context, 'sortable')) {
                    echo "</a>";
                }
                // line 59
                echo "                                    </th>
                                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 61
                echo "                            ";
            }
            // line 62
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "                    </tr>
                ";
    }

    // line 66
    public function block_table_body($context, array $blocks = array())
    {
        // line 67
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "results", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['object']) {
            // line 68
            echo "                        <tr>
                            ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['field_description']) {
                // line 70
                echo "                                ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, 'object'), $this->getContext($context, 'field_description'));
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 72
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "                ";
    }

    // line 76
    public function block_table_footer($context, array $blocks = array())
    {
        // line 77
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "haveToPaginate", array(), "method", false)) {
            // line 78
            echo "                        <tr>
                            <td colspan=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false)), "html");
            echo "\" class=\"pager\">
                                <ul>
                                    ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false) != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "previouspage", array(), "any", false))) {
                // line 82
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), array("_page" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "previouspage", array(), "any", false))), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_previous_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                    ";
            }
            // line 84
            echo "
                                    ";
            // line 86
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "getLinks", array(5, ), "method", false));
            foreach ($context['_seq'] as $context['_key'] => $context['page']) {
                // line 87
                echo "                                        ";
                if (($this->getContext($context, 'page') == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false))) {
                    // line 88
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</li>
                                        ";
                } else {
                    // line 90
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), array("_page" => $this->getContext($context, 'page'))), ), "method", false), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</a></li>
                                        ";
                }
                // line 92
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 93
            echo "
                                    ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false) != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "nextpage", array(), "any", false))) {
                // line 95
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), array("_page" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "nextpage", array(), "any", false))), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_next_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                    ";
            }
            // line 97
            echo "                                </ul>
                            </td>
                        </tr>
                    ";
        }
        // line 101
        echo "                ";
    }

    // line 26
    public function block_list_table($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context['batchactions'] = $this->getAttribute($this->getContext($context, 'admin'), "batchactions", array(), "any", false);
        // line 28
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "results", array(), "any", false)) > 0)) {
            // line 29
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("batch", $this->getAttribute($this->getContext($context, 'admin'), "filterParameters", array(), "any", false), ), "method", false), "html");
            echo "\" method=\"POST\" >
            <table>
                ";
            // line 31
            $this->displayBlock('table_header', $context, $blocks);
            // line 65
            echo "
                ";
            // line 66
            $this->displayBlock('table_body', $context, $blocks);
            // line 75
            echo "
                ";
            // line 76
            $this->displayBlock('table_footer', $context, $blocks);
            // line 102
            echo "            </table>

            ";
            // line 104
            if ((twig_length_filter($this->env, $this->getContext($context, 'batchactions')) > 0)) {
                // line 105
                echo "                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$){
                       \$('#list_batch_checkbox').click(function(){
                           \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked'));
                       });
                       \$('.delete_link').click(function(e){
                          if (!confirm('";
                // line 111
                echo $this->env->getExtension('translator')->getTranslator()->trans("confirm_msg", array(), "SonataAdminBundle");
                echo "')) e.preventDefault();
                       });
                    });
                </script>

                <div class=\"sonata-ba-list-actions\">
                    <select name=\"action\">
                        ";
                // line 118
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'batchactions'));
                foreach ($context['_seq'] as $context['action'] => $context['label']) {
                    // line 119
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'action'), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 121
                echo "                    </select>
                    <input type=\"checkbox\" name=\"all_elements\" id=\"execute_on_matching\"  />
                    <label for=\"execute_on_matching\">";
                // line 123
                echo $this->env->getExtension('translator')->getTranslator()->trans("all_elements", array(), "SonataAdminBundle");
                echo "</label>
                    <input type=\"submit\" value=\"";
                // line 124
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_batch", array(), "SonataAdminBundle");
                echo "\" />
                </div>
            ";
            }
            // line 127
            echo "        </form>
    ";
        } else {
            // line 129
            echo "        <p class=\"notice\">
          ";
            // line 130
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_result", array(), "SonataAdminBundle");
            // line 131
            echo "        </p>
    ";
        }
    }

    // line 135
    public function block_list_filters($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "filters", array(), "any", false)) {
            // line 137
            echo "        <form class=\"sonata-filter-form\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\" method=\"GET\">
            ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "filters", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['filter']) {
                // line 139
                echo "                <div>
                    ";
                // line 140
                echo $this->env->getExtension('sonata_admin')->renderFilterElement($this->getContext($context, 'filter'));
                echo "</td>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 143
            echo "
            <input type=\"submit\" value=\"";
            // line 144
            echo $this->env->getExtension('translator')->getTranslator()->trans("btn_filter", array(), "SonataAdminBundle");
            echo "\" />

            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_reset_filter", array(), "SonataAdminBundle");
            echo "</a>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
