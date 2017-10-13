<?php

/* partials/head.twig */
class __TwigTemplate_9ce87f9528fe25a56ae91b3bb41244ed8b8357c7ce95655acbbc00ef86cc1043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
  <meta charset=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "charset", array()), "html", null, true);
        echo "\"/>
  <meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html", null, true);
        echo "\">
  <!--[if IE]>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=9,chrome=1\">
  <![endif]-->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\">
  <meta name=\"format-detection\" content=\"telephone=no\">
  ";
        // line 9
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "pingback_url", array())) {
            // line 10
            echo "    <link rel=\"pingback\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "pingback_url", array()), "html", null, true);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_head"));
        echo "
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["feed_link"]) ? $context["feed_link"] : null), "html", null, true);
        echo "\">
</head>";
    }

    public function getTemplateName()
    {
        return "partials/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  43 => 12,  37 => 10,  35 => 9,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/head.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\partials\\head.twig");
    }
}
