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

/* core/themes/claro/templates/classy/dataset/item-list.html.twig */
class __TwigTemplate_dc71c2d7c697d19de8d5b73036514060 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/classy/dataset/item-list.html.twig"));

        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 22)) {
            // line 23
            $context["wrapper_attributes"] = twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [("item-list--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 23), 23, $this->source))], "method", false, false, true, 23);
            // line 24
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("item-list__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 24), 24, $this->source))], "method", false, false, true, 24);
        }
        // line 26
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 27
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", ["item-list"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ">";
            // line 28
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 29
                echo "<h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
                echo "</h3>";
            }
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 32, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 32, $this->source), "html", null, true);
                echo ">";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 36, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 38, $this->source), "html", null, true);
            }
            // line 40
            echo "</div>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["context", "items", "empty", "title", "list_type"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/classy/dataset/item-list.html.twig";
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
        return array (  91 => 40,  88 => 38,  83 => 36,  73 => 34,  69 => 33,  64 => 32,  62 => 31,  57 => 29,  55 => 28,  51 => 27,  49 => 26,  46 => 24,  44 => 23,  42 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for an item list.
 *
 * Available variables:
 * - items: A list of items. Each item contains:
 *   - attributes: HTML attributes to be applied to each list item.
 *   - value: The content of the list element.
 * - title: The title of the list.
 * - list_type: The tag for list element (\"ul\" or \"ol\").
 * - wrapper_attributes: HTML attributes to be applied to the list wrapper.
 * - attributes: HTML attributes to be applied to the list.
 * - empty: A message to display when there are no items. Allowed value is a
 *   string or render array.
 * - context: A list of contextual data associated with the list. May contain:
 *   - list_style: The custom list style.
 *
 * @see template_preprocess_item_list()
 */
#}
{% if context.list_style %}
  {%- set wrapper_attributes = wrapper_attributes.addClass('item-list--' ~ context.list_style) %}
  {%- set attributes = attributes.addClass('item-list__' ~ context.list_style) %}
{% endif %}
{% if items or empty -%}
  <div{{ wrapper_attributes.addClass('item-list') }}>
    {%- if title is not empty -%}
      <h3>{{ title }}</h3>
    {%- endif -%}
    {%- if items -%}
      <{{ list_type }}{{ attributes }}>
        {%- for item in items -%}
          <li{{ item.attributes }}>{{ item.value }}</li>
        {%- endfor -%}
      </{{ list_type }}>
    {%- else -%}
      {{- empty -}}
    {%- endif -%}
  </div>
{%- endif %}
", "core/themes/claro/templates/classy/dataset/item-list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/classy/dataset/item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "set" => 23, "for" => 33);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
