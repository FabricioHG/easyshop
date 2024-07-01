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

/* themes/custom/ws_ecommerce/templates/field--commerce-product--field-categoria--default.html.twig */
class __TwigTemplate_15c2262f6130accfe05ced11a98afd1d extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/ws_ecommerce/templates/field--commerce-product--field-categoria--default.html.twig"));

        // line 40
        $context["classes"] = [\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 41
($context["field_name"] ?? null), 41, $this->source))];
        // line 44
        echo "
";
        // line 46
        $context["label_classes"] = ["form-label", (((        // line 48
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 51
        echo "


";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "  ";
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null) == "Envío gratis")) {
                // line 56
                echo "    <span class=\"envio_gratis_prod_full\">Envío gratis</span>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
";
        // line 60
        if (($context["label_hidden"] ?? null)) {
            // line 61
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 62
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 62, $this->source), "html", null, true);
                echo ">
      ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 64
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 64), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "    </div>
  ";
            } else {
                // line 68
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 69
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "  ";
            }
        } else {
            // line 73
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 73, $this->source), "html", null, true);
            echo ">
    <div";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["label_classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 74, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 75
            if (($context["multiple"] ?? null)) {
                // line 76
                echo "      <div>
    ";
            }
            // line 78
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 82
                echo "      </div>
    ";
            }
            // line 84
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "label_display", "items", "label_hidden", "multiple", "attributes", "title_attributes", "label"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/ws_ecommerce/templates/field--commerce-product--field-categoria--default.html.twig";
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
        return array (  163 => 84,  159 => 82,  156 => 81,  145 => 79,  140 => 78,  136 => 76,  134 => 75,  128 => 74,  123 => 73,  119 => 71,  108 => 69,  103 => 68,  99 => 66,  88 => 64,  84 => 63,  79 => 62,  76 => 61,  74 => 60,  71 => 59,  63 => 56,  60 => 55,  56 => 54,  51 => 51,  49 => 48,  48 => 46,  45 => 44,  43 => 41,  42 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    field_name|clean_class,
  ]
%}

{%
  set label_classes = [
    'form-label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}



{% for item in items %}
  {% if item.content[\"#title\"]==\"Envío gratis\"%}
    <span class=\"envio_gratis_prod_full\">Envío gratis</span>
  {%endif%}
{% endfor%}

{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes }}>
      {% for item in items %}
        <div{{ item.attributes.addClass(classes) }}>{{ item.content }}</div>
      {% endfor %}
    </div>
  {% else %}
    {% for item in items %}
      <div{{ attributes.addClass(classes) }}>{{ item.content }}</div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes }}>
    <div{{ title_attributes.addClass(label_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div>
    {% endif %}
    {% for item in items %}
      <div{{ item.attributes.addClass(classes) }}>{{ item.content }}</div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}
", "themes/custom/ws_ecommerce/templates/field--commerce-product--field-categoria--default.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/custom/ws_ecommerce/templates/field--commerce-product--field-categoria--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "for" => 54, "if" => 55);
        static $filters = array("clean_class" => 41, "escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['clean_class', 'escape'],
                []
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
