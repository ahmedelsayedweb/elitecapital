<?php

/* modules/property/sections/property-group/vc-tab.twig */
class __TwigTemplate_582d31ba6f11be50b076eb239149841c99233756eb871965ced269d3aace1672 extends Twig_Template
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
        $context["__internal_c42dd003cec55ac8501dc2bc83ec1d3b5740e9018d33c2d5170ddcc4019c3a87"] = $this->loadTemplate("modules/property/macro.twig", "modules/property/sections/property-group/vc-tab.twig", 1);
        // line 2
        $context["__internal_4a7ecda5f1b39e4794819240b1995a9a24dd2f725cfea3365dd0e8b6a5c142e5"] = $this->loadTemplate("macro.twig", "modules/property/sections/property-group/vc-tab.twig", 2);
        // line 4
        echo "<li>
  <a
      href=\"#tab-";
        // line 6
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "slug", array()), "esc_attr"), "html", null, true);
        echo "\"
      aria-controls=\"tab-";
        // line 7
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "slug", array()), "esc_attr"), "html", null, true);
        echo "\"
      role=\"tab\"
      data-toggle=\"tab\" class=\"properties__btn js-pgroup-tab\"
  >
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), "html", null, true);
        echo "
  </a>
</li>
<!-- separator -->
<div id=\"tab-";
        // line 15
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "slug", array()), "esc_attr"), "html", null, true);
        echo "\" class=\"tab-pane\">
  <div class=\"listing listing--grid properties--grid\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "items", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 18
            echo "      ";
            echo $context["__internal_c42dd003cec55ac8501dc2bc83ec1d3b5740e9018d33c2d5170ddcc4019c3a87"]->getgrid_item($context["property"]);
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "      ";
            echo $context["__internal_4a7ecda5f1b39e4794819240b1995a9a24dd2f725cfea3365dd0e8b6a5c142e5"]->getno_items_available();
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </div>
</div>
<!-- separator -->";
    }

    public function getTemplateName()
    {
        return "modules/property/sections/property-group/vc-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  63 => 20,  55 => 18,  50 => 17,  45 => 15,  38 => 11,  31 => 7,  27 => 6,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/sections/property-group/vc-tab.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\property\\sections\\property-group\\vc-tab.twig");
    }
}
