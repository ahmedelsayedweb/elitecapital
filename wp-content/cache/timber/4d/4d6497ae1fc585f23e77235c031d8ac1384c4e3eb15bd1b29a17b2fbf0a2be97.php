<?php

/* modules/faq/single.twig */
class __TwigTemplate_c081503a4debb3d32fa85cf066d01bf14842cc37a05b2de79678660c98308cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/faq/single.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-archive.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["faq_macro"] = $this->loadTemplate("modules/faq/macro.twig", "modules/faq/single.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
  <div class=\"site site--main\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "page_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
        echo "
    <div class=\"site__main\">
      ";
        // line 9
        $this->loadTemplate("modules/faq/single.twig", "modules/faq/single.twig", 9, "1281640344")->display($context);
        // line 21
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/faq/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 21,  43 => 9,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/faq/single.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\faq\\single.twig");
    }
}


/* modules/faq/single.twig */
class __TwigTemplate_c081503a4debb3d32fa85cf066d01bf14842cc37a05b2de79678660c98308cfb_1281640344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/faq/single.twig", 9);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "section-widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["__internal_99d960e280b629ebedbe43742627ce2858b1bc86c4da7889624af9dafee2de65"] = $this->loadTemplate("macro.twig", "modules/faq/single.twig", 10);
        // line 11
        $context["widget_class"] = "main";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "          <!-- BEGIN FAQ-->
          <div role=\"tablist\" aria-multiselectable=\"true\" class=\"faq\">
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq_macro"]) ? $context["faq_macro"] : null), "item", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "item", array()), 1 => true), "method"), "html", null, true);
        echo "
          </div>
          <!-- END FAQ-->
        ";
    }

    public function getTemplateName()
    {
        return "modules/faq/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 16,  114 => 14,  111 => 13,  107 => 9,  105 => 11,  103 => 10,  89 => 9,  45 => 21,  43 => 9,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/faq/single.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\faq\\single.twig");
    }
}
