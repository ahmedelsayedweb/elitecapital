<?php

/* modules/post/formats/default.twig */
class __TwigTemplate_dd0c2a7462f0236b9e6f95f5f92b9a1f2389848223569639d768d121782c2fc4 extends Twig_Template
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
        $context["__internal_a8f32bdf98d37c325ac1be93428f5f7717a4618f82398196fd68b37262f049ab"] = $this->loadTemplate("macro.twig", "modules/post/formats/default.twig", 1);
        // line 2
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_image", array())) {
            // line 3
            echo "  <div class=\"article__preview\">
    ";
            // line 4
            echo $context["__internal_a8f32bdf98d37c325ac1be93428f5f7717a4618f82398196fd68b37262f049ab"]->getthumbnail($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_image", array()), 1170);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/post/formats/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/post/formats/default.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\post\\formats\\default.twig");
    }
}
