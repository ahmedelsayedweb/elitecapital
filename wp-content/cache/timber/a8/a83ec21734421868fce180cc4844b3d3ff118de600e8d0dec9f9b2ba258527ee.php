<?php

/* modules/faq/macro.twig */
class __TwigTemplate_569173f1765931ca2142c8c0680b32f9d6c5d901360b76e02c31467c2368db09 extends Twig_Template
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
        // line 22
        echo "
";
        // line 38
        echo "
";
    }

    // line 1
    public function getitem($__faq__ = null, $__expanded__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "faq" => $__faq__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            // line 3
            echo "  <dl class=\"faq__item\">
    <dt id=\"faq_heading_";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" role=\"tab\" class=\"faq__title\">
      ";
            // line 6
            echo "      <a data-toggle=\"collapse\" data-parent=\"#faq_accordion\" href=\"#faq_collapse_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"faq_collapse_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" class=\"faq__expander ";
            if ( !(isset($context["expanded"]) ? $context["expanded"] : null)) {
                echo "collapsed";
            }
            echo "\">
        ";
            // line 7
            echo $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "title", array());
            echo "
      </a>
    </dt>
    <dd id=\"faq_collapse_";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"faq_heading_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" class=\"faq__content collapse ";
            if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                echo "in";
            }
            echo "\" ";
            if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                echo "aria-expanded=\"true\"";
            }
            echo ">
      <div class=\"faq__body\">
        ";
            // line 12
            echo $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "content", array());
            echo "
      </div>
      <div class=\"faq__footer\">
        <a data-toggle=\"collapse\" data-parent=\"#faq_accordion\" aria-controls=\"faq_collapse_";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" href=\"#faq_collapse_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : null), "id", array()), "html", null, true);
            echo "\" class=\"faq__close\">
          ";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Close", "realtyspace")), "html", null, true);
            echo "
        </a>
      </div>
    </dd>
  </dl>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getlist($__items__ = array(), $__cat_id__ = 0, $__cat_name__ = null, $__cat_description__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "cat_id" => $__cat_id__,
            "cat_name" => $__cat_name__,
            "cat_description" => $__cat_description__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "  ";
            $context["__internal_6fc9109ba65b1db1079d886fb0efcb0a066d3d827a1d658fe1d4d398be432009"] = $this;
            // line 25
            echo "  ";
            $context["__internal_98c1dbfcf14ee5fc3d548c83abcbf6b2c50b92da24bdc53f2799105b039171ac"] = $this->loadTemplate("macro.twig", "modules/faq/macro.twig", 25);
            // line 26
            echo "  ";
            if ((isset($context["cat_name"]) ? $context["cat_name"] : null)) {
                // line 27
                echo "    <h1>";
                echo twig_escape_filter($this->env, (isset($context["cat_name"]) ? $context["cat_name"] : null), "html", null, true);
                echo "</h1>
  ";
            }
            // line 29
            echo "  ";
            if ((isset($context["cat_description"]) ? $context["cat_description"] : null)) {
                // line 30
                echo "    <p>";
                echo twig_escape_filter($this->env, (isset($context["cat_description"]) ? $context["cat_description"] : null), "html", null, true);
                echo "</p>
  ";
            }
            // line 32
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 33
                echo "    ";
                echo $context["__internal_6fc9109ba65b1db1079d886fb0efcb0a066d3d827a1d658fe1d4d398be432009"]->getitem($context["faq"]);
                echo "
  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "    ";
                echo $context["__internal_98c1dbfcf14ee5fc3d548c83abcbf6b2c50b92da24bdc53f2799105b039171ac"]->getno_items_available();
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getmixed_list($__items__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "  ";
            $context["__internal_0c6cebcc0be507b0a1c0da4930dbf4eb1bb22b017b8bfc10f1681d109fd4cea1"] = $this;
            // line 41
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["category_id"] => $context["group"]) {
                // line 42
                echo "    ";
                if (($context["category_id"] > 0)) {
                    // line 43
                    echo "      ";
                    echo $context["__internal_0c6cebcc0be507b0a1c0da4930dbf4eb1bb22b017b8bfc10f1681d109fd4cea1"]->getlist($this->getAttribute($context["group"], "items", array()), $context["category_id"], $this->getAttribute($this->getAttribute($context["group"], "category", array()), "name", array()), $this->getAttribute($this->getAttribute($context["group"], "category", array()), "description", array()));
                    echo "
    ";
                } else {
                    // line 45
                    echo "      ";
                    echo $context["__internal_0c6cebcc0be507b0a1c0da4930dbf4eb1bb22b017b8bfc10f1681d109fd4cea1"]->getlist($context["group"]);
                    echo "
    ";
                }
                // line 47
                echo "  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "    aaa
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category_id'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/faq/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 48,  225 => 47,  219 => 45,  213 => 43,  210 => 42,  204 => 41,  201 => 40,  189 => 39,  167 => 35,  159 => 33,  153 => 32,  147 => 30,  144 => 29,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  114 => 23,  93 => 16,  87 => 15,  81 => 12,  66 => 10,  60 => 7,  49 => 6,  45 => 4,  42 => 3,  40 => 2,  27 => 1,  22 => 38,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/faq/macro.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\faq\\macro.twig");
    }
}
