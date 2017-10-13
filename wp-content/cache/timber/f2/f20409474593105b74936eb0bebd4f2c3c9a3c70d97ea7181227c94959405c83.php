<?php

/* modules/property/sections/property-group/vc.twig */
class __TwigTemplate_4458e3995a779badc97980eb0406d1dfe825c5aae1fea73c517938cc41149f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/property/sections/property-group/vc.twig", 9);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "section-widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_f757258318b2c740be47e0978be0b4ecf1a4153b6606b0fab8dda7d6d7495e82"] = $this->loadTemplate("modules/property/macro.twig", "modules/property/sections/property-group/vc.twig", 1);
        // line 2
        $context["__internal_9a03416951ab2fe7c9cc6be690f9069ec9a138d9e363dcdc9dc1ccabfe093198"] = $this->loadTemplate("macro.twig", "modules/property/sections/property-group/vc.twig", 2);
        // line 5
        $context["module_id"] = call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("propertyGroup", array("animate" => true)));
        // line 11
        $context["widget_class"] = "landing gray properties-section";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        echo $context["__internal_9a03416951ab2fe7c9cc6be690f9069ec9a138d9e363dcdc9dc1ccabfe093198"]->getwidget_header($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "subtitle", array()));
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "content", array()), "tab_count", array()) > 1)) {
            // line 19
            echo "    <div class=\"tab tab--properties\">
      <ul role=\"tablist\" class=\"nav tab__nav\">
        ";
            // line 21
            echo $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "content", array()), "tab_header", array());
            echo "
      </ul>
      <div class=\"tab-content\">
        ";
            // line 24
            echo $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "content", array()), "tab_content", array());
            echo "
      </div>
    </div>
  ";
        } else {
            // line 28
            echo "    ";
            echo $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "content", array()), "tab_content", array());
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "modules/property/sections/property-group/vc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  64 => 24,  58 => 21,  54 => 19,  51 => 18,  48 => 17,  41 => 14,  38 => 13,  34 => 9,  32 => 11,  30 => 5,  28 => 2,  26 => 1,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/sections/property-group/vc.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\property\\sections\\property-group\\vc.twig");
    }
}
