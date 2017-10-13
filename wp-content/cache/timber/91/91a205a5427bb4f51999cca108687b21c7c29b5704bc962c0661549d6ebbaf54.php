<?php

/* modules/other/sections/features-item.twig */
class __TwigTemplate_117a0a495119ffb13e8f5230ceaaf409413f87eef037e15d81fec5dbea0d0f76 extends Twig_Template
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
        $context["__internal_d4370cc8bb856452c05053b14041536cb037edca43e74a6ca7924a9d35911433"] = $this->loadTemplate("macro.twig", "modules/other/sections/features-item.twig", 2);
        // line 3
        echo "<div class=\"feature__item\">
  ";
        // line 4
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array())) {
            // line 5
            echo "    ";
            echo $context["__internal_d4370cc8bb856452c05053b14041536cb037edca43e74a6ca7924a9d35911433"]->geticon($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array()), "feature__icon");
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
        return new Twig_Source("", "modules/other/sections/features-item.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\other\\sections\\features-item.twig");
    }
}
