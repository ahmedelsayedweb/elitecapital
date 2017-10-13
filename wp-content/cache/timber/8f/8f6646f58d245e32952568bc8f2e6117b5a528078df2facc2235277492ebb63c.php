<?php

/* modules/property/sections/property-group/customizer.twig */
class __TwigTemplate_1d13dad4e3ee9257de962161437e5f999bef253332f3ec26dfc00855ae20b21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("section-widget.twig", "modules/property/sections/property-group/customizer.twig", 9);
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
        $context["__internal_7137eb34d3d48a9b21beb5768eacb927f29568f799af6d88a71c0be9f44c3c40"] = $this->loadTemplate("modules/property/macro.twig", "modules/property/sections/property-group/customizer.twig", 1);
        // line 2
        $context["__internal_b7a27d1a19ac9634491bc634196b4ac37e89e0ff285bf469c9cafc497dbaaa12"] = $this->loadTemplate("macro.twig", "modules/property/sections/property-group/customizer.twig", 2);
        // line 5
        $context["module_id"] = call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("propertyGroup", array("animate" => true)));
        // line 11
        $context["widget_class"] = "landing gray properties-section";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        echo $context["__internal_b7a27d1a19ac9634491bc634196b4ac37e89e0ff285bf469c9cafc497dbaaa12"]->getwidget_header($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title", array()), $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "subtitle", array()));
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
  <!-- end of block .properties__header-->
  ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "listing_types", array())) == 1)) {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "listing_types", array()));
            foreach ($context['_seq'] as $context["type_key"] => $context["type_value"]) {
                // line 22
                echo "      <div class=\"listing listing--grid properties properties--grid\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "properties", array()), $context["type_key"]));
                foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                    // line 24
                    echo "          ";
                    echo $context["__internal_7137eb34d3d48a9b21beb5768eacb927f29568f799af6d88a71c0be9f44c3c40"]->getgrid_item($context["property"]);
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type_key'], $context['type_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  ";
        } else {
            // line 29
            echo "    <div class=\"tab tab--properties\">
      <ul role=\"tablist\" class=\"nav tab__nav\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "listing_types", array()));
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
            foreach ($context['_seq'] as $context["type_key"] => $context["type_value"]) {
                // line 32
                echo "          <li ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "class=\"active\"";
                }
                echo ">
            <a href=\"#tab-";
                // line 33
                echo twig_escape_filter($this->env, $context["type_key"], "html", null, true);
                echo "\" aria-controls=\"tab-";
                echo twig_escape_filter($this->env, $context["type_key"], "html", null, true);
                echo "\" role=\"tab\" data-toggle=\"tab\" class=\"properties__btn js-pgroup-tab\">
              ";
                // line 34
                echo twig_escape_filter($this->env, $context["type_value"], "html", null, true);
                echo "
            </a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type_key'], $context['type_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "listing_types", array()));
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
            foreach ($context['_seq'] as $context["type_key"] => $context["type_value"]) {
                // line 41
                echo "          <div id=\"tab-";
                echo twig_escape_filter($this->env, $context["type_key"], "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "in active";
                }
                echo "\">
            <div class=\"listing listing--grid properties--grid\">
              ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "properties", array()), $context["type_key"]));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                    // line 44
                    echo "                ";
                    echo $context["__internal_7137eb34d3d48a9b21beb5768eacb927f29568f799af6d88a71c0be9f44c3c40"]->getgrid_item($context["property"]);
                    echo "
              ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 46
                    echo "                ";
                    echo $context["__internal_b7a27d1a19ac9634491bc634196b4ac37e89e0ff285bf469c9cafc497dbaaa12"]->getno_items_available();
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "            </div>
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type_key'], $context['type_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      </div>
    </div>
  ";
        }
        // line 54
        echo "

  ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "properties", array()), "recent", array()) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "properties", array()), "featured", array()))) {
            // line 57
            echo "    <div class=\"widget__footer\">
      <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "listing_url", array()), "esc_url"), "html", null, true);
            echo "\" class=\"widget__more\">
        ";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("More properties", "realtyspace")), "html", null, true);
            echo "
      </a>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "modules/property/sections/property-group/customizer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 59,  223 => 58,  220 => 57,  218 => 56,  214 => 54,  209 => 51,  193 => 48,  184 => 46,  176 => 44,  171 => 43,  161 => 41,  144 => 40,  140 => 38,  122 => 34,  116 => 33,  109 => 32,  92 => 31,  88 => 29,  85 => 28,  78 => 26,  69 => 24,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  51 => 18,  48 => 17,  41 => 14,  38 => 13,  34 => 9,  32 => 11,  30 => 5,  28 => 2,  26 => 1,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/sections/property-group/customizer.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\plugins\\cf47-realtyspace\\views\\modules\\property\\sections\\property-group\\customizer.twig");
    }
}
