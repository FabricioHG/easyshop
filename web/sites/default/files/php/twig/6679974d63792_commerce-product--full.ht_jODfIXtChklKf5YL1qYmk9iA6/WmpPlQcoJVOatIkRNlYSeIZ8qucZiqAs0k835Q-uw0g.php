<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig */
class __TwigTemplate_55bb0a96ce09cba0c6f8be55129abd7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig"));

        // line 22
        echo "
";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ws_ecommerce/ws_ecommerce_slick"), "html", null, true);
        echo "

";
        // line 26
        $context["classes"] = ["pb-4", "mb-5", "overflow-hidden"];
        // line 32
        echo "
";
        // line 34
        $context["image_urls"] = [];
        // line 35
        echo "
";
        // line 36
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen", [], "any", false, false, true, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 37
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen", [], "any", false, false, true, 37)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 38)) {
                    // line 39
                    echo "      ";
                    $context["image_entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 39);
                    // line 40
                    echo "      ";
                    $context["image_url"] = Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image_entity"] ?? null), "uri", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), 40, $this->source), "producto_interior");
                    // line 41
                    echo "      ";
                    $context["image_url_thum"] = Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image_entity"] ?? null), "uri", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "thumbnail");
                    // line 42
                    echo "      ";
                    $context["alt_text"] = "imagen de producto";
                    // line 43
                    echo "
      ";
                    // line 45
                    echo "      ";
                    $context["image_info"] = ["url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(                    // line 46
($context["image_url"] ?? null), 46, $this->source)), "alt" =>                     // line 47
($context["alt_text"] ?? null), "url_thum" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(                    // line 48
($context["image_url_thum"] ?? null), 48, $this->source))];
                    // line 50
                    echo "
      ";
                    // line 52
                    echo "      ";
                    $context["image_urls"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["image_urls"] ?? null), 52, $this->source), [($context["image_info"] ?? null)]);
                    // line 53
                    echo "    ";
                }
                // line 54
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 56
        echo "
";
        // line 57
        $context["field_precio"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null);
        // line 58
        $context["precio"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio"] ?? null), "getValue", [], "method", false, false, true, 58), 0, [], "any", false, false, true, 58)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["number"] ?? null) : null);
        // line 59
        $context["moneda"] = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio"] ?? null), "getValue", [], "method", false, false, true, 59), 0, [], "any", false, false, true, 59)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["currency_code"] ?? null) : null);
        // line 60
        echo "
";
        // line 61
        $context["field_precio_lista"] = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_list_price", [], "any", false, false, true, 61)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#items"] ?? null) : null);
        // line 62
        $context["precio_lista"] = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio_lista"] ?? null), "getValue", [], "method", false, false, true, 62), 0, [], "any", false, false, true, 62)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["number"] ?? null) : null);
        // line 63
        $context["moneda_precio_lista"] = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio_lista"] ?? null), "getValue", [], "method", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["currency_code"] ?? null) : null);
        // line 64
        echo "
";
        // line 66
        $context["videos_urls"] = [];
        // line 67
        echo "
";
        // line 68
        if ((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_video", [], "any", false, false, true, 68)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#items"] ?? null) : null)) {
            // line 69
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_video", [], "any", false, false, true, 69)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item_video"]) {
                // line 70
                echo "    ";
                $context["video_url"] = (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["item_video"], "getValue", [], "method", false, false, true, 70)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["uri"] ?? null) : null);
                // line 71
                echo "    ";
                $context["videos_urls"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["videos_urls"] ?? null), 71, $this->source), [($context["video_url"] ?? null)]);
                echo "  
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 74
        echo "
";
        // line 77
        $context["fecha_actual"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 78
        echo "
";
        // line 80
        $context["fecha_futura_1"] = twig_date_modify_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fecha_actual"] ?? null), 80, $this->source), "+15 days");
        // line 81
        echo "
";
        // line 83
        $context["fecha_futura_2"] = twig_date_modify_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fecha_actual"] ?? null), 83, $this->source), "+20 days");
        // line 84
        echo "

";
        // line 87
        $context["fecha_futura_formateada"] = ((twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fecha_futura_1"] ?? null), 87, $this->source), "M d") . " - ") . twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fecha_futura_2"] ?? null), 87, $this->source), "M d"));
        // line 88
        echo "
";
        // line 90
        echo "
<div class=\"cont_pag_prod\">
  <div class=\"cont_img_comprar\">
    <div class=\"int_img_cont\">
      <div class=\"sld-wrp\">
        <div class=\"slider-for\">
          ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["image_urls"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 97
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 97)) {
                // line 98
                echo "              ";
                if (($context["videos_urls"] ?? null)) {
                    // line 99
                    echo "                <div>
                  <iframe width=\"400\" height=\"400\" src=\"";
                    // line 100
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos_urls"] ?? null), 0, [], "any", false, false, true, 100), 100, $this->source), ["https://www.youtube.com/watch?v=" => "https://www.youtube.com/embed/"]), "html", null, true);
                    echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                </div>
              ";
                } else {
                    // line 103
                    echo "                <div> <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url"], "url", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                    echo "\"> </div>
              ";
                }
                // line 105
                echo "            ";
            } else {
                // line 106
                echo "              <div> <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url"], "url", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "\"> </div>
            ";
            }
            // line 108
            echo "            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </div>
        <div class=\"slider-nav\">
          ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["image_urls"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image_url_thum"]) {
            // line 113
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 113)) {
                // line 114
                echo "              ";
                if (($context["videos_urls"] ?? null)) {
                    // line 115
                    echo "                ";
                    // line 116
                    echo "                ";
                    $context["img_video_part_1"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos_urls"] ?? null), 0, [], "any", false, false, true, 116), 116, $this->source), ["https://www.youtube.com/watch?v=" => "https://i.ytimg.com/vi_webp/"]);
                    // line 117
                    echo "                ";
                    $context["img_video"] = ($this->sandbox->ensureToStringAllowed(($context["img_video_part_1"] ?? null), 117, $this->source) . "/default.webp");
                    // line 118
                    echo "                <div> <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_video"] ?? null), 118, $this->source), "html", null, true);
                    echo "\"> </div>
                
              ";
                } else {
                    // line 121
                    echo "                <div> <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url_thum"], "url_thum", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo "\"> </div>
              ";
                }
                // line 123
                echo "            ";
            } else {
                // line 124
                echo "              <div> <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url_thum"], "url_thum", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "\"> </div>
            ";
            }
            // line 126
            echo "          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url_thum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>
      </div>
    </div>

    <div class=\"int_prod_carr\">
      <div class=\"text_ch\"><strong>Entrega estimada para el </strong> <strong class=\"txt_rojo upper\">";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fecha_futura_formateada"] ?? null), 132, $this->source), "html", null, true);
        echo "</strong> </div>
        ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "    
    </div>

  </div>
  <div class=\"cont_info\">
    <div class=\"int_titulo\">";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "</div>
    <div class=\"int_precio\"> \$ ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 139, $this->source), 2, ".", ",") . " ") . $this->sandbox->ensureToStringAllowed(($context["moneda"] ?? null), 139, $this->source)), "html", null, true);
        echo "</div>
    ";
        // line 140
        if (($context["precio_lista"] ?? null)) {
            // line 141
            echo "      <div class=\"int_precio_lista\">\$ ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio_lista"] ?? null), 141, $this->source), 2, ".", ",") . " ") . $this->sandbox->ensureToStringAllowed(($context["moneda_precio_lista"] ?? null), 141, $this->source)), "html", null, true);
            echo " <span class=\"line_precio_lista\"></span> </div>
    ";
        }
        // line 143
        echo "    <div class=\"int_categoria\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "</div>
    <div class=\"int_cuerpo\">
      ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "
    </div>
    
  </div>
</div>




";
        // line 184
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["product", "loop"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  371 => 184,  359 => 145,  353 => 143,  347 => 141,  345 => 140,  341 => 139,  337 => 138,  329 => 133,  325 => 132,  318 => 127,  304 => 126,  298 => 124,  295 => 123,  289 => 121,  282 => 118,  279 => 117,  276 => 116,  274 => 115,  271 => 114,  268 => 113,  251 => 112,  247 => 110,  232 => 108,  226 => 106,  223 => 105,  217 => 103,  211 => 100,  208 => 99,  205 => 98,  202 => 97,  185 => 96,  177 => 90,  174 => 88,  172 => 87,  168 => 84,  166 => 83,  163 => 81,  161 => 80,  158 => 78,  156 => 77,  153 => 74,  143 => 71,  140 => 70,  135 => 69,  133 => 68,  130 => 67,  128 => 66,  125 => 64,  123 => 63,  121 => 62,  119 => 61,  116 => 60,  114 => 59,  112 => 58,  110 => 57,  107 => 56,  100 => 54,  97 => 53,  94 => 52,  91 => 50,  89 => 48,  88 => 47,  87 => 46,  85 => 45,  82 => 43,  79 => 42,  76 => 41,  73 => 40,  70 => 39,  67 => 38,  62 => 37,  60 => 36,  57 => 35,  55 => 34,  52 => 32,  50 => 26,  45 => 23,  42 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('ws_ecommerce/ws_ecommerce_slick') }}

{%
  set classes = [
  'pb-4',
  'mb-5',
  'overflow-hidden'
]
%}

{# Obtener el url de las imagenes del producto#}
{% set image_urls = [] %}

{% if product.field_imagen[\"#items\"] %}
  {% for item in product.field_imagen[\"#items\"] %}
    {% if item.entity %}
      {% set image_entity = item.entity %}
      {% set image_url = image_entity.uri.value | image_style('producto_interior') %}
      {% set image_url_thum = image_entity.uri.value | image_style('thumbnail') %}
      {% set alt_text = 'imagen de producto' %}

      {# Crear un nuevo objeto con la URL y el texto alternativo #}
      {% set image_info = {
        url: file_url(image_url),
        alt: alt_text,
        url_thum: file_url(image_url_thum)
      } %}

      {# Agregar el objeto al array image_urls #}
      {% set image_urls = image_urls|merge([image_info]) %}
    {% endif %}
  {% endfor %}
{% endif %}

{% set field_precio = product.variation_price[\"#items\"] %}
{% set precio = field_precio.getValue().0[\"number\"] %}
{% set moneda = field_precio.getValue().0[\"currency_code\"] %}

{% set field_precio_lista = product.variation_list_price[\"#items\"] %}
{% set precio_lista = field_precio_lista.getValue().0[\"number\"] %}
{% set moneda_precio_lista = field_precio_lista.getValue().0[\"currency_code\"] %}

{# Obtener el url de los videos#}
{% set videos_urls = [] %}

{% if product.field_video[\"#items\"] %}
  {% for item_video in product.field_video[\"#items\"] %}
    {% set video_url = item_video.getValue()[\"uri\"] %}
    {% set videos_urls = videos_urls|merge([video_url]) %}  
  {% endfor %}
{% endif %}

{# Obtener la fecha y sumar 15 dias para la entrega#}
{# Obtenemos la fecha actual #}
{% set fecha_actual = \"now\"|date(\"Y-m-d\") %}

{# Sumamos 15 días a la fecha 1 actual utilizando PHP #}
{% set fecha_futura_1 = fecha_actual|date_modify(\"+15 days\") %}

{# Sumamos 20 días a la fecha actual utilizando PHP #}
{% set fecha_futura_2 = fecha_actual|date_modify(\"+20 days\") %}


{# Convertimos la fecha de entrega futura a una cadena de texto en el formato deseado #}
{% set fecha_futura_formateada = fecha_futura_1|date(\"M d\") ~ \" - \" ~ fecha_futura_2|date(\"M d\") %}

{# Mostramos la fecha futura formateada #}

<div class=\"cont_pag_prod\">
  <div class=\"cont_img_comprar\">
    <div class=\"int_img_cont\">
      <div class=\"sld-wrp\">
        <div class=\"slider-for\">
          {% for image_url in image_urls %}
            {% if loop.first %}
              {% if videos_urls %}
                <div>
                  <iframe width=\"400\" height=\"400\" src=\"{{videos_urls.0|replace({'https://www.youtube.com/watch?v=':'https://www.youtube.com/embed/'}) }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                </div>
              {% else %}
                <div> <img src=\"{{image_url.url}}\"> </div>
              {% endif%}
            {% else %}
              <div> <img src=\"{{image_url.url}}\"> </div>
            {% endif%}
            
          {% endfor%}
        </div>
        <div class=\"slider-nav\">
          {% for image_url_thum in image_urls %}
            {% if loop.first %}
              {% if videos_urls %}
                {# Obtener imagen del video #}
                {% set img_video_part_1 = videos_urls.0|replace({'https://www.youtube.com/watch?v=':'https://i.ytimg.com/vi_webp/' }) %}
                {% set img_video = img_video_part_1 ~ \"/default.webp\" %}
                <div> <img src=\"{{img_video}}\"> </div>
                
              {% else %}
                <div> <img src=\"{{image_url_thum.url_thum}}\"> </div>
              {% endif%}
            {% else %}
              <div> <img src=\"{{image_url_thum.url_thum}}\"> </div>
            {% endif%}
          {% endfor%}
        </div>
      </div>
    </div>

    <div class=\"int_prod_carr\">
      <div class=\"text_ch\"><strong>Entrega estimada para el </strong> <strong class=\"txt_rojo upper\">{{fecha_futura_formateada}}</strong> </div>
        {{product.variations}}    
    </div>

  </div>
  <div class=\"cont_info\">
    <div class=\"int_titulo\">{{product.title}}</div>
    <div class=\"int_precio\"> \$ {{ precio|number_format(2, '.', ',') ~ ' ' ~ moneda }}</div>
    {% if precio_lista %}
      <div class=\"int_precio_lista\">\$ {{ precio_lista|number_format(2, '.', ',') ~ ' ' ~ moneda_precio_lista }} <span class=\"line_precio_lista\"></span> </div>
    {% endif%}
    <div class=\"int_categoria\">{{product.field_categoria}}</div>
    <div class=\"int_cuerpo\">
      {{product.body}}
    </div>
    
  </div>
</div>




{#
Plantilla por default
<article{{ attributes.addClass(classes) }}>
  <div class=\"row g-5\">
    <div class=\"col-md-7 order-md-last\">
      <div class=\"mb-2\">
        {{- product.product_categories -}}
      </div>
      {{- product.title -}}
      {{- product.brand -}}
      <div class=\"fs-4\">{{- product.variation_price -}}</div>
      <hr/>
      {% if product.special_categories|render is not empty %}
        <div class=\"mb-3\">
          {{- product.special_categories -}}
        </div>
      {% endif %}
      {{- product|without('variation_attributes', 'images', 'variation_images', 'title', 'variation_price', 'product_categories', 'brand', 'special_categories') -}}
    </div>
    <div class=\"col-md-5\">
      {% if product.variation_images|render is not empty %}
        {{- product.variation_images -}}
      {% else %}
        {{- product.images -}}
      {% endif %}
    </div>
  </div>

</article>
#}

", "themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 36, "for" => 37);
        static $filters = array("escape" => 23, "image_style" => 40, "merge" => 52, "date" => 77, "date_modify" => 80, "replace" => 100, "number_format" => 139);
        static $functions = array("attach_library" => 23, "file_url" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'image_style', 'merge', 'date', 'date_modify', 'replace', 'number_format'],
                ['attach_library', 'file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
