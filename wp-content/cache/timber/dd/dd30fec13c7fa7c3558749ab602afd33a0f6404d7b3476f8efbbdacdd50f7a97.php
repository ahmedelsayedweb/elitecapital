<?php

/* modules/user/template.twig */
class __TwigTemplate_15650b7b4ed8b283bcd4d86cfba254195a3ce1a8de901903a296ae88bb849fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-archive.twig", "modules/user/template.twig", 1);
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
        $context["__internal_3d7001878c51346249129cefb828d4ffa73b2e156d7c8220a7f3a8b927535390"] = $this->loadTemplate("macro.twig", "modules/user/template.twig", 2);
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

      ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form form--property-add js-submit-form js-parsley")));
        echo "

      <section class=\"widget js-widget widget--main widget--collapse\">
        ";
        // line 13
        echo $context["__internal_3d7001878c51346249129cefb828d4ffa73b2e156d7c8220a7f3a8b927535390"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contact", "realtyspace")), null, "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 16
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array())) {
            // line 17
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'row');
            echo "
            ";
        }
        // line 19
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array())) {
            // line 20
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'row');
            echo "
            ";
        }
        // line 22
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nickname", array())) {
            // line 23
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nickname", array()), 'row');
            echo "
            ";
        }
        // line 25
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_email", array())) {
            // line 26
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_email", array()), 'row', array("type" => "email"));
            echo "
            ";
        }
        // line 28
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array())) {
            // line 29
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'row', array("type" => "tel"));
            echo "
            ";
        }
        // line 31
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_url", array())) {
            // line 32
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_url", array()), 'row', array("type" => "url"));
            echo "
            ";
        }
        // line 34
        echo "          </div>
        </div>
      </section>

      <section class=\"widget js-widget widget--main widget--collapse\">
        ";
        // line 39
        echo $context["__internal_3d7001878c51346249129cefb828d4ffa73b2e156d7c8220a7f3a8b927535390"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("About me", "realtyspace")), null, "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            ";
        // line 42
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array())) {
            // line 43
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
            ";
        }
        // line 45
        echo "
          </div>
        </div>
      </section>
      <section class=\"widget js-widget widget--main widget--collapse\">
        ";
        // line 50
        echo $context["__internal_3d7001878c51346249129cefb828d4ffa73b2e156d7c8220a7f3a8b927535390"]->getwidget_header(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Change your password", "realtyspace")), null, "main");
        echo "
        <div class=\"widget__content\">
          <div class=\"row\">
            <div class=\"col-sm-12 col-md-6 col-lg-4\">
              <div class=\"row\">
                ";
        // line 55
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_pass", array())) {
            // line 56
            echo "                  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_pass", array()), "first", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
                ";
        }
        // line 58
        echo "              </div>
              <div class=\"row\">
                ";
        // line 60
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_pass", array())) {
            // line 61
            echo "                  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user_pass", array()), "second", array()), 'row', array("row_class" => "form-group--col-12"));
            echo "
                ";
        }
        // line 63
        echo "              </div>
            </div>
          </div>
        </div>
      </section>

      ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "row")));
        echo "
      <div class=\"row form__buttons\">
        <button type=\"submit\" class=\"form__submit\">
          ";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Save", "realtyspace")), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 75
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>
    <!-- END LISTING-->
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/user/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  178 => 72,  172 => 69,  164 => 63,  158 => 61,  156 => 60,  152 => 58,  146 => 56,  144 => 55,  136 => 50,  129 => 45,  123 => 43,  121 => 42,  115 => 39,  108 => 34,  102 => 32,  99 => 31,  93 => 29,  90 => 28,  84 => 26,  81 => 25,  75 => 23,  72 => 22,  66 => 20,  63 => 19,  57 => 17,  55 => 16,  49 => 13,  43 => 10,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/user/template.twig", "C:\\xampp\\htdocs\\my-work-place\\elite\\wp-content\\themes\\realtyspace\\views\\modules\\user\\template.twig");
    }
}
