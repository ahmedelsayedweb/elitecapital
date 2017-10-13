<?php

/* modules/property/submit.twig */
class __TwigTemplate_dc3c3ab0952be45047a48792c1c5db1ce06cc75cd8e679dcb36a1f24ec6e7c8c extends Twig_Template
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
        $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"] = $this->loadTemplate("macro.twig", "modules/property/submit.twig", 2);
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
        $context["template"] = ('' === $tmp = "
private function register_post_type()
    {
\tpll_register_string('realtyspace', 'Amenities');
\tpll_register_string('realtyspace', 'Listing');
\tpll_register_string('realtyspace', 'You can choose amenities that you have.');
\tpll_register_string('realtyspace', 'Tags');
\tpll_register_string('realtyspace', 'You can choose tags that you have.');
\tpll_register_string('realtyspace', 'Special features');
\tpll_register_string('realtyspace', 'Additional details');
\tpll_register_string('realtyspace', 'Location');
\tpll_register_string('realtyspace', 'Set Google Maps location');
\tpll_register_string('realtyspace', 'Save');
\tpll_register_string('realtyspace', 'Photos');
\tpll_register_string('realtyspace', 'The first image will be set as property cover');

    <svg class=\"property__files-icon\" style=\"width: 120px; height: 120px;\">
      <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-doc\"></use>
    </svg>
  ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "  ";
        call_user_func_array($this->env->getFunction('js_inline_template')->getCallable(), array("dropzone-file-thumb", (isset($context["template"]) ? $context["template"] : null)));
        // line 32
        echo "  <div class=\"site site--main\">
    ";
        // line 33
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getpage_header((isset($context["page"]) ? $context["page"] : null));
        echo "
    <div class=\"site__main\">
      ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form form--property-add js-submit-form js-parsley")));
        echo "

      <section class=\"widget js-widget widget--main widget--collapse\">
        ";
        // line 38
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array(" ", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array(" ", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 41
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array())) {
            // line 42
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contract_type", array())) {
            // line 45
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contract_type", array()), 'row');
            echo "
            ";
        }
        // line 47
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "property_type", array())) {
            // line 48
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "property_type", array()), 'row');
            echo "
            ";
        }
        // line 50
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "area", array())) {
            // line 51
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "area", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 53
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "land_area", array())) {
            // line 54
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "land_area", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 56
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array())) {
            // line 57
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'row');
            echo "
            ";
        }
        // line 59
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array())) {
            // line 60
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sku", array()), 'row');
            echo "
            ";
        }
        // line 62
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array())) {
            // line 63
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 65
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price_suffix", array())) {
            // line 66
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price_suffix", array()), 'row');
            echo "
            ";
        }
        // line 68
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array())) {
            // line 69
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 71
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array())) {
            // line 72
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "featured", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 74
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 78
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Listing", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 81
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms", array())) {
            // line 82
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 84
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bathrooms", array())) {
            // line 85
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bathrooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 87
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bedrooms", array())) {
            // line 88
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bedrooms", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 90
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "garages", array())) {
            // line 91
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "garages", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 93
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 97
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Amenities", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("You can choose amenities that you have.", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row form__params\">
            ";
        // line 100
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "features", array())) {
            // line 101
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "features", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 103
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 107
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Tags", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("You can choose tags that you have.", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row form__params\">
            ";
        // line 110
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array())) {
            // line 111
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 113
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 117
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Special features", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 120
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year_built", array())) {
            // line 121
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year_built", array()), 'row', array("type" => "number"));
            echo "
            ";
        }
        // line 123
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "video_tour", array())) {
            // line 124
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "video_tour", array()), 'row');
            echo "
            ";
        }
        // line 126
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agent", array())) {
            // line 127
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agent", array()), 'row');
            echo "
            ";
        }
        // line 129
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array())) {
            // line 130
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "attachments", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 132
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 136
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Additional details", "realtyspace")), "", "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 139
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "additional_details", array())) {
            // line 140
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "additional_details", array()), 'row', array("row_class" => "form-group--col-12 form__dynamic"));
            echo "
            ";
        }
        // line 142
        echo "          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 146
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Location", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("Set Google Maps location", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          ";
        // line 148
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_location", array())) {
            // line 149
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_location", array()), 'widget', array("attr" => array("class" => "map--location map--dashboard map--submit")));
            echo "
          ";
        }
        // line 151
        echo "        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--no-margin widget--collapse\">
        ";
        // line 154
        echo $context["__internal_27dfeab0a063c4e25e80bc9523047a6d43ceec982ecebe5e836a15d7d5ba1472"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Photos", "realtyspace")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("The first image will be set as property cover", "realtyspace")), "main");
        echo "
        <div class=\"widget__content\">
          ";
        // line 156
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array())) {
            // line 157
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array()), 'widget', array("attr" => array("class" => "")));
            echo "
          ";
        }
        // line 159
        echo "        </div>
      </section>

      ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "row")));
        echo "
      <div class=\"row form__buttons\">
        <button type=\"submit\" class=\"form__submit\">
          ";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Save", "realtyspace")), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 168
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
        return array (  397 => 168,  391 => 165,  385 => 162,  380 => 159,  374 => 157,  372 => 156,  367 => 154,  362 => 151,  356 => 149,  354 => 148,  349 => 146,  343 => 142,  337 => 140,  335 => 139,  329 => 136,  323 => 132,  317 => 130,  314 => 129,  308 => 127,  305 => 126,  299 => 124,  296 => 123,  290 => 121,  288 => 120,  282 => 117,  276 => 113,  270 => 111,  268 => 110,  262 => 107,  256 => 103,  250 => 101,  248 => 100,  242 => 97,  236 => 93,  230 => 91,  227 => 90,  221 => 88,  218 => 87,  212 => 85,  209 => 84,  203 => 82,  201 => 81,  195 => 78,  189 => 74,  183 => 72,  180 => 71,  174 => 69,  171 => 68,  165 => 66,  162 => 65,  156 => 63,  153 => 62,  147 => 60,  144 => 59,  138 => 57,  135 => 56,  129 => 54,  126 => 53,  120 => 51,  117 => 50,  111 => 48,  108 => 47,  102 => 45,  99 => 44,  93 => 42,  91 => 41,  85 => 38,  79 => 35,  74 => 33,  71 => 32,  68 => 31,  46 => 10,  43 => 9,  37 => 8,  33 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/submit.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\property\\submit.twig");
    }
}
