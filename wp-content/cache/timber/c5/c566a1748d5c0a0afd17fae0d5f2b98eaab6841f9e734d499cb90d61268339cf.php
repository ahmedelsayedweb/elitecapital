<?php

/* base-archive.twig */
class __TwigTemplate_8018f755be2ff97eb7285a9c7dd503d0eaf4a0ad817dc45e787001949dd01f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "base-archive.twig", 1);
        $this->blocks = array(
            'hero_unit' => array($this, 'block_hero_unit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hero_unit($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        if ((array_key_exists("page", $context) && $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero_unit", array()), "enabled", array()))) {
            // line 5
            echo "       ";
            echo twig_include($this->env, $context, "partials/hero-unit.twig", array("hero_unit" => $this->getAttribute(            // line 6
(isset($context["page"]) ? $context["page"] : null), "hero_unit", array()), "title" => $this->getAttribute(            // line 7
(isset($context["page"]) ? $context["page"] : null), "title", array()), "subtitle" => $this->getAttribute(            // line 8
(isset($context["page"]) ? $context["page"] : null), "subtitle", array())), false);
            // line 9
            echo "
     ";
        }
        // line 11
        echo "   ";
    }

    public function getTemplateName()
    {
        return "base-archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 9,  38 => 8,  37 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base-archive.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\base-archive.twig");
    }
}
