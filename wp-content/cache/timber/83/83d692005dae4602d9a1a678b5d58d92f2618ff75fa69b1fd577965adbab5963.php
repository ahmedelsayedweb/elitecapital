<?php

/* modules/property/sections/search.twig */
class __TwigTemplate_f0daae77e81236f5630643955bf9c82275c30ebe5e72d8f6b1ee2547336b1633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/property/sections/search.twig", 5);
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
        // line 1
        $context["__internal_211a7de0e43f1391979d615e884bffaf32235426c95cc8df0578d273167e69ab"] = $this->loadTemplate("macro.twig", "modules/property/sections/search.twig", 1);
        // line 3
        $context["form"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "search_form", array());
        // line 7
        $context["widget_class"] = "landing";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo $context["__internal_211a7de0e43f1391979d615e884bffaf32235426c95cc8df0578d273167e69ab"]->getwidget_header($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "subtitle", array()));
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "  <!-- BEGIN SEARCH-->
  <!-- end of block .search__header-->
  ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form form--search js-search-form form--wide form--wide-default")));
        echo "

  ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "row")));
        echo "

  <div class=\"row form__buttons form__buttons--double\">
    <button type=\"reset\" class=\"form__reset js-form-reset\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Reset", "realtyspace")), "html", null, true);
        echo "</button>
    <button type=\"submit\" class=\"form__submit\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search", "realtyspace")), "html", null, true);
        echo "</button>
  </div>
  ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
  <!-- end of block .search__form#search-form-->
  <!-- END SEARCH-->
";
    }

    public function getTemplateName()
    {
        return "modules/property/sections/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  68 => 22,  64 => 21,  58 => 18,  53 => 16,  49 => 14,  46 => 13,  39 => 10,  36 => 9,  32 => 5,  30 => 7,  28 => 3,  26 => 1,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/sections/search.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\property\\sections\\search.twig");
    }
}
