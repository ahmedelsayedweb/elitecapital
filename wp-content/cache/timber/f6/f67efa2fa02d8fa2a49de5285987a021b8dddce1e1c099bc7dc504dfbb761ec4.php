<?php

/* modules/core/js-template/layout.twig */
class __TwigTemplate_2213093a9527a4b2b870ffd8cc48480894c16d4deb9d18a928b34b3bdfc6e952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
  ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</script>";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "modules/core/js-template/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  27 => 3,  25 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/core/js-template/layout.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\core\\js-template\\layout.twig");
    }
}
