<?php

/* modules/partner/section.twig */
class __TwigTemplate_6ee967ae17b0baedadd03a172fe4525b717a746cadec8ff0feb93b8fea23690b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/partner/section.twig", 4);
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
        $context["__internal_892d85feaa81d998b9a7c8eac87cb62f4722d39e911c1348a8b6695e05f9524d"] = $this->loadTemplate("macro.twig", "modules/partner/section.twig", 1);
        // line 6
        $context["widget_class"] = "landing partners-section";
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo $context["__internal_892d85feaa81d998b9a7c8eac87cb62f4722d39e911c1348a8b6695e05f9524d"]->getwidget_header($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "subtitle", array()));
        echo "
  ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <!-- BEGIN PARTNERS-->
    ";
        // line 14
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "items", array())) {
            // line 15
            echo "      <div class=\"partners\" id=\"";
            echo call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("partners", array("animate" => true, "slidesToShow" => $this->getAttribute(            // line 17
(isset($context["section"]) ? $context["section"] : null), "slides_to_show", array()))));
            // line 18
            echo "\">
        <div class=\"partners__slider js-slick-slider\">
          ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 21
                echo "            <a class=\"partners__item\" ";
                if ($this->getAttribute($context["partner"], "url", array())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "url", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
              ";
                // line 22
                echo $context["__internal_892d85feaa81d998b9a7c8eac87cb62f4722d39e911c1348a8b6695e05f9524d"]->getthumbnail($this->getAttribute($this->getAttribute($context["partner"], "image", array()), "src", array()), 175, 50);
                echo "
              <span class=\"partners__name\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "title", array()), "html", null, true);
                echo "</span>
            </a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
        <div class=\"partners__controls\">
          <button class=\"partners__arrow partners__arrow--prev js-partners-prev\"></button>
          <button class=\"partners__arrow partners__arrow--next js-partners-next\"></button>
        </div>
        <!-- end of block .partners__controls-->
      </div>
    ";
        } else {
            // line 34
            echo "      <div class=\"partners__list\">
        ";
            // line 35
            echo $context["__internal_892d85feaa81d998b9a7c8eac87cb62f4722d39e911c1348a8b6695e05f9524d"]->getno_items_available();
            echo "
      </div>
    ";
        }
        // line 38
        echo "    <!-- end of block .partners-->
    <!-- END PARTNERS-->
  ";
    }

    public function getTemplateName()
    {
        return "modules/partner/section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  99 => 35,  96 => 34,  86 => 26,  77 => 23,  73 => 22,  64 => 21,  60 => 20,  56 => 18,  54 => 17,  52 => 15,  50 => 14,  47 => 13,  44 => 12,  37 => 9,  34 => 8,  30 => 4,  28 => 6,  26 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/partner/section.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\partner\\section.twig");
    }
}
