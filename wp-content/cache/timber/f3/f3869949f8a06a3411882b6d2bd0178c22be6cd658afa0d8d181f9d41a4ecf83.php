<?php

/* modules/agent/pages/single/includes/agent-properties.twig */
class __TwigTemplate_af1b844d82c78d61efbec7b0c6aa715e3cb1a6994d54ed6aa8409eacb8fe5f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/agent/pages/single/includes/agent-properties.twig", 1);
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
        // line 2
        $context["__internal_bef0e6d8efd77ad301b06949c87df2dc89509db9b3adfd21070cf495cfcf79e2"] = $this->loadTemplate("macro.twig", "modules/agent/pages/single/includes/agent-properties.twig", 2);
        // line 4
        $context["widget_class"] = "main";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        echo $context["__internal_bef0e6d8efd77ad301b06949c87df2dc89509db9b3adfd21070cf495cfcf79e2"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Agent Listings", "realtyspace")));
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        $context["__internal_a69ec2c63a828269460d84010ddae069cfbbd23b4915d90d51b953e4857b8a2e"] = $this->loadTemplate("macro.twig", "modules/agent/pages/single/includes/agent-properties.twig", 11);
        // line 12
        echo "  ";
        $context["__internal_d91b94bbacfa4187869239e7358bc9118d33753db09a9d7c9a7986f18a35d4dd"] = $this->loadTemplate("modules/property/macro.twig", "modules/agent/pages/single/includes/agent-properties.twig", 12);
        // line 13
        echo "  <div class=\"listing listing--";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent_properties_display_mode", array()), "html", null, true);
        echo " listing--lg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent_properties_grid_size", array()), "html_attr");
        echo " properties properties--";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent_properties_display_mode", array()), "html", null, true);
        echo " js-ajax-container\">
    ";
        // line 14
        $context["data"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent_properties", array());
        // line 15
        echo "    ";
        echo $context["__internal_d91b94bbacfa4187869239e7358bc9118d33753db09a9d7c9a7986f18a35d4dd"]->getitems($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "agent_properties_display_mode", array()));
        echo "
  </div>

  ";
        // line 18
        echo $context["__internal_a69ec2c63a828269460d84010ddae069cfbbd23b4915d90d51b953e4857b8a2e"]->getpagination($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pagination", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/agent/pages/single/includes/agent-properties.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  64 => 15,  62 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/agent/pages/single/includes/agent-properties.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\agent\\pages\\single\\includes\\agent-properties.twig");
    }
}
