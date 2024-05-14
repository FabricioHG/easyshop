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
        // line 35
        $context["image_urls"] = [];
        // line 36
        echo "
";
        // line 37
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen", [], "any", false, false, true, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 38
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_imagen", [], "any", false, false, true, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "      ";
                    $context["image_entity"] = twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 40);
                    // line 41
                    echo "      ";
                    $context["image_url"] = Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image_entity"] ?? null), "uri", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "producto_interior");
                    // line 42
                    echo "      ";
                    $context["image_url_thum"] = Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image_entity"] ?? null), "uri", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "thumbnail");
                    // line 43
                    echo "      ";
                    $context["alt_text"] = "imagen de producto";
                    // line 44
                    echo "
      ";
                    // line 46
                    echo "      ";
                    $context["image_info"] = ["url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(                    // line 47
($context["image_url"] ?? null), 47, $this->source)), "alt" =>                     // line 48
($context["alt_text"] ?? null), "url_thum" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(                    // line 49
($context["image_url_thum"] ?? null), 49, $this->source))];
                    // line 51
                    echo "
      ";
                    // line 53
                    echo "      ";
                    $context["image_urls"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["image_urls"] ?? null), 53, $this->source), [($context["image_info"] ?? null)]);
                    // line 54
                    echo "    ";
                }
                // line 55
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 57
        echo "
";
        // line 58
        $context["field_precio"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null);
        // line 59
        $context["precio"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio"] ?? null), "getValue", [], "method", false, false, true, 59), 0, [], "any", false, false, true, 59)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["number"] ?? null) : null);
        // line 60
        $context["moneda"] = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_precio"] ?? null), "getValue", [], "method", false, false, true, 60), 0, [], "any", false, false, true, 60)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["currency_code"] ?? null) : null);
        // line 61
        echo "
<div class=\"cont_pag_prod\">
  <div class=\"cont_img_comprar\">
    <div class=\"int_img_cont\">
      <div class=\"sld-wrp\">
        <div class=\"slider-for\">
          ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["image_urls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image_url"]) {
            // line 68
            echo "            <div> <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url"], "url", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\"> </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>
        <div class=\"slider-nav\">
          ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["image_urls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image_url_thum"]) {
            // line 73
            echo "            <div> <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image_url_thum"], "url_thum", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "\"> </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image_url_thum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </div>
      </div>
    </div>

    <div class=\"int_prod_carr\">
      <div class=\"text_ch\"><strong>Lorem ipsum dolor</strong> sit amet, consectetur sed <strong>do eiusmod</strong></div>
        ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "    
    </div>

  </div>
  <div class=\"cont_info\">
    <div class=\"int_titulo\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "</div>
    <div class=\"int_precio\"> \$ ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["precio"] ?? null), 87, $this->source), 2, ".", ",") . " ") . $this->sandbox->ensureToStringAllowed(($context["moneda"] ?? null), 87, $this->source)), "html", null, true);
        echo "</div>
    <div class=\"int_categoria\">";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_categoria", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "</div>
    <div class=\"int_cuerpo\">
      ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
    </div>
    
  </div>
</div>




";
        // line 129
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["product"]);        
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
        return array (  196 => 129,  184 => 90,  179 => 88,  175 => 87,  171 => 86,  163 => 81,  155 => 75,  146 => 73,  142 => 72,  138 => 70,  129 => 68,  125 => 67,  117 => 61,  115 => 60,  113 => 59,  111 => 58,  108 => 57,  101 => 55,  98 => 54,  95 => 53,  92 => 51,  90 => 49,  89 => 48,  88 => 47,  86 => 46,  83 => 44,  80 => 43,  77 => 42,  74 => 41,  71 => 40,  68 => 39,  63 => 38,  61 => 37,  58 => 36,  56 => 35,  52 => 32,  50 => 26,  45 => 23,  42 => 22,);
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

<div class=\"cont_pag_prod\">
  <div class=\"cont_img_comprar\">
    <div class=\"int_img_cont\">
      <div class=\"sld-wrp\">
        <div class=\"slider-for\">
          {% for image_url in image_urls %}
            <div> <img src=\"{{image_url.url}}\"> </div>
          {% endfor%}
        </div>
        <div class=\"slider-nav\">
          {% for image_url_thum in image_urls %}
            <div> <img src=\"{{image_url_thum.url_thum}}\"> </div>
          {% endfor%}
        </div>
      </div>
    </div>

    <div class=\"int_prod_carr\">
      <div class=\"text_ch\"><strong>Lorem ipsum dolor</strong> sit amet, consectetur sed <strong>do eiusmod</strong></div>
        {{product.variations}}    
    </div>

  </div>
  <div class=\"cont_info\">
    <div class=\"int_titulo\">{{product.title}}</div>
    <div class=\"int_precio\"> \$ {{ precio|number_format(2, '.', ',') ~ ' ' ~ moneda }}</div>
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

", "themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/themes/custom/ws_ecommerce/templates/commerce-product--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 37, "for" => 38);
        static $filters = array("escape" => 23, "image_style" => 41, "merge" => 53, "number_format" => 87);
        static $functions = array("attach_library" => 23, "file_url" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'image_style', 'merge', 'number_format'],
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
