<?php

/* modules/testimonial/section.twig */
class __TwigTemplate_0bd7c14152ffa672d35ff68692a57119991555937e3b4082f0dacbf0fbe3504a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/testimonial/section.twig", 4);
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
        $context["__internal_2f0aa9b8d3d202675d45c02581301725dfaba5d36da877a63e43f3545cc9e626"] = $this->loadTemplate("macro.twig", "modules/testimonial/section.twig", 1);
        // line 6
        $context["widget_class"] = "landing testimonials-section";
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        echo $context["__internal_2f0aa9b8d3d202675d45c02581301725dfaba5d36da877a63e43f3545cc9e626"]->getwidget_header($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "subtitle", array()), "review");
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        // line 14
        echo "  <!-- BEGIN SECTION REVIEW-->
  <div class=\"review review--wide\">
    <!-- end of block .review__header-->
    ";
        // line 17
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "items", array())) {
            // line 18
            echo "      <div class=\"review__list\" id=\"";
            echo call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("testimonials", array("animate" => true)));
            // line 20
            echo "\">
        <div class=\"review__slider js-slick-slider\">
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 23
                echo "            <div class=\"review__item\">
              <div class=\"review__photo\">
                ";
                // line 25
                echo $context["__internal_2f0aa9b8d3d202675d45c02581301725dfaba5d36da877a63e43f3545cc9e626"]->getthumbnail($this->getAttribute($this->getAttribute($context["testimonial"], "featured_image", array()), "src", array()), 112, null, "review__photo-img");
                echo "
              </div>
              <div class=\"review__details\">
                <span class=\"review__name\">";
                // line 28
                echo $this->getAttribute($context["testimonial"], "title", array());
                echo "</span>
                <span class=\"review__post\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "job_title", array()), "html", null, true);
                echo "</span>
              </div>
              <div class=\"review__info\">
                <div class=\"review__info-quote review__info-quote--open\">&ldquo;</div>
                <p>
                  ";
                // line 34
                echo $this->getAttribute($context["testimonial"], "preview", array(0 => 50, 1 => true, 2 => false), "method");
                echo "
                </p>
                <div class=\"review__info-quote review__info-quote--close\">&rdquo;</div>
              </div>
              <div class=\"clearfix\"></div>
              <!-- end of block .review__item-->
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </div>
      </div>
    ";
        } else {
            // line 45
            echo "      <div class=\"review__list\">
        ";
            // line 46
            echo $context["__internal_2f0aa9b8d3d202675d45c02581301725dfaba5d36da877a63e43f3545cc9e626"]->getno_items_available();
            echo "
      </div>
    ";
        }
        // line 49
        echo "    <!-- end of block .review__list-->
  </div>
  <!-- END SECTION REVIEW-->
";
    }

    public function getTemplateName()
    {
        return "modules/testimonial/section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  111 => 46,  108 => 45,  103 => 42,  89 => 34,  81 => 29,  77 => 28,  71 => 25,  67 => 23,  63 => 22,  59 => 20,  56 => 18,  54 => 17,  49 => 14,  47 => 13,  44 => 12,  37 => 9,  34 => 8,  30 => 4,  28 => 6,  26 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/testimonial/section.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\testimonial\\section.twig");
    }
}
