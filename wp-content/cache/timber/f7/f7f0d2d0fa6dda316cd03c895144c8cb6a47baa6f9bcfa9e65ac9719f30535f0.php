<?php

/* modules/other/sections/counter-item.twig */
class __TwigTemplate_98950cd95fe68e513605c01cc093eaff9d2161a9c1a70a27f9ebce46ec455fb7 extends Twig_Template
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
        $context["__internal_2c7b196ddd8b70704a63a58acf8381dbbe98236d7b75cdb0cf089acb0a40b970"] = $this->loadTemplate("macro.twig", "modules/other/sections/counter-item.twig", 2);
        // line 3
        echo "<div class=\"achievement__item\">
  ";
        // line 4
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array())) {
            // line 5
            echo "    ";
            echo $context["__internal_2c7b196ddd8b70704a63a58acf8381dbbe98236d7b75cdb0cf089acb0a40b970"]->geticon($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "icon", array()), "achievement__icon");
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
        return new Twig_Source("", "modules/other/sections/counter-item.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\other\\sections\\counter-item.twig");
    }
}
