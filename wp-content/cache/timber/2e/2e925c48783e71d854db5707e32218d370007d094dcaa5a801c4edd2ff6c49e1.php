<?php

/* modules/post/single.twig */
class __TwigTemplate_98fc5f088279d8a298096e36ddc720eed91c4a9463a3381a52573ca9a3a3f003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/post/single.twig", 1);
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
        $context["__internal_accfb8ccaac4872d89c7ff5d49b756e776a38195f1bd34635cb2ef830b83587a"] = $this->loadTemplate("macro.twig", "modules/post/single.twig", 2);
        // line 3
        $context["__internal_628946451cbe605ff14c5ef5bc8de296b4da0bd29b57e4a1350d58e6625307c9"] = $this->loadTemplate("modules/post/macro.twig", "modules/post/single.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"site site--main\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "page_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
        echo "
    <div class=\"site__main\">
      <div class=\"widget\">
        <div class=\"widget__content\">
          <article class=\"article article--details article--page ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "css_classes", array()), "html", null, true);
        echo "\" id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true);
        echo "\">
            ";
        // line 12
        echo $context["__internal_628946451cbe605ff14c5ef5bc8de296b4da0bd29b57e4a1350d58e6625307c9"]->getheader($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post", array()));
        echo "
            ";
        // line 13
        echo $context["__internal_628946451cbe605ff14c5ef5bc8de296b4da0bd29b57e4a1350d58e6625307c9"]->getpost_preview($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post", array()));
        echo "
            <div class=\"clearfix\"></div>
            <div class=\"article__body\">
              ";
        // line 16
        echo call_user_func_array($this->env->getFunction('content')->getCallable(), array());
        echo "
            </div>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "pagination", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pagination", array())), "method"), "html", null, true);
        echo "
            ";
        // line 19
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_links", array()))) {
            // line 20
            echo "              <div class=\"article__footer\">
                <div class=\"social social--article\">
                  <span>";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Share this post", "realtyspace")), "html", null, true);
            echo "</span>
                  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_links", array()));
            foreach ($context['_seq'] as $context["icon"] => $context["link"]) {
                // line 24
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\" target=\"_blank\" class=\"social__item\"><i class=\"fa fa-";
                echo twig_escape_filter($this->env, $context["icon"], "html_attr");
                echo "\"></i></a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['icon'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </div>
                ";
            // line 27
            echo $context["__internal_628946451cbe605ff14c5ef5bc8de296b4da0bd29b57e4a1350d58e6625307c9"]->gettags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post", array()), "id", array()));
            echo "
              </div>
            ";
        }
        // line 30
        echo "          </article>
          ";
        // line 31
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "comments", array());
        echo "
        </div>
      </div>
    </div>
    <!-- END LISTING-->
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/post/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  105 => 30,  99 => 27,  96 => 26,  85 => 24,  81 => 23,  77 => 22,  73 => 20,  71 => 19,  67 => 18,  62 => 16,  56 => 13,  52 => 12,  46 => 11,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/post/single.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\post\\single.twig");
    }
}
