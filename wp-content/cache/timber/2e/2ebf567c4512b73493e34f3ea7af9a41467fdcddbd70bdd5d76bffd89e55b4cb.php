<?php

/* modules/property/submit.twig */
class __TwigTemplate_e8a9c7b83924934d55a88e7e24ae176de89e42ed9b0440113ad0fe729439cd16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/property/submit.twig", 1);
        $this->blocks = array(
            'js_controller' => array($this, 'block_js_controller'),
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
        $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"] = $this->loadTemplate("macro.twig", "modules/property/submit.twig", 2);
        // line 4
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array())) {
            // line 5
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array()), array(0 => "bootstrap_3_layout.html.twig"));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_js_controller($context, array $blocks = array())
    {
        echo "submitForm";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $context["template"] = ('' === $tmp = "    <svg class=\"property__files-icon\" style=\"width: 120px; height: 120px;\">
      <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-doc\"></use>
    </svg>
  ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "  ";
        call_user_func_array($this->env->getFunction('js_inline_template')->getCallable(), array("dropzone-file-thumb", (isset($context["template"]) ? $context["template"] : null)));
        // line 16
        echo "  <div class=\"site site--main\">
    ";
        // line 17
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getpage_header((isset($context["page"]) ? $context["page"] : null));
        echo "
    <div class=\"site__main\">
      ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form form--property-add js-submit-form js-parsley")));
        echo "

      <section class=\"widget js-widget widget--main widget--collapse\">
        ";
        // line 22
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Basic information", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("Fields marked with * are required!", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 25
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array())) {
            // line 26
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 28
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contract_type", array())) {
            // line 29
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contract_type", array()), 'row');
            echo "
            ";
        }
        // line 31
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "property_type", array())) {
            // line 32
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "property_type", array()), 'row');
            echo "
            ";
        }
        // line 34
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "area", array())) {
            // line 35
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "area", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 37
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "land_area", array())) {
            // line 38
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "land_area", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 40
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array())) {
            // line 41
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'row');
            echo "
            ";
        }
        // line 43
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array())) {
            // line 44
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array()), 'row');
            echo "
            ";
        }
        // line 46
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array())) {
            // line 47
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 49
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price_suffix", array())) {
            // line 50
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price_suffix", array()), 'row');
            echo "
            ";
        }
        // line 52
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array())) {
            // line 53
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 55
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array())) {
            // line 56
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 58
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 62
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Listing", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 65
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms", array())) {
            // line 66
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 68
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bathrooms", array())) {
            // line 69
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bathrooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 71
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bedrooms", array())) {
            // line 72
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bedrooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 74
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "garages", array())) {
            // line 75
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "garages", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 77
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 81
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Amenities", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("You can choose amenities that you have.", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row form__params\">
            ";
        // line 84
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "features", array())) {
            // line 85
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "features", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 87
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 91
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Tags", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("You can choose tags that you have.", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row form__params\">
            ";
        // line 94
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array())) {
            // line 95
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 97
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 101
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Special features", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 104
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year_built", array())) {
            // line 105
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year_built", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 107
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "video_tour", array())) {
            // line 108
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "video_tour", array()), 'row');
            echo "
            ";
        }
        // line 110
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agent", array())) {
            // line 111
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agent", array()), 'row');
            echo "
            ";
        }
        // line 113
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array())) {
            // line 114
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 116
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 120
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Additional details", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 123
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "additional_details", array())) {
            // line 124
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "additional_details", array()), 'row', array("row_class" => "form-group--col-12 form__dynamic"));
            echo "
            ";
        }
        // line 126
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 130
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Location", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("Set Google Maps location", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          ";
        // line 132
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_location", array())) {
            // line 133
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_location", array()), 'widget', array("attr" => array("class" => "map--location map--dashboard map--submit")));
            echo "
          ";
        }
        // line 135
        echo "        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 138
        echo $context["__internal_59a89cf48758f33f7fd4b423ff6d858cdbd84f86b73e778ab094180fee8bdc4a"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Photos", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("The first image will be set as property cover", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          ";
        // line 140
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array())) {
            // line 141
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array()), 'widget', array("attr" => array("class" => "")));
            echo "
          ";
        }
        // line 143
        echo "        </div>
      </section>

      ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "row")));
        echo "
      <div class=\"row form__buttons\">
        <button type=\"submit\" class=\"form__submit\">
          ";
        // line 149
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Save", "realtyspace")), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 152
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/property/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 152,  375 => 149,  369 => 146,  364 => 143,  358 => 141,  356 => 140,  351 => 138,  346 => 135,  340 => 133,  338 => 132,  333 => 130,  327 => 126,  321 => 124,  319 => 123,  313 => 120,  307 => 116,  301 => 114,  298 => 113,  292 => 111,  289 => 110,  283 => 108,  280 => 107,  274 => 105,  272 => 104,  266 => 101,  260 => 97,  254 => 95,  252 => 94,  246 => 91,  240 => 87,  234 => 85,  232 => 84,  226 => 81,  220 => 77,  214 => 75,  211 => 74,  205 => 72,  202 => 71,  196 => 69,  193 => 68,  187 => 66,  185 => 65,  179 => 62,  173 => 58,  167 => 56,  164 => 55,  158 => 53,  155 => 52,  149 => 50,  146 => 49,  140 => 47,  137 => 46,  131 => 44,  128 => 43,  122 => 41,  119 => 40,  113 => 38,  110 => 37,  104 => 35,  101 => 34,  95 => 32,  92 => 31,  86 => 29,  83 => 28,  77 => 26,  75 => 25,  69 => 22,  63 => 19,  58 => 17,  55 => 16,  52 => 15,  46 => 10,  43 => 9,  37 => 8,  33 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/submit.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\property\\submit.twig");
    }
}
