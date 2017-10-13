<?php

/* partials/hero-unit.twig */
class __TwigTemplate_a1cf28e35ae09aee30d84e345e833878282dc8a27c3871a285f7c642d0281241 extends Twig_Template
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
        echo "<div class=\"widgets ";
        if ($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "prefix", array())) {
            echo " hero-unit__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "prefix", array()), "html_attr");
        }
        echo "\">
  ";
        // line 2
        if (($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "content_type", array()) == "map")) {
            // line 3
            echo "    <div class=\"contacts__map\">
      <div class=\"map map--contacts js-dapi-gmap\"
           data-lat=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lat", array()), "html", null, true);
            echo "\"
           data-long=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lng", array()), "html", null, true);
            echo "\"
           data-clat=\"";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array(), "any", false, true), "center_lat", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array(), "any", false, true), "center_lat", array()), $this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lat", array()))) : ($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lat", array()))), "html", null, true);
            echo "\"
           data-clong=\"";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array(), "any", false, true), "center_lng", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array(), "any", false, true), "center_lng", array()), $this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lng", array()))) : ($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map", array()), "lng", array()))), "html", null, true);
            echo "\"
           data-zoom=\"";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map_zoom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map_zoom", array()), 15)) : (15)), "html", null, true);
            echo "\"
          ";
            // line 10
            if ($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map_infobox_text", array())) {
                // line 11
                echo "            data-infobox-text=\"";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "map_infobox_text", array()), "html", null, true));
                echo "\"
            data-infobox-template=\"#";
                // line 12
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('js_template')->getCallable(), array("contact-map-tooltip", "modules/contact/map-tooltip.twig")), "html", null, true);
                echo "\"
            data-infobox-theme=\"white\"
          ";
            }
            // line 15
            echo "      >
        <div class=\"map__buttons\">
          <button data-map-button type=\"button\" class=\"map__change-map\">";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Address Map", "realtyspace")), "html", null, true);
            echo "</button>
        </div>
        <div class=\"map__wrap\">
          <div data-map-canvas class=\"map__view\"></div>
        </div>
      </div>
    </div>
  ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["hero_unit"]) ? $context["hero_unit"] : null), "content_type", array()) == "image")) {
            // line 25
            echo "    <div class=\"banner banner--subpage\">
      <div class=\"banner__item\">
        <div class=\"banner__preview\">
          <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "background_image", array(), "any", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "background_image", array(), "any", false, true), "src", array()), "holder.js/100px510?auto=yes&text=&font=FontAwesome")) : ("holder.js/100px510?auto=yes&text=&font=FontAwesome")), "html", null, true);
            echo "\" class=\"banner__img\">
        </div>
        <div class=\"banner__caption\">
          <div class=\"container\">

            ";
            // line 33
            if ($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "use_page_title", array())) {
                // line 34
                echo "              ";
                if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                    // line 35
                    echo "                <h2 class=\"banner__title\">";
                    echo (isset($context["title"]) ? $context["title"] : null);
                    echo "</h2>
              ";
                }
                // line 37
                echo "              ";
                if ( !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : null))) {
                    // line 38
                    echo "                <h4 class=\"banner__subtitle\">";
                    echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
                    echo "</h4>
              ";
                }
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "              ";
                if ( !twig_test_empty($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "custom_title", array()))) {
                    // line 42
                    echo "                <h2 class=\"banner__title\">";
                    echo $this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "custom_title", array());
                    echo "</h2>
              ";
                }
                // line 44
                echo "              ";
                if ( !twig_test_empty($this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "custom_subtitle", array()))) {
                    // line 45
                    echo "                <h4 class=\"banner__subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hero_unit"]) ? $context["hero_unit"] : null), "custom_subtitle", array()), "html", null, true);
                    echo "</h4>
              ";
                }
                // line 47
                echo "            ";
            }
            // line 48
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 54
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "partials/hero-unit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  139 => 48,  136 => 47,  130 => 45,  127 => 44,  121 => 42,  118 => 41,  115 => 40,  109 => 38,  106 => 37,  100 => 35,  97 => 34,  95 => 33,  87 => 28,  82 => 25,  80 => 24,  70 => 17,  66 => 15,  60 => 12,  55 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  29 => 3,  27 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/hero-unit.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\partials\\hero-unit.twig");
    }
}
