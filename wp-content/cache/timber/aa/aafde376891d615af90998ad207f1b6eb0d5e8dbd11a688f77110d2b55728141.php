<?php

/* modules/post/macro.twig */
class __TwigTemplate_44cf87322e84279694431a80e76e29ab5d30b51f2d67b3f4a533c5fb827426bf extends Twig_Template
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
        // line 19
        echo "
";
        // line 26
        echo "
";
        // line 32
        echo "
";
        // line 40
        echo "
";
    }

    // line 1
    public function getheader($__post__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "post" => $__post__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["__internal_242dc5a95c2afc57031868a841057a7ba54c5883c2b04887e887bf168beb22e3"] = $this;
            // line 3
            echo "  ";
            $context["__internal_97ae0fd20815fad1266d7b9635a845a11d25ea31fbeffa610ad1e799917d0956"] = $this;
            // line 4
            echo "  <div class=\"article__item-header\">
    <time datetime=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "\" class=\"article__time\">
      ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array(0 => "M"), "method"), "html", null, true);
            echo "
      <strong>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array(0 => "d"), "method"), "html", null, true);
            echo "</strong>
    </time>
    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link", array()), "html", null, true);
            echo "#comments\" class=\"article__comment\">
      <i class=\"fa fa-comments\"></i>";
            // line 10
            echo call_user_func_array($this->env->getFunction('comments_number_text')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array())));
            echo "
    </a>
    <div class=\"article__item-info\">
      <h3 class=\"article__item-title\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
            echo "</a></h3>
      ";
            // line 14
            echo $context["__internal_97ae0fd20815fad1266d7b9635a845a11d25ea31fbeffa610ad1e799917d0956"]->getpost_format($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "format", array()));
            echo "
      ";
            // line 15
            echo $context["__internal_242dc5a95c2afc57031868a841057a7ba54c5883c2b04887e887bf168beb22e3"]->getcategories($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()));
            echo "
    </div>
  </div>
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

    // line 20
    public function getcategories($__post_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "post_id" => $__post_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  <div class=\"article__tags\">
    ";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Categories", "realtyspace")), "html", null, true);
            echo ":
    ";
            // line 23
            echo _twig_default_filter(call_user_func_array($this->env->getFunction('category_list')->getCallable(), array((isset($context["post_id"]) ? $context["post_id"] : null), ",")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("None", "realtyspace")));
            echo "
  </div>
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

    // line 27
    public function gettags($__post_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "post_id" => $__post_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "  <div class=\"article__tags\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Tags", "realtyspace")), "html", null, true);
            echo ":
    ";
            // line 29
            echo _twig_default_filter(call_user_func_array($this->env->getFunction('tag_list')->getCallable(), array((isset($context["post_id"]) ? $context["post_id"] : null), ",")), call_user_func_array($this->env->getFunction('__')->getCallable(), array("None", "realtyspace")));
            echo "
  </div>
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

    // line 33
    public function getpost_format($__format__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "format" => $__format__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  ";
            if ((isset($context["format"]) ? $context["format"] : null)) {
                // line 35
                echo "    <a class=\"article__post-format\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "post_format_url", array(0 => (isset($context["format"]) ? $context["format"] : null)), "method"), "html", null, true);
                echo "\">
      <i class=\"fa fa-";
                // line 36
                if (((isset($context["format"]) ? $context["format"] : null) == "video")) {
                    echo "video-camera";
                } elseif (((isset($context["format"]) ? $context["format"] : null) == "gallery")) {
                    echo "picture-o";
                } elseif (((isset($context["format"]) ? $context["format"] : null) == "")) {
                } elseif (((isset($context["format"]) ? $context["format"] : null) == "")) {
                }
                echo "\"></i>
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function getpost_preview($__post__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "post" => $__post__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "  ";
            $context["post_format"] = (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "format", array()), "default")) : ("default"));
            // line 43
            echo "  ";
            if (!twig_in_filter((isset($context["post_format"]) ? $context["post_format"] : null), array(0 => "default", 1 => "gallery", 2 => "video"))) {
                // line 44
                echo "    ";
                $context["post_format"] = "default";
                // line 45
                echo "  ";
            }
            // line 46
            echo "
  ";
            // line 47
            echo twig_include($this->env, $context, (("modules/post/formats/" . (isset($context["post_format"]) ? $context["post_format"] : null)) . ".twig"));
            echo "
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

    public function getTemplateName()
    {
        return "modules/post/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 47,  247 => 46,  244 => 45,  241 => 44,  238 => 43,  235 => 42,  223 => 41,  198 => 36,  193 => 35,  190 => 34,  178 => 33,  160 => 29,  155 => 28,  143 => 27,  125 => 23,  121 => 22,  118 => 21,  106 => 20,  87 => 15,  83 => 14,  77 => 13,  71 => 10,  67 => 9,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  33 => 1,  28 => 40,  25 => 32,  22 => 26,  19 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/post/macro.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\post\\macro.twig");
    }
}
