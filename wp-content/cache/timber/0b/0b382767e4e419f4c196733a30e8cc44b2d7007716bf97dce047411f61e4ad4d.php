<?php

/* modules/post/widgets/recent-posts/widget.twig */
class __TwigTemplate_522e1d0575028ef1a090d36a2761a1b4fc8265ce49d612ae88898d5a873f8599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("widget.twig", "modules/post/widgets/recent-posts/widget.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_0f7c2b3eb1c85817dc12112ab93b8e5eb6f98e56371731bac4341a7d77172103"] = $this->loadTemplate("macro.twig", "modules/post/widgets/recent-posts/widget.twig", 1);
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        echo $context["__internal_0f7c2b3eb1c85817dc12112ab93b8e5eb6f98e56371731bac4341a7d77172103"]->getwidget_header((isset($context["title"]) ? $context["title"] : null), (isset($context["subtext"]) ? $context["subtext"] : null), $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "modifier", array()));
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\" article article--";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "modifier", array()), "html", null, true);
        echo "\">
    <!-- end of block .article__header-->
    <div class=\"listing listing--";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "modifier", array()), "html", null, true);
        echo " js-data-container\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "        <div class=\"listing__item\">
          <div class=\"article__item\">
            <div class=\"article__details\">
              <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
            echo "\" class=\"article__item-title\">
                ";
            // line 17
            echo $this->getAttribute($context["post"], "title", array());
            echo "
              </a>
              <time datetime=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "\" class=\"article__time\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date", array(0 => "D - j M - g:i a"), "method"), "html", null, true);
            echo "
              </time>
              ";
            // line 22
            if (($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "modifier", array()) != "footer")) {
                // line 23
                echo "                <div class=\"article__intro\">
                  <p>";
                // line 24
                echo $this->getAttribute($context["post"], "preview", array(0 => 20, 1 => true, 2 => false), "method");
                echo "</p>
                </div>
                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                echo "\" class=\"article__more\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Read more", "realtyspace")), "html", null, true);
                echo "</a>
              ";
            }
            // line 28
            echo "            </div>
          </div>
          <!-- end of block .article__item-->
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    <!-- end of block .article__list-->
    ";
        // line 35
        if (($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "modifier", array()) == "footer")) {
            // line 36
            echo "      <a href=\"";
            echo call_user_func_array($this->env->getFunction('archive_path')->getCallable(), array("post"));
            echo "\" class=\"widget__more js-loadmore\"> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("More articles", "realtyspace")), "html", null, true);
            echo "</a>
    ";
        }
        // line 38
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/post/widgets/recent-posts/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  115 => 36,  113 => 35,  109 => 33,  99 => 28,  92 => 26,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  59 => 13,  55 => 12,  51 => 11,  45 => 9,  42 => 8,  35 => 5,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/post/widgets/recent-posts/widget.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\post\\widgets\\recent-posts\\widget.twig");
    }
}
