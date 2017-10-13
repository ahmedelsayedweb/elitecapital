<?php

/* modules/post/archive.twig */
class __TwigTemplate_3d2ebd59f5ff2cc0780bc4c66aeba41e64b3275ac969fd198667a82f6b976e13 extends Twig_Template
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
        return $this->loadTemplate(((call_user_func_array($this->env->getFunction('is_ajax')->getCallable(), array())) ? ("base-ajax.twig") : ("base-archive.twig")), "modules/post/archive.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_78aae4c1c9cf703fdb585f9c7956d88a2658e0c1e6dd86bf3056b35292944c41"] = $this->loadTemplate("modules/post/macro.twig", "modules/post/archive.twig", 2);
        // line 3
        $context["__internal_91e4633689538643ccdc24600ed38ae60f3055561729963bb2e5fa0e631191ce"] = $this->loadTemplate("macro.twig", "modules/post/archive.twig", 3);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        // line 8
        echo "  <div class=\"site site--main\">
    ";
        // line 9
        echo $context["__internal_91e4633689538643ccdc24600ed38ae60f3055561729963bb2e5fa0e631191ce"]->getpage_header((isset($context["page"]) ? $context["page"] : null));
        echo "
    <div class=\"site__main\">
      <div class=\"listing listing--list article article--list \">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "posts", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "          <div class=\"listing__item\">
            <article class=\"article__item ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "css_classes", array()), "html", null, true);
            echo "\">
              ";
            // line 15
            echo $context["__internal_78aae4c1c9cf703fdb585f9c7956d88a2658e0c1e6dd86bf3056b35292944c41"]->getheader($context["post"]);
            echo "
              ";
            // line 16
            echo $context["__internal_78aae4c1c9cf703fdb585f9c7956d88a2658e0c1e6dd86bf3056b35292944c41"]->getpost_preview($context["post"]);
            echo "
              <div class=\"article__intro\">";
            // line 17
            echo call_user_func_array($this->env->getFunction('content')->getCallable(), array(call_user_func_array($this->env->getFunction('__')->getCallable(), array(" ", "realtyspace"))));
            echo "</div>
            </article>
          </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 21
            echo "          ";
            echo twig_include($this->env, $context, "partials/no-results.twig", array("classes" => "listing__empty--properties", "title" => call_user_func_array($this->env->getFunction('__')->getCallable(), array("The search did not return any results", "realtyspace")), "headline" => call_user_func_array($this->env->getFunction('__')->getCallable(), array("Please try again with different criteria.", "realtyspace"))));
            // line 25
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </div>
    </div>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "pagination", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pagination", array())), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/post/archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  106 => 27,  99 => 25,  96 => 21,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  46 => 12,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  28 => 1,  26 => 3,  24 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/post/archive.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\post\\archive.twig");
    }
}
