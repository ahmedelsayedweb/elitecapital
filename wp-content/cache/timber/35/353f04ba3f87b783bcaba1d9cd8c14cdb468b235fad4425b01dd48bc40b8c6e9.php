<?php

/* modules/other/sections/features-item.twig */
class __TwigTemplate_0c464c1268bfde8711368f2d7471820b9e8dd3d3ec36abad2f91ad6d9edd03e7 extends Twig_Template
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
        // line 2
        $context["__internal_320933154b5e5dd20706e397fe4ddce04b2c901ce2782c0e4a7f5537deea7cde"] = $this->loadTemplate("macro.twig", "modules/other/sections/features-item.twig", 2);
        // line 3
        echo "<div class=\"feature__item\">
  ";
        // line 4
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array())) {
            // line 5
            echo "    ";
            echo $context["__internal_320933154b5e5dd20706e397fe4ddce04b2c901ce2782c0e4a7f5537deea7cde"]->geticon($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array()), "feature__icon");
            echo "
  ";
        }
        // line 7
        echo "  <div class=\"feature__item-content\">
    <h3 class=\"feature__item-title\">";
        // line 8
        echo $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "label", array());
        echo "</h3>
    <div class=\"feature__text\">
      ";
        // line 10
        echo $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "text", array());
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/other/sections/features-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  35 => 8,  32 => 7,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/other/sections/features-item.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\other\\sections\\features-item.twig");
    }
}
