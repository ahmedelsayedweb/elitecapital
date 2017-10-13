<?php

/* partials/top-nav.twig */
class __TwigTemplate_bb2af9dc120df61787cefdf51fd4dd91ec8cf20f1ececa27133eac695b439fe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- BEGIN NAVBAR-->
<div id=\"header-nav-offset\"></div>
<nav id=\"header-nav\" class=\"
navbar navbar--header
 ";
        // line 5
        if ($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "show_hero_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method")) {
            // line 6
            echo "    navbar--overlay
    ";
        } elseif ($this->getAttribute(        // line 7
(isset($context["layout"]) ? $context["layout"] : null), "show_slider_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method")) {
            // line 8
            echo "    navbar--overlay navbar--brand
 ";
        }
        // line 10
        echo " navbar--";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_position", array()), "html", null, true);
        echo "
\">
  <div class=\"container\">
    <div class=\"navbar__row js-navbar-row\">
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fn')->getCallable(), array("home_url")), "html", null, true);
        echo "\" class=\"navbar__brand\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('bloginfo')->getCallable(), array("name")), "html", null, true);
        echo "\">
        ";
        // line 15
        $context["header_logo_type"] = $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_type", array());
        // line 16
        echo "
        ";
        // line 17
        if (((isset($context["header_logo_type"]) ? $context["header_logo_type"] : null) == "text")) {
            // line 18
            echo "            ";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_text", array());
            echo "
        ";
        } elseif ((        // line 19
(isset($context["header_logo_type"]) ? $context["header_logo_type"] : null) == "image")) {
            // line 20
            echo "          ";
            if ( !twig_test_empty($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo", array()))) {
                // line 21
                echo "            ";
                if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "use_hero_logo", array()) &&  !twig_test_empty($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_hero", array())))) {
                    // line 22
                    echo "              <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo", array()), "html", null, true);
                    echo "\" class=\"navbar__brand-logo navbar__brand-logo--default\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('bloginfo')->getCallable(), array("name")), "html", null, true);
                    echo "\">
              <img src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_hero", array()), "html", null, true);
                    echo "\" class=\"navbar__brand-logo navbar__brand-logo--hero\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('bloginfo')->getCallable(), array("name")), "html", null, true);
                    echo "\">
            ";
                } else {
                    // line 25
                    echo "              <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo", array()), "html", null, true);
                    echo "\" class=\"navbar__brand-logo\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('bloginfo')->getCallable(), array("name")), "html", null, true);
                    echo "\">
            ";
                }
                // line 27
                echo "          ";
            }
            // line 28
            echo "
        ";
        } elseif ((        // line 29
(isset($context["header_logo_type"]) ? $context["header_logo_type"] : null) == "svg")) {
            // line 30
            echo "
          ";
            // line 31
            if ( !twig_test_empty($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_svg", array()))) {
                // line 32
                echo "            ";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "header_logo_svg", array());
                echo "
          ";
            }
            // line 34
            echo "
        ";
        } else {
            // line 36
            echo "          <svg class=\"navbar__brand-logo navbar__brand-logo--svg\">
            <use xlink:href=\"#icon-logo\"></use>
          </svg>
        ";
        }
        // line 40
        echo "      </a>
      ";
        // line 41
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 42
            echo "        ";
            echo call_user_func_array($this->env->getFunction('nav_menu')->getCallable(), array("logged_in_header_menu"));
            echo "
      ";
        } else {
            // line 44
            echo "        ";
            echo call_user_func_array($this->env->getFunction('nav_menu')->getCallable(), array("logged_out_header_menu"));
            echo "
      ";
        }
        // line 46
        echo "    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/top-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  132 => 44,  126 => 42,  124 => 41,  121 => 40,  115 => 36,  111 => 34,  105 => 32,  103 => 31,  100 => 30,  98 => 29,  95 => 28,  92 => 27,  84 => 25,  77 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  57 => 18,  55 => 17,  52 => 16,  50 => 15,  44 => 14,  36 => 10,  32 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/top-nav.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\partials\\top-nav.twig");
    }
}
