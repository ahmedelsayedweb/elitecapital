<?php

/* modules/property/sections/map.twig */
class __TwigTemplate_e96bd25ed50c0b25a360870be7758727dd7b354d194743e08588637b5d828f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/property/sections/map.twig", 10);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "section-widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["tooltip_template_id"] = call_user_func_array($this->env->getFunction('js_template')->getCallable(), array("property-map-tooltip", "modules/property/misc/map-tooltip.twig"));
        // line 3
        $context["module_id"] = call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("propmap", array("infoboxTemplate" =>         // line 4
(isset($context["tooltip_template_id"]) ? $context["tooltip_template_id"] : null), "theme" => $this->getAttribute(        // line 5
(isset($context["section"]) ? $context["section"] : null), "infobox_theme", array()), "fullscreen" => $this->getAttribute(        // line 6
(isset($context["section"]) ? $context["section"] : null), "fullscreen", array()))));
        // line 8
        $context["form"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "search_form", array());
        // line 11
        $context["widget_class"] = "gray";
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
  <div class=\"map map--index js-map  map--";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "panel_position", array()), "html", null, true);
        echo "
    ";
        // line 17
        echo "    \" id=\"";
        echo twig_escape_filter($this->env, (isset($context["module_id"]) ? $context["module_id"] : null), "html", null, true);
        echo "\">
    <div class=\"map__buttons\">
      <button type=\"button\" class=\"map__change-map js-map-btn\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Show map", "realtyspace")), "html", null, true);
        echo "</button>
    </div>
    <div class=\"map__wrap\">
      <div class=\"map__view js-map-index-canvas \"></div>
    </div>

    <div class=\"map__search\">
      ";
        // line 26
        $context["formClass"] = "form form--search js-search-form";
        // line 27
        echo "
      ";
        // line 28
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "panel_position", array()) == "bottom")) {
            // line 29
            echo "        ";
            $context["formClass"] = ((isset($context["formClass"]) ? $context["formClass"] : null) . " form--wide form--map-bottom");
            // line 30
            echo "      ";
        } elseif (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "panel_position", array()) == "left")) {
            // line 31
            echo "        ";
            $context["formClass"] = ((isset($context["formClass"]) ? $context["formClass"] : null) . " form--banner-sidebar");
            // line 32
            echo "      ";
        }
        // line 33
        echo "      <!-- end of block .search__header-->
      ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => (((isset($context["formClass"]) ? $context["formClass"] : null) . " form--") . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "panel_theme", array())))));
        echo "
      ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "row")));
        echo "
      <div class=\"row form__buttons form__buttons--double\">
        <button type=\"reset\" class=\"form__reset js-form-reset\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Reset", "realtyspace")), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"form__submit\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search", "realtyspace")), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
      <!-- end of block .search__form#search-form-->
    </div>

  </div>


";
    }

    public function getTemplateName()
    {
        return "modules/property/sections/map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  101 => 38,  97 => 37,  92 => 35,  88 => 34,  85 => 33,  82 => 32,  79 => 31,  76 => 30,  73 => 29,  71 => 28,  68 => 27,  66 => 26,  56 => 19,  50 => 17,  46 => 15,  43 => 14,  40 => 13,  36 => 10,  34 => 11,  32 => 8,  30 => 6,  29 => 5,  28 => 4,  27 => 3,  25 => 2,  11 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/sections/map.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\property\\sections\\map.twig");
    }
}
