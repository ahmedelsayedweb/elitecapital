<?php

/* modules/social/widgets/social-links/form.twig */
class __TwigTemplate_f46fe3015f9a0d7f03ec8898289beb7e0fed02478a9cd7a54ca282948fde9428 extends Twig_Template
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
        $context["form"] = $this->loadTemplate("macro-widget-form.twig", "modules/social/widgets/social-links/form.twig", 1);
        // line 2
        echo $context["form"]->gettext_field((isset($context["title"]) ? $context["title"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/social/widgets/social-links/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/social/widgets/social-links/form.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\social\\widgets\\social-links\\form.twig");
    }
}
