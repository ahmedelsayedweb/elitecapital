<?php

/* widget.twig */
class __TwigTemplate_b3668c1357604f5e32a3efaf95a19ad7a6a796ac097bb5ed9156739f1d5ee515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 5
        echo "    ";
        // line 7
        echo "
";
        // line 8
        echo twig_replace_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "before_widget", array()), array("widget--wp" => ""));
        echo "
    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "after_widget", array());
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 9,  37 => 11,  34 => 10,  32 => 9,  28 => 8,  25 => 7,  23 => 5,  21 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "widget.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\widget.twig");
    }
}
