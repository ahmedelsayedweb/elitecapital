<?php

/* modules/property/submit-list.twig */
class __TwigTemplate_334cba98cd76b54008fc8ec759b8d83f114dfcba7bfa4f092aa6fbc8ee46f6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/property/submit-list.twig", 1);
        $this->blocks = array(
            'js_controller' => array($this, 'block_js_controller'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-archive.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_323013945deb4d6e1d8ab5c6c74d9e1f78fe9916f8076a5b1b23a7bd417b44ba"] = $this->loadTemplate("macro.twig", "modules/property/submit-list.twig", 3);
        // line 4
        $context["__internal_1ed0265ef69a5ec8a9916342443855c17f5f7a8ad63737707b477a214c4fed0a"] = $this->loadTemplate("modules/property/macro.twig", "modules/property/submit-list.twig", 4);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_js_controller($context, array $blocks = array())
    {
        echo "submitList";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"site site--main\">
    <header class=\"site__header\">
      <h1 class=\"site__title ";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('preview_hook')->getCallable(), array("js-archive-title")), "html", null, true);
        echo "\">
        ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "
      </h1>
      <h2 class=\"site__headline ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('preview_hook')->getCallable(), array("js-archive-subtitle")), "html", null, true);
        echo "\">
        ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subtitle", array());
        echo "
      </h2>
    </header>
    <div class=\"site__panel\">
      ";
        // line 17
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "submit_page_id", array())) {
            // line 18
            echo "        <div class=\"pull-right\">
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "page_url", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "submit_page_id", array())), "method"), "esc_url"), "html", null, true);
            echo "\" class=\"btn--action\">
            ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Submit property", "realtyspace")), "html", null, true);
            echo "
          </a>
        </div>

      ";
        }
        // line 25
        echo "    </div>
    <div class=\"site__main\">
      ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "properties", array())) {
            // line 28
            echo "        <div class=\"listing listing--grid properties properties--grid js-property-list\">
          ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "properties", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 30
                echo "            <div class=\"listing__item\">
              <div class=\"properties__item js-property-item-container\">
                <div class=\"js-property-item\">
                  <div class=\"properties__header\">
                                <span class=\"js-property-status properties__state
                                ";
                // line 35
                if (($this->getAttribute($context["property"], "status", array()) == "draft")) {
                    // line 36
                    echo "                                properties__state--hidden
                                ";
                } elseif (($this->getAttribute(                // line 37
$context["property"], "status", array()) == "pending")) {
                    // line 38
                    echo "                                properties__state--pending
                                ";
                } elseif (($this->getAttribute(                // line 39
$context["property"], "status", array()) != "publish")) {
                    // line 40
                    echo "                                properties__state--hidden
                                ";
                } elseif (($this->getAttribute(                // line 41
$context["property"], "status", array()) == "publish")) {
                    // line 42
                    echo "                                properties__state--default
                                ";
                }
                // line 43
                echo "\">
                                      ";
                // line 44
                if (($this->getAttribute($context["property"], "status", array()) == "draft")) {
                    // line 45
                    echo "                                        ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Awaiting payment", "realtyspace")), "html", null, true);
                    echo "
                                      ";
                } elseif (($this->getAttribute(                // line 46
$context["property"], "status", array()) == "pending")) {
                    // line 47
                    echo "                                        ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Awaiting review", "realtyspace")), "html", null, true);
                    echo "
                                      ";
                } elseif (($this->getAttribute(                // line 48
$context["property"], "status", array()) != "publish")) {
                    // line 49
                    echo "                                        ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Hidden", "realtyspace")), "html", null, true);
                    echo "
                                      ";
                } elseif (($this->getAttribute(                // line 50
$context["property"], "status", array()) == "publish")) {
                    // line 51
                    echo "                                        ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Published", "realtyspace")), "html", null, true);
                    echo "
                                      ";
                }
                // line 53
                echo "                                </span>
                    <div class=\"properties__right\">
                      ";
                // line 55
                if (twig_in_filter($this->getAttribute($context["property"], "status", array()), array(0 => "publish", 1 => "private"))) {
                    // line 56
                    echo "                        <a
                            href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "route_ajax_url", array(0 => "frontSubmitHideProperty"), "method"), "html", null, true);
                    echo "\"
                            data-ajax-id=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "id", array()), "html", null, true);
                    echo "\"
                            class=\"properties__link js-property-hide ";
                    // line 59
                    if ($this->getAttribute($context["property"], "has_private_status", array())) {
                        echo "hide";
                    }
                    echo "\"
                        >
                          ";
                    // line 61
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Hide", "realtyspace")), "html", null, true);
                    echo "
                        </a>
                        <a
                            href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "route_ajax_url", array(0 => "frontSubmitShowProperty"), "method"), "html", null, true);
                    echo "\"
                            data-ajax-id=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "id", array()), "html", null, true);
                    echo "\"
                            class=\"properties__link js-property-show ";
                    // line 66
                    if ($this->getAttribute($context["property"], "has_published_status", array())) {
                        echo "hide";
                    }
                    echo "\"
                        >
                          ";
                    // line 68
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Show", "realtyspace")), "html", null, true);
                    echo "
                        </a>
                      ";
                }
                // line 71
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "page_url", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "submit_page_id", array()), 1 => array("pid" => $this->getAttribute($context["property"], "id", array()))), "method"), "esc_url"), "html", null, true);
                echo "\" class=\"properties__link\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Edit", "realtyspace")), "html", null, true);
                echo "
                      </a>
                      <button
                          data-url=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "route_ajax_url", array(0 => "frontSubmitDeleteProperty"), "method"), "html", null, true);
                echo "\"
                          data-ajax-id=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "id", array()), "html", null, true);
                echo "\"
                          data-toggle=\"modal\" data-target=\"#delete-modal\"
                          class=\"properties__link js-property-delete\">
                        ";
                // line 79
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Delete", "realtyspace")), "html", null, true);
                echo "
                      </button>
                    </div>
                  </div>
                  ";
                // line 83
                $context["display_link"] = twig_in_filter($this->getAttribute($context["property"], "status", array()), array(0 => "private", 1 => "publish"));
                // line 84
                echo "                  <div class=\"properties__thumb\">
                    ";
                // line 85
                echo $context["__internal_1ed0265ef69a5ec8a9916342443855c17f5f7a8ad63737707b477a214c4fed0a"]->getthumbnail($context["property"], false, true, true, (isset($context["display_link"]) ? $context["display_link"] : null));
                echo "
                  </div>
                  <div class=\"properties__info\">
                    ";
                // line 88
                echo $context["__internal_1ed0265ef69a5ec8a9916342443855c17f5f7a8ad63737707b477a214c4fed0a"]->getaddress_link($context["property"], true, (isset($context["display_link"]) ? $context["display_link"] : null));
                echo "

                    ";
                // line 90
                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "payments_enabled", array()) && ($this->getAttribute($context["property"], "status", array()) == "draft"))) {
                    // line 91
                    echo "                      ";
                    echo $context["__internal_1ed0265ef69a5ec8a9916342443855c17f5f7a8ad63737707b477a214c4fed0a"]->getpaypal_btn($context["property"]);
                    echo "
                    ";
                }
                // line 93
                echo "                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
        </div>
      ";
        } else {
            // line 101
            echo "        ";
            echo twig_include($this->env, $context, "partials/no-results.twig", array("classes" => "listing__empty--properties", "title" => call_user_func_array($this->env->getFunction('__')->getCallable(), array("You did not submit any properties yet", "realtyspace"))));
            // line 104
            echo "
      ";
        }
        // line 106
        echo "    </div>
  </div>
  <div id=\"delete-modal\" tabindex=\"-1\" role=\"dialog\" class=\"modal fade\">
    <div role=\"document\" class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          ";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Are you sure?", "realtyspace")), "html", null, true);
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn--primary js-submit\">";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Delete", "realtyspace")), "html", null, true);
        echo "</button>
          <button type=\"button\" data-dismiss=\"modal\" class=\"btn--default\">";
        // line 121
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Cancel", "realtyspace")), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "modules/property/submit-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 121,  301 => 120,  295 => 117,  282 => 106,  278 => 104,  275 => 101,  270 => 98,  260 => 93,  254 => 91,  252 => 90,  247 => 88,  241 => 85,  238 => 84,  236 => 83,  229 => 79,  223 => 76,  219 => 75,  213 => 72,  208 => 71,  202 => 68,  195 => 66,  191 => 65,  187 => 64,  181 => 61,  174 => 59,  170 => 58,  166 => 57,  163 => 56,  161 => 55,  157 => 53,  151 => 51,  149 => 50,  144 => 49,  142 => 48,  137 => 47,  135 => 46,  130 => 45,  128 => 44,  125 => 43,  121 => 42,  119 => 41,  116 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  104 => 35,  97 => 30,  93 => 29,  90 => 28,  88 => 27,  84 => 25,  76 => 20,  72 => 19,  69 => 18,  67 => 17,  60 => 13,  56 => 12,  51 => 10,  47 => 9,  43 => 7,  40 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/submit-list.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\property\\submit-list.twig");
    }
}
