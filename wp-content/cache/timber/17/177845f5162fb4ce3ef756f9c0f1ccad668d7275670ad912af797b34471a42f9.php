<?php

/* modules/vc/template.twig */
class __TwigTemplate_7c33c570b22a67b1a96e82755ae18729b0451dcf644ac712cac7ade3fb7c361e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.twig", "modules/vc/template.twig", 3);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["content"] = call_user_func_array($this->env->getFunction('content')->getCallable(), array());
        // line 4
        $context["body_class"] = ((isset($context["body_class"]) ? $context["body_class"] : null) . " ");
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"wrapper\">
    ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/vc/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  33 => 5,  29 => 3,  27 => 4,  25 => 2,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/vc/template.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\vc\\template.twig");
    }
}
