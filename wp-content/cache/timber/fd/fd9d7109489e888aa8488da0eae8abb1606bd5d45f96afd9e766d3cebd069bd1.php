<?php

/* modules/agent/pages/single/single.twig */
class __TwigTemplate_7f1afc253d306ce6003afdbeeb6a62ed15068a09efd1c3c8a1066f780e76d5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((call_user_func_array($this->env->getFunction('is_ajax')->getCallable(), array())) ? ("base-ajax.twig") : ("base-archive.twig")), "modules/agent/pages/single/single.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["agent_macro"] = $this->loadTemplate("modules/agent/macro.twig", "modules/agent/pages/single/single.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $context["agent"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent", array());
        // line 9
        echo "  ";
        if ( !call_user_func_array($this->env->getFunction('is_ajax')->getCallable(), array())) {
            // line 10
            echo "    <div class=\"site site--main\">
    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "page_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
            echo "
    <div class=\"site__main\">
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hide_agent_info", array())) {
            // line 16
            echo "    ";
            $this->loadTemplate("modules/agent/pages/single/includes/agent-info.twig", "modules/agent/pages/single/single.twig", 16)->display($context);
            // line 17
            echo "  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hide_properties", array())) {
            // line 20
            echo "    ";
            $this->loadTemplate("modules/agent/pages/single/includes/agent-properties.twig", "modules/agent/pages/single/single.twig", 20)->display($context);
            // line 21
            echo "  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if ( !call_user_func_array($this->env->getFunction('is_ajax')->getCallable(), array())) {
            // line 24
            echo "    </div>
    </div>
  ";
        }
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/agent/pages/single/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  75 => 24,  73 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  51 => 15,  48 => 14,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  30 => 7,  26 => 1,  24 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/agent/pages/single/single.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\agent\\pages\\single\\single.twig");
    }
}
