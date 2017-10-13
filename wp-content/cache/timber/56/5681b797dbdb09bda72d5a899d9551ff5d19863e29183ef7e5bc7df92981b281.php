<?php

/* modules/contact/template.twig */
class __TwigTemplate_eed417eb9c2c5595a2d52039b58f843d579c40cb18131681ad6dce8d05bde544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/contact/template.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-archive.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"site site--main\">
    ";
        // line 6
        $this->loadTemplate("modules/contact/template.twig", "modules/contact/template.twig", 6, "1418546489")->display($context);
        // line 88
        echo "  </div>

";
    }

    // line 91
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "modules/contact/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 91,  37 => 88,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contact/template.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\contact\\template.twig");
    }
}


/* modules/contact/template.twig */
class __TwigTemplate_eed417eb9c2c5595a2d52039b58f843d579c40cb18131681ad6dce8d05bde544_1418546489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/contact/template.twig", 6);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "section-widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["__internal_37e282000050e4a69736be696366299b680533d228c3c4d6fac274e952f5f7d4"] = $this->loadTemplate("macro.twig", "modules/contact/template.twig", 7);
        // line 8
        $context["widget_class"] = "landing";
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        echo $context["__internal_37e282000050e4a69736be696366299b680533d228c3c4d6fac274e952f5f7d4"]->getwidget_header($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subtitle", array()));
        echo "
      ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"contacts\">
          <div class=\"contacts__column\">
            <div class=\"contacts__address\">
              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 19
            echo "                <address class=\"contacts__address-item\">
                  ";
            // line 20
            if ($this->getAttribute($context["section"], "group_name", array())) {
                // line 21
                echo "                    <span class=\"contacts__address-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "group_name", array()), "html", null, true);
                echo "</span>
                  ";
            }
            // line 23
            echo "                  ";
            if ($this->getAttribute($context["section"], "address", array())) {
                // line 24
                echo "                    <dl class=\"contacts__address-column\">
                      <dt class=\"contacts__address-column__title\">";
                // line 25
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Address:", "realtyspace")), "html", null, true);
                echo "</dt>
                      <dd>";
                // line 26
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["section"], "address", array()), "html", null, true));
                echo "</dd>
                    </dl>
                  ";
            }
            // line 29
            echo "                  ";
            if (($this->getAttribute($context["section"], "phone", array()) || $this->getAttribute($context["section"], "fax", array()))) {
                // line 30
                echo "                    <dl class=\"contacts__address-column\">
                      ";
                // line 31
                if ($this->getAttribute($context["section"], "phone", array())) {
                    // line 32
                    echo "                        <dt class=\"contacts__address-column__title\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Telephone:", "realtyspace")), "html", null, true);
                    echo "</dt>
                        <dd>";
                    // line 33
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["section"], "phone", array()), "html", null, true));
                    echo "</dd>
                      ";
                }
                // line 35
                echo "                      ";
                if ($this->getAttribute($context["section"], "fax", array())) {
                    // line 36
                    echo "                        <dt class=\"contacts__address-column__title\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Fax:", "realtyspace")), "html", null, true);
                    echo "</dt>
                        <dd>";
                    // line 37
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["section"], "fax", array()), "html", null, true));
                    echo "</dd>
                      ";
                }
                // line 39
                echo "                    </dl>
                  ";
            }
            // line 41
            echo "                  ";
            if (($this->getAttribute($context["section"], "emails", array()) || $this->getAttribute($context["section"], "working_hours", array()))) {
                // line 42
                echo "                    <dl class=\"contacts__address-column\">
                      ";
                // line 43
                if ($this->getAttribute($context["section"], "emails", array())) {
                    // line 44
                    echo "                        <dt class=\"contacts__address-column__title\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Email:", "realtyspace")), "html", null, true);
                    echo "</dt>
                        <dd>
                          ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "emails", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                        // line 47
                        echo "                            <a href=\"mailto:";
                        echo antispambot($this->getAttribute($context["email"], "email", array()));
                        echo "\">
                              ";
                        // line 48
                        echo antispambot($this->getAttribute($context["email"], "email", array()));
                        echo "
                            </a><br>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                        </dd>
                      ";
                }
                // line 53
                echo "                      ";
                if ($this->getAttribute($context["section"], "working_hours", array())) {
                    // line 54
                    echo "                        <dt class=\"contacts__address-column__title\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Working hours", "realtyspace")), "html", null, true);
                    echo ":</dt>
                        <dd>";
                    // line 55
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["section"], "working_hours", array()), "html", null, true));
                    echo "</dd>
                      ";
                }
                // line 57
                echo "                    </dl>
                  ";
            }
            // line 59
            echo "                </address>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
            ";
        // line 62
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contactform7_id", array())) {
            // line 63
            echo "              <div class=\"contacts__form form\">
                ";
            // line 64
            echo do_shortcode((("[contact-form-7 id='" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contactform7_id", array())) . "']"));
            echo "
              </div>
            ";
        }
        // line 67
        echo "          </div>
          <div class=\"contacts__column\">
            <div class=\"contacts__body\">
              ";
        // line 70
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
            ";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_profiles", array())) {
            // line 73
            echo "              <div class=\"contacts__social\">
                <div class=\"social social--worker social--contacts\">
                  <span class=\"contacts__social-title\">";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Our social profiles", "realtyspace")), "html", null, true);
            echo ":</span>
                  ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_profiles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["social_profile"]) {
                // line 77
                echo "                    <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["social_profile"], "url", array()), "html", null, true);
                echo "\" class=\"social__item\">
                      <i class=\"fa ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["social_profile"], "icon", array()), "html_attr");
                echo "\"></i>
                    </a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                </div>
              </div>
            ";
        }
        // line 84
        echo "          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "modules/contact/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 84,  304 => 81,  295 => 78,  290 => 77,  286 => 76,  282 => 75,  278 => 73,  276 => 72,  271 => 70,  266 => 67,  260 => 64,  257 => 63,  255 => 62,  252 => 61,  245 => 59,  241 => 57,  236 => 55,  231 => 54,  228 => 53,  224 => 51,  215 => 48,  210 => 47,  206 => 46,  200 => 44,  198 => 43,  195 => 42,  192 => 41,  188 => 39,  183 => 37,  178 => 36,  175 => 35,  170 => 33,  165 => 32,  163 => 31,  160 => 30,  157 => 29,  151 => 26,  147 => 25,  144 => 24,  141 => 23,  135 => 21,  133 => 20,  130 => 19,  126 => 18,  121 => 15,  118 => 14,  111 => 11,  108 => 10,  104 => 6,  102 => 8,  100 => 7,  85 => 6,  43 => 91,  37 => 88,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contact/template.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\contact\\template.twig");
    }
}
