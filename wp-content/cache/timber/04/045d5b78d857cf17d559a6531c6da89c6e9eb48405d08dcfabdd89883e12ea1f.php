<?php

/* modules/agent/macro.twig */
class __TwigTemplate_e66ca1979af5cd5940ea4b656de15e96fcec1394c6b98376028a34274cc15cdf extends Twig_Template
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
        // line 2
        $context["__internal_6f33b21eace52b47619924e45d79c242d67d02527187923e35b48a62c3ac41d9"] = $this->loadTemplate("macro.twig", "modules/agent/macro.twig", 2);
        // line 3
        echo "
";
        // line 30
        echo "
";
        // line 38
        echo "
";
        // line 68
        echo "
";
        // line 79
        echo "
";
        // line 86
        echo "
";
        // line 99
        echo "
";
        // line 111
        echo "
";
        // line 136
        echo "

";
    }

    // line 4
    public function getagent_item($__agent__ = null, $__display_mode__ = "list", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "display_mode" => $__display_mode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "  ";
            $context["am"] = $this;
            // line 6
            echo "  <div class=\"listing__item\">
    <div class=\"worker__item vcard\">
      ";
            // line 8
            echo $context["am"]->getphoto((isset($context["agent"]) ? $context["agent"] : null), 245, 245);
            echo "
      ";
            // line 9
            if (((isset($context["display_mode"]) ? $context["display_mode"] : null) == "grid")) {
                // line 10
                echo "        <div class=\"worker__intro\">
          ";
                // line 11
                echo $context["am"]->getname_and_title((isset($context["agent"]) ? $context["agent"] : null));
                echo "
          ";
                // line 12
                echo $context["am"]->getcontact_and_count((isset($context["agent"]) ? $context["agent"] : null));
                echo "
        </div>
        ";
                // line 14
                echo $context["am"]->getdescription((isset($context["agent"]) ? $context["agent"] : null));
                echo "
      ";
            } else {
                // line 16
                echo "        <div class=\"worker__intro\">
          <div class=\"worker__intro-head\">
            ";
                // line 18
                echo $context["am"]->getname_and_title((isset($context["agent"]) ? $context["agent"] : null));
                echo "
            ";
                // line 19
                echo $context["am"]->getcontact_and_count((isset($context["agent"]) ? $context["agent"] : null));
                echo "
          </div>
          <div class=\"worker__intro-row\">
            ";
                // line 22
                echo $context["am"]->getdescription((isset($context["agent"]) ? $context["agent"] : null));
                echo "
          </div>
        </div>
      ";
            }
            // line 26
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array()), "html", null, true);
            echo "\" class=\"worker__more\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("more details", "realtyspace")), "html", null, true);
            echo "</a>
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

    // line 31
    public function getdescription($__agent__ = null, $__limit__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "limit" => $__limit__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "  <div class=\"worker__descr\">
    <p>
      ";
            // line 34
            echo (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "excerpt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "excerpt", array()), call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "content", array()), ((array_key_exists("limit", $context)) ? (_twig_default_filter((isset($context["limit"]) ? $context["limit"] : null), 80)) : (80)))))) : (call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "content", array()), ((array_key_exists("limit", $context)) ? (_twig_default_filter((isset($context["limit"]) ? $context["limit"] : null), 80)) : (80))))));
            echo "
    </p>
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

    // line 39
    public function getcontacts($__agent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "  ";
            if ((($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "contact_numbers", array()) || $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array())) || $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "additional_fields", array()))) {
                // line 41
                echo "    <div class=\"dl-table worker__contacts\">
      ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "contact_numbers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact_number"]) {
                    // line 43
                    echo "        <dl class=\"tel\">
          <dt class=\"type\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact_number"], "type", array()), "html", null, true);
                    echo "</dt>
          <dd>
            <a href=\"tel:";
                    // line 46
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["contact_number"], "number", array()), array(" " => "")), "html", null, true);
                    echo "\" class=\"uri value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact_number"], "number", array()), "html", null, true);
                    echo "</a>
          </dd>
        </dl>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_number'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      ";
                if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array())) {
                    // line 51
                    echo "        <dl class=\"email\">
          <dt class=\"type\">";
                    // line 52
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Email", "realtyspace")), "html", null, true);
                    echo "</dt>
          <dd>
            <a href=\"mailto:";
                    // line 54
                    echo antispambot($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array()));
                    echo "\" class=\"uri value\">";
                    echo antispambot($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array()));
                    echo "</a>
          </dd>
        </dl>
      ";
                }
                // line 58
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "additional_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 59
                    echo "        <dl>
          <dt class=\"type\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                    echo "</dt>
          <dd>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "value", array()), "html", null, true);
                    echo "</dd>
        </dl>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "
    </div>
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

    // line 69
    public function getsocial($__agent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "  ";
            $context["__internal_3a8dd5908e0ae058b375b169919d4299cbfb4a206cc276de92607244b57bf34e"] = $this;
            // line 71
            echo "  ";
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "social_profiles", array())) {
                // line 72
                echo "    <div class=\"social social--worker\">
      ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "social_profiles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["social_profile"]) {
                    // line 74
                    echo "        ";
                    echo $context["__internal_3a8dd5908e0ae058b375b169919d4299cbfb4a206cc276de92607244b57bf34e"]->getsocial_item($context["social_profile"], "social__item");
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_profile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    </div>
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

    // line 80
    public function getsocial_item($__item__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "  ";
            $context["__internal_012431869ae8688972aea0b0251d90e1f3586d0762679b94282823f52c7e4cd2"] = $this->loadTemplate("macro.twig", "modules/agent/macro.twig", 81);
            // line 82
            echo "  <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
    ";
            // line 83
            echo $context["__internal_012431869ae8688972aea0b0251d90e1f3586d0762679b94282823f52c7e4cd2"]->geticon(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "html_attr"));
            echo "
  </a>
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

    // line 87
    public function getname_and_title($__agent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "  <h3 class=\"worker__name fn\">
    ";
            // line 89
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array())) {
                // line 90
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array()), "esc_url"), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array());
                echo "</a>
    ";
            } else {
                // line 92
                echo "      ";
                echo $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array());
                echo "
    ";
            }
            // line 94
            echo "  </h3>
  ";
            // line 95
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "job_title", array())) {
                // line 96
                echo "    <div class=\"worker__post\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "job_title", array()), "html", null, true);
                echo "</div>
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

    // line 100
    public function getcontact_and_count($__agent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "  <button type=\"button\" class=\"worker__show js-unhide\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contact agent", "realtyspace")), "html", null, true);
            echo "</button>
  ";
            // line 102
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array())) {
                // line 103
                echo "    <div class=\"worker__listings\">
      <i class=\"worker__favorites worker__favorites--highlight\"></i> ";
                // line 104
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Listings", "realtyspace")), "html", null, true);
                echo " -
      <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array()), "html", null, true);
                echo "\">
        ";
                // line 106
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('_n')->getCallable(), array("1 property", "%s properties", $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "property_count", array()), "realtyspace")), $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "property_count", array())), "html", null, true);
                echo "
      </a>
    </div>
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

    // line 112
    public function getphoto($__agent__ = null, $__width__ = null, $__height__ = null, $__clickable__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "width" => $__width__,
            "height" => $__height__,
            "clickable" => $__clickable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "  ";
            $context["macro"] = $this->loadTemplate("macro.twig", "modules/agent/macro.twig", 113);
            // line 114
            echo "  <div class=\"worker__photo \">
    ";
            // line 115
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "is_user", array())) {
                // line 116
                echo "      ";
                $context["__internal_964f8a6aa920072bca7a829cf4cf116133cb623b7f4e99fa8a9c7a3a4953bf5e"] = $this->loadTemplate("modules/user/macro.twig", "modules/agent/macro.twig", 116);
                // line 117
                echo "    <span class=\"item-photo item-photo--static\">
      ";
                // line 118
                echo $context["__internal_964f8a6aa920072bca7a829cf4cf116133cb623b7f4e99fa8a9c7a3a4953bf5e"]->getavatar($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "id", array()), (isset($context["width"]) ? $context["width"] : null));
                echo "
       </span>
    ";
            } else {
                // line 121
                echo "      ";
                if ((isset($context["clickable"]) ? $context["clickable"] : null)) {
                    // line 122
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array()), "html", null, true);
                    echo "\" class=\"item-photo item-photo--static\">
          ";
                    // line 123
                    echo $context["macro"]->getthumbnail($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "featured_image", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), "photo", $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array()));
                    echo "
          <figure class=\"item-photo__hover\">
            <span class=\"item-photo__more\">";
                    // line 125
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("View Details", "realtyspace")), "html", null, true);
                    echo "</span>
          </figure>
        </a>
      ";
                } else {
                    // line 129
                    echo "        <span class=\"item-photo item-photo--static\">
                ";
                    // line 130
                    echo $context["macro"]->getthumbnail($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "featured_image", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), "photo", $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array()));
                    echo "
            </span>
      ";
                }
                // line 133
                echo "    ";
            }
            // line 134
            echo "  </div>
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

    // line 138
    public function getagent_item_short($__agent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "agent" => $__agent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            echo "  ";
            // line 140
            echo "  <div class=\"listing__item\">
    <div class=\"worker__item vcard\">
      <div class=\"worker__photo\">
        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "link", array()), "html", null, true);
            echo "\" class=\"item-photo\">
          ";
            // line 144
            $context["thumb"] = Timber\ImageHelper::resize($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "featured_image", array()), 500);
            // line 145
            echo "          <img class=\"photo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb"]) ? $context["thumb"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array()), "html", null, true);
            echo "\">
          <figure class=\"item-photo__hover\">
            <span class=\"item-photo__more\">";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("View", "realtyspace")), "html", null, true);
            echo "</span>
          </figure>
        </a>
      </div>

      <h3 class=\"worker__name fn\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "name", array()), "html", null, true);
            echo "</h3>

      ";
            // line 154
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "job_title", array())) {
                // line 155
                echo "        <div class=\"worker__contacts\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "job_title", array()), "html", null, true);
                echo "</div>
      ";
            }
            // line 157
            echo "
      ";
            // line 158
            if ($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array())) {
                // line 159
                echo "        <div class=\"worker__contacts\">
          <div class=\"email\">
            <a href=\"mailto:";
                // line 161
                echo antispambot($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array()));
                echo "\" class=\"uri value\">";
                echo antispambot($this->getAttribute((isset($context["agent"]) ? $context["agent"] : null), "email", array()));
                echo "</a>
          </div>
        </div>

      ";
            }
            // line 166
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

    public function getTemplateName()
    {
        return "modules/agent/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 166,  617 => 161,  613 => 159,  611 => 158,  608 => 157,  602 => 155,  600 => 154,  595 => 152,  587 => 147,  579 => 145,  577 => 144,  573 => 143,  568 => 140,  566 => 139,  554 => 138,  538 => 134,  535 => 133,  529 => 130,  526 => 129,  519 => 125,  514 => 123,  509 => 122,  506 => 121,  500 => 118,  497 => 117,  494 => 116,  492 => 115,  489 => 114,  486 => 113,  471 => 112,  451 => 106,  447 => 105,  443 => 104,  440 => 103,  438 => 102,  433 => 101,  421 => 100,  402 => 96,  400 => 95,  397 => 94,  391 => 92,  383 => 90,  381 => 89,  378 => 88,  366 => 87,  348 => 83,  341 => 82,  338 => 81,  325 => 80,  308 => 76,  299 => 74,  295 => 73,  292 => 72,  289 => 71,  286 => 70,  274 => 69,  256 => 64,  247 => 61,  243 => 60,  240 => 59,  235 => 58,  226 => 54,  221 => 52,  218 => 51,  215 => 50,  203 => 46,  198 => 44,  195 => 43,  191 => 42,  188 => 41,  185 => 40,  173 => 39,  154 => 34,  150 => 32,  137 => 31,  115 => 26,  108 => 22,  102 => 19,  98 => 18,  94 => 16,  89 => 14,  84 => 12,  80 => 11,  77 => 10,  75 => 9,  71 => 8,  67 => 6,  64 => 5,  51 => 4,  45 => 136,  42 => 111,  39 => 99,  36 => 86,  33 => 79,  30 => 68,  27 => 38,  24 => 30,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/agent/macro.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\agent\\macro.twig");
    }
}
