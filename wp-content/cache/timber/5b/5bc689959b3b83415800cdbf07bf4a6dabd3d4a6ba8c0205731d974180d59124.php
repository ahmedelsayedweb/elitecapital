<?php

/* modules/user/macro.twig */
class __TwigTemplate_f2a7fa9bf4f65c0e63a31856f0a6716e128c1ed58bfca05952f198dc5c6b3d0c extends Twig_Template
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
    }

    // line 1
    public function getavatar($__user_id__ = null, $__size__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user_id" => $__user_id__,
            "size" => $__size__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["avatar"] = call_user_func_array($this->env->getFunction('fn')->getCallable(), array("get_avatar", (isset($context["user_id"]) ? $context["user_id"] : null), (isset($context["size"]) ? $context["size"] : null), "", "", array("class" => (isset($context["class"]) ? $context["class"] : null))));
            // line 3
            echo "  ";
            if ( !twig_test_empty((isset($context["avatar"]) ? $context["avatar"] : null))) {
                // line 4
                echo "    ";
                echo (isset($context["avatar"]) ? $context["avatar"] : null);
                echo "
  ";
            } else {
                // line 6
                echo "    <img
        class=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
        data-src=\"holder.js/";
                // line 8
                echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
                echo "?auto=yes&text=&font=FontAwesome&size=100\"
    />
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

    public function getTemplateName()
    {
        return "modules/user/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  50 => 7,  47 => 6,  41 => 4,  38 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/user/macro.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\user\\macro.twig");
    }
}
