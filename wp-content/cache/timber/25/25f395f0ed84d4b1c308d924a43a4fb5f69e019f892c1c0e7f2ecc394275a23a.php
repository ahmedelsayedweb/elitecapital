<?php

/* modules/other/sections/counter-item.twig */
class __TwigTemplate_163742219e7cd8af42642e35267bfbc7c10f1ca777315a8e93d6dd34e4a73ed1 extends Twig_Template
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
        $context["__internal_1498824d80f046a292e37f44b31976f017c7b5802164ac59e41bd659523a5ec5"] = $this->loadTemplate("macro.twig", "modules/other/sections/counter-item.twig", 2);
        // line 3
        echo "<div class=\"achievement__item\">
  ";
        // line 4
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array())) {
            // line 5
            echo "    ";
            echo $context["__internal_1498824d80f046a292e37f44b31976f017c7b5802164ac59e41bd659523a5ec5"]->geticon($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array()), "achievement__icon");
            echo "
  ";
        }
        // line 7
        echo "  <div data-count-end=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "number", array()), "html", null, true);
        echo "\"
       data-count-separator=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "separator", array()), "html", null, true);
        echo "\"
       data-count-deciaml=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "decimal", array()), "html", null, true);
        echo "\"
       data-count-duration=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "duration", array()), "html", null, true);
        echo "\"
       data-count-prefix=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "prefix", array()), "html", null, true);
        echo "\"
       data-count-suffix=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "suffix", array()), "html", null, true);
        echo "\"

       class=\"achievement__counter achievement__counter--lg js-count-up\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "number", array()), "html", null, true);
        echo "
  </div>
  <div class=\"achievement__counter\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "prefix", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "number", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "suffix", array()), "html", null, true);
        echo "</div>
  <div class=\"achievement__name\">";
        // line 18
        echo $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "label", array());
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/other/sections/counter-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  64 => 17,  59 => 15,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  32 => 7,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/other/sections/counter-item.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\other\\sections\\counter-item.twig");
    }
}
