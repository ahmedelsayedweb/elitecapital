<?php

/* modules/page/single.twig */
class __TwigTemplate_d50ae0de18e521d56dea2812ab4796121c35b6f007b90fd8271d17c52477ebd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/page/single.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"site site--main\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "page_header", array(0 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
        echo "
    <div class=\"site__main\">
      <div class=\"widget \">
        <div class=\"widget__content\">
          <article class=\"article article--details article--page\">
            <div class=\"article__body\">
              ";
        // line 11
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "excerpt", array())) {
            // line 12
            echo "                <p>
                  <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "excerpt", array()), "html", null, true);
            echo "</strong>
                </p>
              ";
        }
        // line 16
        echo "              ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_image", array())) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "thumbnail", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_image", array()), 1 => 1170), "method"), "html", null, true);
            echo "
              ";
        }
        // line 19
        echo "              ";
        echo call_user_func_array($this->env->getFunction('content')->getCallable(), array(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Read more", "realtyspace"))));
        echo "
            </div>
            ";
        // line 21
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_links", array()))) {
            // line 22
            echo "              <div class=\"article__footer\">
                <div class=\"social social--article\">
                  <span>";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Share this post", "realtyspace")), "html", null, true);
            echo "</span>
                  ";
            // line 25
            $context["__internal_3a5d8cea84ae1741135f5d034924b5a3285ad625f10d5eb3f4c68ee62aed78e1"] = $this->loadTemplate("macro.twig", "modules/page/single.twig", 25);
            // line 26
            echo "                  ";
            echo $context["__internal_3a5d8cea84ae1741135f5d034924b5a3285ad625f10d5eb3f4c68ee62aed78e1"]->getsharing_links($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_links", array()));
            echo "
                </div>
              </div>
            ";
        }
        // line 30
        echo "
          </article>
          ";
        // line 32
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
        return "modules/page/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  89 => 30,  81 => 26,  79 => 25,  75 => 24,  71 => 22,  69 => 21,  63 => 19,  57 => 17,  54 => 16,  48 => 13,  45 => 12,  43 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/page/single.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\page\\single.twig");
    }
}
