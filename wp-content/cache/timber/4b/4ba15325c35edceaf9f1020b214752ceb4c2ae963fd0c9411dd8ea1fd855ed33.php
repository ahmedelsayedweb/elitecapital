<?php

/* modules/contact/widgets/contact-form/form.twig */
class __TwigTemplate_b23a1f73cb575c4f8ca3f6d1f544ca5f73f57599292bb6cdf79d65f74ddf8a3c extends Twig_Template
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
        $context["form"] = $this->loadTemplate("macro-widget-form.twig", "modules/contact/widgets/contact-form/form.twig", 1);
        // line 2
        echo $context["form"]->gettext_field((isset($context["title"]) ? $context["title"] : null));
        echo "
";
        // line 3
        echo $context["form"]->gettext_field((isset($context["subtext"]) ? $context["subtext"] : null));
        echo "
";
        // line 4
        echo $context["form"]->getselect_field((isset($context["cf7_list"]) ? $context["cf7_list"] : null), call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contact Form 7", "realtyspace")));
    }

    public function getTemplateName()
    {
        return "modules/contact/widgets/contact-form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contact/widgets/contact-form/form.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\contact\\widgets\\contact-form\\form.twig");
    }
}
