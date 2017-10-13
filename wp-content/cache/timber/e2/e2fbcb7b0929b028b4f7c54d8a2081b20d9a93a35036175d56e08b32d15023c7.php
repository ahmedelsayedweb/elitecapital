<?php

/* modules/property/macro.twig */
class __TwigTemplate_499bc489e5a7e9c4ac93763c254f167971c9443bd25148bf3e917a20c6008aeb extends Twig_Template
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
        echo "
";
        // line 9
        echo "
";
        // line 47
        echo "

";
        // line 95
        echo "

";
        // line 127
        echo "
";
        // line 224
        echo "
";
        // line 245
        echo "


";
        // line 264
        echo "
";
        // line 270
        echo "
";
        // line 293
        echo "


";
        // line 324
        echo "
";
        // line 340
        echo "

";
        // line 380
        echo "
";
        // line 412
        echo "

";
    }

    // line 3
    public function getlisting($__results__ = null, $__mode__ = null, $__submode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "results" => $__results__,
            "mode" => $__mode__,
            "submode" => $__submode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "  ";
            $context["__internal_a44e8c148c649c2a9849a9b88043df2f140a89291480dc50c6b89a3c45d9fa9a"] = $this;
            // line 5
            echo "  <div class=\"listing listing--";
            echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
            echo " ";
            if ((isset($context["submode"]) ? $context["submode"] : null)) {
                echo " listing--";
                echo twig_escape_filter($this->env, (isset($context["submode"]) ? $context["submode"] : null), "html", null, true);
            }
            echo " properties properties--";
            echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
            echo "\">
    ";
            // line 6
            echo $context["__internal_a44e8c148c649c2a9849a9b88043df2f140a89291480dc50c6b89a3c45d9fa9a"]->getitems((isset($context["results"]) ? $context["results"] : null), (isset($context["mode"]) ? $context["mode"] : null));
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

    // line 10
    public function getgrid_item($__property__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "  ";
            $context["__internal_c555fc026869d044b2a22701ad43fd78933748f21c511bd8a4885a7e62505122"] = $this;
            // line 12
            echo "
  ";
            // line 13
            $context["options"] = twig_array_merge(array("gallery_mode" => false, "hover_params" => true, "hover_btn" => false, "index" => null), ((            // line 18
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : null), array())) : (array())));
            // line 19
            echo "
  <div class=\"listing__item\">
    <div class=\"properties__item\"
        ";
            // line 22
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "gallery_mode", array())) {
                // line 23
                echo "          data-item data-size=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array()), "width", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array()), "height", array()), "html", null, true);
                echo "\"
          data-src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array()), "src", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 26
            echo "    >
      ";
            // line 27
            echo $context["__internal_c555fc026869d044b2a22701ad43fd78933748f21c511bd8a4885a7e62505122"]->getthumbnail((isset($context["property"]) ? $context["property"] : null), $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "hover_params", array()), $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "hover_btn", array()), true, true, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "gallery_mode", array()), $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "index", array()));
            echo "
      <!-- end of block .properties__thumb-->
      <div class=\"properties__info\">
        ";
            // line 30
            echo $context["__internal_c555fc026869d044b2a22701ad43fd78933748f21c511bd8a4885a7e62505122"]->getaddress_link((isset($context["property"]) ? $context["property"] : null));
            echo "
        <!-- end of block .properties__param-->
        <hr class=\"divider--dotted properties__divider\">
        <div class=\"properties__offer\">
          <div class=\"properties__offer-column\">
            <div class=\"properties__offer-value\">
              ";
            // line 36
            echo $context["__internal_c555fc026869d044b2a22701ad43fd78933748f21c511bd8a4885a7e62505122"]->getprice((isset($context["property"]) ? $context["property"] : null), true);
            echo "
            </div>
          </div>
        </div>
      </div>
      <!-- end of block .properties__info-->
    </div>

    <!-- end of block .properties__item-->
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

    // line 49
    public function getlist_item($__property__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "  ";
            $context["macro"] = $this->loadTemplate("macro.twig", "modules/property/macro.twig", 50);
            // line 51
            echo "  ";
            $context["__internal_94232ed6198f534f60e0bb709e4ec00ecd00914f6812908c4058a760c93a7511"] = $this;
            // line 52
            echo "
  ";
            // line 53
            $context["options"] = twig_array_merge(array(), ((            // line 54
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : null), array())) : (array())));
            // line 55
            echo "
  <div class=\"listing__item\">
    <div class=\"properties__item\">
      ";
            // line 58
            echo $context["__internal_94232ed6198f534f60e0bb709e4ec00ecd00914f6812908c4058a760c93a7511"]->getthumbnail((isset($context["property"]) ? $context["property"] : null), true, false, true, true, false);
            echo "
      <!-- end of block .properties__thumb-->
      <div class=\"properties__details\">
        <div class=\"properties__info\">
          ";
            // line 62
            echo $context["__internal_94232ed6198f534f60e0bb709e4ec00ecd00914f6812908c4058a760c93a7511"]->getaddress_link((isset($context["property"]) ? $context["property"] : null));
            echo "

          <div class=\"properties__offer\">
            <div class=\"properties__offer-column\">
              <div class=\"properties__offer-value\">
                ";
            // line 67
            echo $context["__internal_94232ed6198f534f60e0bb709e4ec00ecd00914f6812908c4058a760c93a7511"]->getprice((isset($context["property"]) ? $context["property"] : null), true);
            echo "
              </div>
            </div>
          </div>
          <hr class=\"divider--dotted properties__divider\">

          <div class=\"properties__params--mob\">
            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link", array()), "html", null, true);
            echo "\" class=\"properties__more\">
              ";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("", "realtyspace")), "html", null, true);
            echo "
            </a>
            <span class=\"properties__params\">";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Built-Up", "realtyspace")), "html", null, true);
            echo " - ";
            echo _twig_default_filter(call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array()))), "-");
            echo "</span>
            <span class=\"properties__params\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Land Size", "realtyspace")), "html", null, true);
            echo " - ";
            echo _twig_default_filter(call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array()))), "-");
            echo "</span>
          </div>
        </div>

        <div class=\"properties__intro\">
          <p>";
            // line 83
            echo (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "excerpt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "excerpt", array()), wp_trim_words($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "content", array()), 100))) : (wp_trim_words($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "content", array()), 100)));
            echo "</p>
        </div>

        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link", array()), "html", null, true);
            echo "\" class=\"properties__more\">
          ";
            // line 87
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("", "realtyspace")), "html", null, true);
            echo "
        </a>
      </div>
      <!-- end of block .properties__info-->
    </div>
  </div>
  <!-- end of block .properties__item-->
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

    // line 97
    public function getthumbnail($__property__ = null, $__show_params__ = null, $__show_imagebtn__ = null, $__show_ribbon__ = true, $__show_link__ = true, $__gallery_mode__ = false, $__gallery_index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "show_params" => $__show_params__,
            "show_imagebtn" => $__show_imagebtn__,
            "show_ribbon" => $__show_ribbon__,
            "show_link" => $__show_link__,
            "gallery_mode" => $__gallery_mode__,
            "gallery_index" => $__gallery_index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "  ";
            // line 99
            echo "  ";
            $context["__internal_dfac0decb84b914400a0056b8b4db08bdf45fd9c4cf1f5193eb5941758365e58"] = $this;
            // line 100
            echo "  ";
            $context["__internal_2a389d0fbc37659039e40675c8e64b290a0c1a8f5ff18448c4bb1ac94fad6dd7"] = $this->loadTemplate("macro.twig", "modules/property/macro.twig", 100);
            // line 101
            echo "  <div class=\"properties__thumb\">
    ";
            // line 102
            ob_start();
            // line 103
            echo "      ";
            echo $context["__internal_2a389d0fbc37659039e40675c8e64b290a0c1a8f5ff18448c4bb1ac94fad6dd7"]->getthumbnail($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array()), "src", array()), 554, 360, null, (isset($context["gallery_mode"]) ? $context["gallery_mode"] : null), (($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "thumbnail", array(), "any", false, true), "alt", array()), $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "title", array()))) : ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "title", array()))));
            echo "
      ";
            // line 104
            if ((isset($context["show_params"]) ? $context["show_params"] : null)) {
                // line 105
                echo "        ";
                echo $context["__internal_dfac0decb84b914400a0056b8b4db08bdf45fd9c4cf1f5193eb5941758365e58"]->gethover_params((isset($context["property"]) ? $context["property"] : null));
                echo "
      ";
            }
            // line 107
            echo "      ";
            if ((isset($context["show_imagebtn"]) ? $context["show_imagebtn"] : null)) {
                // line 108
                echo "        <figure class=\"item-photo__hover\">
          <span class=\"item-photo__more\">";
                // line 109
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("View", "realtyspace")), "html", null, true);
                echo "</span>
        </figure>
      ";
            }
            // line 112
            echo "    ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 113
            echo "    ";
            if ((isset($context["show_link"]) ? $context["show_link"] : null)) {
                // line 114
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link", array()), "html", null, true);
                echo "\" class=\"item-photo\" ";
                if ((isset($context["gallery_mode"]) ? $context["gallery_mode"] : null)) {
                    echo " data-index=";
                    echo twig_escape_filter($this->env, (isset($context["gallery_index"]) ? $context["gallery_index"] : null), "html", null, true);
                    echo " data-trigger";
                }
                echo ">
        ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                echo "
      </a>
    ";
            } else {
                // line 118
                echo "      <div class=\"item-photo\">
        ";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 122
            echo "    ";
            if ((isset($context["show_ribbon"]) ? $context["show_ribbon"] : null)) {
                // line 123
                echo "      ";
                echo $context["__internal_dfac0decb84b914400a0056b8b4db08bdf45fd9c4cf1f5193eb5941758365e58"]->getribbon((isset($context["property"]) ? $context["property"] : null));
                echo "
    ";
            }
            // line 125
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

    // line 128
    public function gethover_params($__property__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 129
            echo "  ";
            // line 130
            echo "  ";
            if (($this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_style", array()) == "minimal")) {
                // line 131
                echo "    <figure class=\"item-photo__hover item-photo__hover--params  item-photo__hover--params-columns\">
      ";
                // line 132
                if ((twig_in_filter("type", $this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_fields", array())) && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array()))) {
                    // line 133
                    echo "        <span class=\"properties__param-type\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 135
                echo "
      <span class=\"properties__param\">
        ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 138
                    echo "          ";
                    if ((($context["field"] == "rooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array()))) {
                        // line 139
                        echo "            <span class=\"properties__param-column\">
                    <span class=\"properties__param-label\">";
                        // line 140
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Rooms", "realtyspace")), "html", null, true);
                        echo ":</span>
                    <span class=\"properties__param-value\">";
                        // line 141
                        echo (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array()), "-")) : ("-"));
                        echo "</span>
                </span>
          ";
                    } elseif (((                    // line 143
$context["field"] == "bathrooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array()))) {
                        // line 144
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 145
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bathrooms", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 146
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array());
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 148
$context["field"] == "bedrooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array()))) {
                        // line 149
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 150
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bedrooms", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 151
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array());
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 153
$context["field"] == "garages") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "garages", array()))) {
                        // line 154
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 155
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Garages", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 156
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "garages", array());
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 158
$context["field"] == "land_area") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "land_area", array()))) {
                        // line 159
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 160
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Land Size", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 161
                        echo _twig_default_filter(call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "land_area", array()))), "-");
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 163
$context["field"] == "area") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array()))) {
                        // line 164
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 165
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Built-Up", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 166
                        echo _twig_default_filter(call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array()))), "-");
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 168
$context["field"] == "contract_type") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array()))) {
                        // line 169
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 170
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contract type", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 171
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array());
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 173
$context["field"] == "agent") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "agent", array()))) {
                        // line 174
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 175
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Agent", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 176
                        echo $this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "agent", array()), "name", array());
                        echo "</span>
            </span>
          ";
                    } elseif (((                    // line 178
$context["field"] == "sku") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sku", array()))) {
                        // line 179
                        echo "            <span class=\"properties__param-column\">
                <span class=\"properties__param-label\">";
                        // line 180
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("SKU", "realtyspace")), "html", null, true);
                        echo ":</span>
                <span class=\"properties__param-value\">";
                        // line 181
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sku", array());
                        echo "</span>
            </span>
          ";
                    }
                    // line 184
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "      </span>
    </figure>
  ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 187
(isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_style", array()) == "detailed")) {
                // line 188
                echo "    <figure class=\"item-photo__hover item-photo__hover--params\">
      ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 190
                    echo "        ";
                    if ((($context["field"] == "rooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array()))) {
                        // line 191
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Rooms", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 192
$context["field"] == "bathrooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array()))) {
                        // line 193
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bathrooms", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 194
$context["field"] == "bedrooms") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array()))) {
                        // line 195
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bedrooms", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 196
$context["field"] == "garages") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "garages", array()))) {
                        // line 197
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Garages", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "garages", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 198
$context["field"] == "land_area") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "land_area", array()))) {
                        // line 199
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Land Size", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "land_area", array())));
                        echo "</span>
        ";
                    } elseif (((                    // line 200
$context["field"] == "area") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array()))) {
                        // line 201
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Built-Up", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array())));
                        echo "</span>
        ";
                    } elseif (((                    // line 202
$context["field"] == "contract_type") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array()))) {
                        // line 203
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contract type", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 204
$context["field"] == "type") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array()))) {
                        // line 205
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Property type", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 206
$context["field"] == "agent") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "agent", array()))) {
                        // line 207
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Agent", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo $this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "agent", array()), "name", array());
                        echo "</span>
        ";
                    } elseif (((                    // line 208
$context["field"] == "sku") && $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sku", array()))) {
                        // line 209
                        echo "          <span class=\"properties__params\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("SKU", "realtyspace")), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sku", array()), "html", null, true);
                        echo "</span>
        ";
                    }
                    // line 211
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_show_desciption", array())) {
                    // line 213
                    echo "        <span class=\"properties__intro \">
          ";
                    // line 214
                    echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "preview", array(0 => $this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "excerpt_length", array()), 1 => false, 2 => false), "method");
                    echo "
        </span>
      ";
                }
                // line 217
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "property_card", array()), "hover_show_date", array())) {
                    // line 218
                    echo "        <span class=\"properties__time\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Added date", "realtyspace")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('i18n_time_ago')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "date", array(0 => "c"), "method"))), "html", null, true);
                    echo "</span>
      ";
                }
                // line 220
                echo "      <span class=\"properties__more\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("", "realtyspace")), "html", null, true);
                echo "</span>
    </figure>
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

    // line 225
    public function getprice($__property__ = null, $__strong_price__ = false, $__show_wrapper__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "strong_price" => $__strong_price__,
            "show_wrapper" => $__show_wrapper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 226
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "has_price", array())) {
                // line 227
                echo "    ";
                echo (((isset($context["strong_price"]) ? $context["strong_price"] : null)) ? ("<strong>") : (""));
                echo "
    ";
                // line 228
                echo call_user_func_array($this->env->getFilter('price')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price", array())));
                echo "
    ";
                // line 229
                echo (((isset($context["strong_price"]) ? $context["strong_price"] : null)) ? ("</strong>") : (""));
                echo "
    ";
                // line 230
                if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price_suffix", array())) {
                    // line 231
                    echo "      ";
                    if ((isset($context["show_wrapper"]) ? $context["show_wrapper"] : null)) {
                        // line 232
                        echo "        <span class=\"properties__offer-period\">
                    /";
                        // line 233
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price_suffix", array()), "html", null, true);
                        echo "
                </span>
      ";
                    } else {
                        // line 236
                        echo "        ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price_suffix", array()), "html", null, true);
                        echo "
      ";
                    }
                    // line 238
                    echo "    ";
                }
                // line 239
                echo "  ";
            } else {
                // line 240
                echo "    <strong>
      ";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_propgeneral_property_price_undefined", array()), "html", null, true);
                echo "
    </strong>
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

    // line 248
    public function getaddress_link($__property__ = null, $__simple__ = false, $__show_link__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "simple" => $__simple__,
            "show_link" => $__show_link__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 249
            echo "  ";
            ob_start();
            // line 250
            echo "    <span class=\"properties__address-street\">";
            echo $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "title", array());
            echo "</span>
    <span class=\"properties__address-city\">";
            // line 251
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location", array()), ", "), "html", null, true);
            echo "</span>
  ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 253
            echo "
  ";
            // line 254
            if ((isset($context["show_link"]) ? $context["show_link"] : null)) {
                // line 255
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link", array()), "html", null, true);
                echo "\" class=\"properties__address ";
                if ((isset($context["simple"]) ? $context["simple"] : null)) {
                    echo " properties__address--simple";
                }
                echo "\">
      ";
                // line 256
                echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
                echo "
    </a>
  ";
            } else {
                // line 259
                echo "    <div class=\"properties__address ";
                if ((isset($context["simple"]) ? $context["simple"] : null)) {
                    echo " properties__address--simple";
                }
                echo "\">
      ";
                // line 260
                echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
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

    // line 265
    public function getribbon($__property__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 266
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array())) {
                // line 267
                echo "    <span class=\"properties__ribon\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "contract_type", array()), "html", null, true);
                echo "</span>
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

    // line 271
    public function getpaypal_btn($__property__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 272
            echo "  ";
            // line 273
            echo "  ";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_proppayment_enabled", array())) {
                // line 274
                echo "    <form action=\"https://www.";
                echo (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_proppayment_sandbox", array())) ? ("sandbox.") : (""));
                echo "paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
      <input type=\"hidden\" name=\"notify_url\" value=\"";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "url", array(0 => "/", 1 => array("AngellEYE_Paypal_Ipn_For_Wordpress" => "", "action" => "ipn_handler")), "method"), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
      <input type=\"hidden\" name=\"return\" value=";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "current_url", array(0 => array("payment_status" => "success")), "method"), "html", null, true);
                echo ">
      <input type=\"hidden\" name=\"cancel_return\" value=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wpurl"]) ? $context["wpurl"] : null), "current_url", array(0 => array("payment_status" => "error")), "method"), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"business\" value=\"";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_proppayment_email", array()), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"lc\" value=\"US\">
      <input type=\"hidden\" name=\"item_name\" value=\"";
                // line 281
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Payment for publishing \"%s\" item", "realtyspace")), $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "name", array())), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"item_number\" value=\"";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "id", array()), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"amount\" value=\"";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_proppayment_amount", array()), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"currency_code\" value=\"";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "config_proppayment_currency", array()), "html", null, true);
                echo "\">
      <input type=\"hidden\" name=\"button_subtype\" value=\"services\">
      <input type=\"hidden\" name=\"no_note\" value=\"0\">
      <input type=\"hidden\" name=\"bn\" value=\"PP-BuyNowBF:btn_paynow_SM.gif:NonHostedGuest\">
      <button name=\"submit\" type=\"submit\" class=\"properties__pay\">";
                // line 288
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Pay with PayPal", "realtyspace")), "html", null, true);
                echo "</button>
      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
    </form>
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

    // line 296
    public function getshort_params($__property__ = null, $__wrapper_class__ = null, $__in_half__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "wrapper_class" => $__wrapper_class__,
            "in_half" => $__in_half__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 297
            echo "  ";
            $context["macro"] = $this;
            // line 298
            echo "<dl ";
            if ((isset($context["wrapper_class"]) ? $context["wrapper_class"] : null)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["wrapper_class"]) ? $context["wrapper_class"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
  ";
            // line 299
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array())) {
                // line 300
                echo "    <dt>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Property type:", "realtyspace")), "html", null, true);
                echo "</dt>
    <dd>";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type", array()), "html", null, true);
                echo "</dd>
  ";
            }
            // line 303
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array())) {
                // line 304
                echo "    <dt>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Area:", "realtyspace")), "html", null, true);
                echo "</dt>
    <dd>";
                // line 305
                echo call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area", array())));
                echo "</dd>
  ";
            }
            // line 307
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array())) {
                // line 308
                echo "    <dt>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Rooms:", "realtyspace")), "html", null, true);
                echo "</dt>
    <dd>";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rooms", array()), "html", null, true);
                echo "</dd>
  ";
            }
            // line 311
            echo "  ";
            if ((isset($context["in_half"]) ? $context["in_half"] : null)) {
                // line 312
                echo "    </dl><dl ";
                if ((isset($context["wrapper_class"]) ? $context["wrapper_class"] : null)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["wrapper_class"]) ? $context["wrapper_class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
  ";
            }
            // line 314
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array())) {
                // line 315
                echo "    <dt>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bathrooms:", "realtyspace")), "html", null, true);
                echo "
    <dd>";
                // line 316
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bathrooms", array()), "html", null, true);
                echo "</dd>
  ";
            }
            // line 318
            echo "  ";
            if ($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array())) {
                // line 319
                echo "    <dt>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bedrooms:", "realtyspace")), "html", null, true);
                echo "</dt>
    <dd>";
                // line 320
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms", array()), "html", null, true);
                echo "</dd>
  ";
            }
            // line 322
            echo "  </dl>
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

    // line 325
    public function getitems($__properties__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "properties" => $__properties__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 326
            echo "  ";
            $context["__internal_3e83226e609a63f9b991db4ee379ff428069610b876f2763141b3e864dafef7a"] = $this;
            // line 327
            echo "  ";
            $context["__internal_e7830c14e01bcf6343b726f15af89ec9396d04e8f3da0979998e495d55542cc2"] = $this;
            // line 328
            echo "  ";
            $context["__internal_86f02237209d63d3b3ec4746711f969606c3126da3ba01b35782b082107ff835"] = $this->loadTemplate("macro.twig", "modules/property/macro.twig", 328);
            // line 329
            echo "
  ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 331
                echo "    ";
                if (((isset($context["type"]) ? $context["type"] : null) == "grid")) {
                    // line 332
                    echo "      ";
                    echo $context["__internal_3e83226e609a63f9b991db4ee379ff428069610b876f2763141b3e864dafef7a"]->getgrid_item($context["property"]);
                    echo "
    ";
                } else {
                    // line 334
                    echo "      ";
                    echo $context["__internal_e7830c14e01bcf6343b726f15af89ec9396d04e8f3da0979998e495d55542cc2"]->getlist_item($context["property"]);
                    echo "
    ";
                }
                // line 336
                echo "  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 337
                echo "    ";
                echo $context["__internal_86f02237209d63d3b3ec4746711f969606c3126da3ba01b35782b082107ff835"]->getno_items_available(call_user_func_array($this->env->getFunction('__')->getCallable(), array("No properties available", "realtyspace")));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
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

    // line 342
    public function getproperty_table_rows($__properties__ = null, $__table_columns__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "properties" => $__properties__,
            "table_columns" => $__table_columns__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 343
            echo "  ";
            $context["__internal_c8bec9e4cccd610684f887eaa60dee656be3dae6a654bc610f916a994655699b"] = $this;
            // line 344
            echo "  ";
            $context["__internal_21f89ef462d029660e5caa333df76cef958dfa840053266083ef4aa6ebd99252"] = $this;
            // line 345
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 346
                echo "    <tr>
      ";
                // line 347
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["table_columns"]) ? $context["table_columns"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 348
                    echo "        ";
                    if (($context["field"] == "location")) {
                        // line 349
                        echo "          <td class=\"datatable__cell-1\">";
                        echo $context["__internal_c8bec9e4cccd610684f887eaa60dee656be3dae6a654bc610f916a994655699b"]->getaddress_link($context["property"], false, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 350
$context["field"] == "rooms")) {
                        // line 351
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "rooms", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 352
$context["field"] == "bathrooms")) {
                        // line 353
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "bathrooms", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 354
$context["field"] == "bedrooms")) {
                        // line 355
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "bedrooms", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 356
$context["field"] == "garages")) {
                        // line 357
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "garages", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 358
$context["field"] == "land_area")) {
                        // line 359
                        echo "          <td class=\"datatable__cell\">";
                        echo call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute($context["property"], "land_area", array())));
                        echo "</td>
        ";
                    } elseif ((                    // line 360
$context["field"] == "area")) {
                        // line 361
                        echo "          <td class=\"datatable__cell\">";
                        echo call_user_func_array($this->env->getFilter('area')->getCallable(), array($this->getAttribute($context["property"], "area", array())));
                        echo "</td>
        ";
                    } elseif ((                    // line 362
$context["field"] == "contract_type")) {
                        // line 363
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "contract_type", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 364
$context["field"] == "type")) {
                        // line 365
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "type", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 366
$context["field"] == "agent")) {
                        // line 367
                        echo "          <td class=\"datatable__cell\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["property"], "agent", array()), "name", array()), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 368
$context["field"] == "date")) {
                        // line 369
                        echo "          <td class=\"datatable__cell-4\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('time_ago')->getCallable(), array($this->getAttribute($context["property"], "date", array()))), "html", null, true);
                        echo "</td>
        ";
                    } elseif ((                    // line 370
$context["field"] == "price")) {
                        // line 371
                        echo "          <td class=\"datatable__cell-2\">";
                        echo $context["__internal_21f89ef462d029660e5caa333df76cef958dfa840053266083ef4aa6ebd99252"]->getprice($context["property"], true, false);
                        echo "</td>
        ";
                    } elseif ((                    // line 372
$context["field"] == "more_btn")) {
                        // line 373
                        echo "          <td class=\"datatable__cell-5\">
            <a href=\"";
                        // line 374
                        echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "link", array()), "html", null, true);
                        echo "\" class=\"datatable__more\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("More", "realtyspace")), "html", null, true);
                        echo "</a></td>
        ";
                    }
                    // line 376
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
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

    // line 381
    public function getproperty_table_headings($__table_columns__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "table_columns" => $__table_columns__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 382
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["table_columns"]) ? $context["table_columns"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 383
                echo "    ";
                if (($context["field"] == "location")) {
                    // line 384
                    echo "      <th class=\"datatable__head-1\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Location Address", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 385
$context["field"] == "rooms")) {
                    // line 386
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Rooms", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 387
$context["field"] == "bathrooms")) {
                    // line 388
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bathrooms", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 389
$context["field"] == "bedrooms")) {
                    // line 390
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Bedrooms", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 391
$context["field"] == "garages")) {
                    // line 392
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Garages", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 393
$context["field"] == "land_area")) {
                    // line 394
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Land Size", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 395
$context["field"] == "area")) {
                    // line 396
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Built-Up", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 397
$context["field"] == "contract_type")) {
                    // line 398
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Contract type", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 399
$context["field"] == "type")) {
                    // line 400
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Property type", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 401
$context["field"] == "agent")) {
                    // line 402
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Agent", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 403
$context["field"] == "date")) {
                    // line 404
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Date", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 405
$context["field"] == "price")) {
                    // line 406
                    echo "      <th class=\"datatable__head\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Price", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                } elseif ((                // line 407
$context["field"] == "more_btn")) {
                    // line 408
                    echo "      <th class=\"datatable__head-5\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Details", "realtyspace")), "html", null, true);
                    echo "</th>
    ";
                }
                // line 410
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
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

    // line 414
    public function getshow_map($__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 415
            echo "  ";
            $context["tooltip_template_id"] = call_user_func_array($this->env->getFunction('js_template')->getCallable(), array("property-map-tooltip", "modules/property/misc/map-tooltip.twig"));
            // line 416
            echo "  ";
            $context["module_id"] = call_user_func_array($this->env->getFunction('js_module')->getCallable(), array("show_map", array("infoboxTemplate" =>             // line 417
(isset($context["tooltip_template_id"]) ? $context["tooltip_template_id"] : null), "theme" => "dark", "fullscreen" => false)));
            // line 421
            echo "
  <div class=\"map map--index js-map map--";
            // line 422
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["module_id"]) ? $context["module_id"] : null), "html", null, true);
            echo "\">
    <div class=\"map__buttons\">
      <button type=\"button\" class=\"map__change-map js-map-btn\">";
            // line 424
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("Show map", "realtyspace")), "html", null, true);
            echo "</button>
    </div>
    <div class=\"map__wrap\">
      <div class=\"map__view js-map-index-canvas \"></div>
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
        return "modules/property/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1520 => 424,  1513 => 422,  1510 => 421,  1508 => 417,  1506 => 416,  1503 => 415,  1491 => 414,  1472 => 410,  1466 => 408,  1464 => 407,  1459 => 406,  1457 => 405,  1452 => 404,  1450 => 403,  1445 => 402,  1443 => 401,  1438 => 400,  1436 => 399,  1431 => 398,  1429 => 397,  1424 => 396,  1422 => 395,  1417 => 394,  1415 => 393,  1410 => 392,  1408 => 391,  1403 => 390,  1401 => 389,  1396 => 388,  1394 => 387,  1389 => 386,  1387 => 385,  1382 => 384,  1379 => 383,  1374 => 382,  1362 => 381,  1342 => 377,  1336 => 376,  1329 => 374,  1326 => 373,  1324 => 372,  1319 => 371,  1317 => 370,  1312 => 369,  1310 => 368,  1305 => 367,  1303 => 366,  1298 => 365,  1296 => 364,  1291 => 363,  1289 => 362,  1284 => 361,  1282 => 360,  1277 => 359,  1275 => 358,  1270 => 357,  1268 => 356,  1263 => 355,  1261 => 354,  1256 => 353,  1254 => 352,  1249 => 351,  1247 => 350,  1242 => 349,  1239 => 348,  1235 => 347,  1232 => 346,  1227 => 345,  1224 => 344,  1221 => 343,  1208 => 342,  1186 => 337,  1181 => 336,  1175 => 334,  1169 => 332,  1166 => 331,  1161 => 330,  1158 => 329,  1155 => 328,  1152 => 327,  1149 => 326,  1136 => 325,  1120 => 322,  1115 => 320,  1110 => 319,  1107 => 318,  1102 => 316,  1097 => 315,  1094 => 314,  1084 => 312,  1081 => 311,  1076 => 309,  1071 => 308,  1068 => 307,  1063 => 305,  1058 => 304,  1055 => 303,  1050 => 301,  1045 => 300,  1043 => 299,  1034 => 298,  1031 => 297,  1017 => 296,  997 => 288,  990 => 284,  986 => 283,  982 => 282,  978 => 281,  973 => 279,  969 => 278,  965 => 277,  960 => 275,  955 => 274,  952 => 273,  950 => 272,  938 => 271,  919 => 267,  916 => 266,  904 => 265,  885 => 260,  878 => 259,  872 => 256,  863 => 255,  861 => 254,  858 => 253,  853 => 251,  848 => 250,  845 => 249,  831 => 248,  812 => 241,  809 => 240,  806 => 239,  803 => 238,  797 => 236,  791 => 233,  788 => 232,  785 => 231,  783 => 230,  779 => 229,  775 => 228,  770 => 227,  767 => 226,  753 => 225,  733 => 220,  725 => 218,  722 => 217,  716 => 214,  713 => 213,  710 => 212,  704 => 211,  696 => 209,  694 => 208,  687 => 207,  685 => 206,  678 => 205,  676 => 204,  669 => 203,  667 => 202,  660 => 201,  658 => 200,  651 => 199,  649 => 198,  642 => 197,  640 => 196,  633 => 195,  631 => 194,  624 => 193,  622 => 192,  615 => 191,  612 => 190,  608 => 189,  605 => 188,  603 => 187,  599 => 185,  593 => 184,  587 => 181,  583 => 180,  580 => 179,  578 => 178,  573 => 176,  569 => 175,  566 => 174,  564 => 173,  559 => 171,  555 => 170,  552 => 169,  550 => 168,  545 => 166,  541 => 165,  538 => 164,  536 => 163,  531 => 161,  527 => 160,  524 => 159,  522 => 158,  517 => 156,  513 => 155,  510 => 154,  508 => 153,  503 => 151,  499 => 150,  496 => 149,  494 => 148,  489 => 146,  485 => 145,  482 => 144,  480 => 143,  475 => 141,  471 => 140,  468 => 139,  465 => 138,  461 => 137,  457 => 135,  451 => 133,  449 => 132,  446 => 131,  443 => 130,  441 => 129,  429 => 128,  413 => 125,  407 => 123,  404 => 122,  398 => 119,  395 => 118,  389 => 115,  378 => 114,  375 => 113,  372 => 112,  366 => 109,  363 => 108,  360 => 107,  354 => 105,  352 => 104,  347 => 103,  345 => 102,  342 => 101,  339 => 100,  336 => 99,  334 => 98,  316 => 97,  293 => 87,  289 => 86,  283 => 83,  273 => 78,  267 => 77,  262 => 75,  258 => 74,  248 => 67,  240 => 62,  233 => 58,  228 => 55,  226 => 54,  225 => 53,  222 => 52,  219 => 51,  216 => 50,  203 => 49,  177 => 36,  168 => 30,  162 => 27,  159 => 26,  154 => 24,  147 => 23,  145 => 22,  140 => 19,  138 => 18,  137 => 13,  134 => 12,  131 => 11,  118 => 10,  100 => 6,  88 => 5,  85 => 4,  71 => 3,  65 => 412,  62 => 380,  58 => 340,  55 => 324,  50 => 293,  47 => 270,  44 => 264,  39 => 245,  36 => 224,  33 => 127,  29 => 95,  25 => 47,  22 => 9,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/property/macro.twig", "C:\\xampp\\htdocs\\my-work-place\\elitecapital\\wp-content\\themes\\realtyspace\\views\\modules\\property\\macro.twig");
    }
}
