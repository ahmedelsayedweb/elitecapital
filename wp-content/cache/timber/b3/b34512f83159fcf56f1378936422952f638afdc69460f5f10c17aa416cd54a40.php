<?php

/* partials/no-results.twig */
class __TwigTemplate_f47e8e9555dbe539477ac2eb7b8b1f36284aed982325de0055d9797371d3b5c5 extends Twig_Template
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
        echo "<div class=\"listing__empty\">
  <svg class=\"listing__empty-icon\">
    <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-info\"></use>
  </svg>
  <h4 class=\"listing__empty-title\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h4>
  ";
        // line 6
        if ((isset($context["headline"]) ? $context["headline"] : null)) {
            // line 7
            echo "    <span class=\"listing__empty-headline\">";
            echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/no-results.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/no-results.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\partials\\no-results.twig");
    }
}
