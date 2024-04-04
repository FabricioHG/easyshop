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

/* core/themes/claro/templates/views/views-view-table.html.twig */
class __TwigTemplate_f299f3f5ade2f8119435a4b565f03713 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/views/views-view-table.html.twig"));

        // line 35
        $context["classes"] = ["views-table", "views-view-table", ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 38
($context["header"] ?? null), 38, $this->source))), ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 40
($context["sticky"] ?? null)) ? ("position-sticky") : (""))];
        // line 43
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
  ";
        // line 44
        if (($context["caption_needed"] ?? null)) {
            // line 45
            echo "    <caption>
    ";
            // line 46
            if (($context["caption"] ?? null)) {
                // line 47
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 47, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 49
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 49, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 51
            echo "    ";
            if ( !twig_test_empty(($context["summary_element"] ?? null))) {
                // line 52
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 52, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 54
            echo "    </caption>
  ";
        }
        // line 56
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 57
            echo "    <thead>
      <tr>
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 60
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 60)) {
                    // line 61
                    echo "            ";
                    // line 62
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 64
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 64, $this->source))];
                    // line 67
                    echo "          ";
                }
                // line 68
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 68), "setAttribute", ["scope", "col"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                echo ">";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 69)) {
                    // line 70
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    echo ">";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 71)) {
                        // line 72
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 74
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    }
                    // line 76
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 78)) {
                        // line 79
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 81
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                    }
                }
                // line 84
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </tr>
    </thead>
  ";
        }
        // line 89
        echo "  <tbody>
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 91
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 92));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 93
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 93)) {
                    // line 94
                    echo "            ";
                    // line 95
                    $context["column_classes"] = ["views-field"];
                    // line 99
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 99));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 100
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 100, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 100, $this->source))]);
                        // line 101
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "          ";
                }
                // line 103
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 103), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 103), 103, $this->source), "html", null, true);
                echo ">";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 104)) {
                    // line 105
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 107
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 111));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 112
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 115
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary_element", "fields", "rows"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/views/views-view-table.html.twig";
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
        return array (  262 => 119,  255 => 117,  248 => 115,  240 => 112,  236 => 111,  231 => 109,  221 => 107,  217 => 106,  212 => 105,  210 => 104,  206 => 103,  203 => 102,  197 => 101,  194 => 100,  189 => 99,  187 => 95,  185 => 94,  182 => 93,  178 => 92,  173 => 91,  169 => 90,  166 => 89,  161 => 86,  154 => 84,  149 => 81,  139 => 79,  137 => 78,  132 => 76,  128 => 74,  118 => 72,  116 => 71,  112 => 70,  110 => 69,  106 => 68,  103 => 67,  101 => 64,  100 => 62,  98 => 61,  95 => 60,  91 => 59,  87 => 57,  84 => 56,  80 => 54,  74 => 52,  71 => 51,  65 => 49,  59 => 47,  57 => 46,  54 => 45,  52 => 44,  47 => 43,  45 => 40,  44 => 39,  43 => 38,  42 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for displaying a view as a table.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 *   - class: HTML classes that can be used to style contextually through CSS.
 * - title : The title of this group of rows.
 * - header: The table header columns.
 *   - attributes: Remaining HTML attributes for the element.
 *   - content: HTML classes to apply to each header cell, indexed by
 *   the header's key.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - caption_needed: Is the caption tag needed.
 * - caption: The caption for this table.
 * - accessibility_description: Extended description for the table details.
 * - accessibility_summary: Summary for the table details.
 * - rows: Table row items. Rows are keyed by row number.
 *   - attributes: HTML classes to apply to each row.
 *   - columns: Row column items. Columns are keyed by column number.
 *     - attributes: HTML classes to apply to each column.
 *     - content: The column content.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - responsive: A flag indicating whether table is responsive.
 * - sticky: A flag indicating whether table header is sticky.
 * - summary_element: A render array with table summary information (if any).
 *
 * @see template_preprocess_views_view_table()
 */
#}
{%
  set classes = [
    'views-table',
    'views-view-table',
    'cols-' ~ header|length,
    responsive ? 'responsive-enabled',
    sticky ? 'position-sticky',
  ]
%}
<table{{ attributes.addClass(classes) }}>
  {% if caption_needed %}
    <caption>
    {% if caption %}
      {{ caption }}
    {% else %}
      {{ title }}
    {% endif %}
    {% if (summary_element is not empty) %}
      {{ summary_element }}
    {% endif %}
    </caption>
  {% endif %}
  {% if header %}
    <thead>
      <tr>
        {% for key, column in header %}
          {% if column.default_classes %}
            {%
              set column_classes = [
                'views-field',
                'views-field-' ~ fields[key],
              ]
            %}
          {% endif %}
          <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>
            {%- if column.wrapper_element -%}
              <{{ column.wrapper_element }}>
                {%- if column.url -%}
                  <a href=\"{{ column.url }}\" title=\"{{ column.title }}\" rel=\"nofollow\">{{ column.content }}{{ column.sort_indicator }}</a>
                {%- else -%}
                  {{ column.content }}{{ column.sort_indicator }}
                {%- endif -%}
              </{{ column.wrapper_element }}>
            {%- else -%}
              {%- if column.url -%}
                <a href=\"{{ column.url }}\" title=\"{{ column.title }}\" rel=\"nofollow\">{{ column.content }}{{ column.sort_indicator }}</a>
              {%- else -%}
                {{- column.content }}{{ column.sort_indicator }}
              {%- endif -%}
            {%- endif -%}
          </th>
        {% endfor %}
      </tr>
    </thead>
  {% endif %}
  <tbody>
    {% for row in rows %}
      <tr{{ row.attributes }}>
        {% for key, column in row.columns %}
          {% if column.default_classes %}
            {%
              set column_classes = [
                'views-field'
              ]
            %}
            {% for field in column.fields %}
              {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}
            {% endfor %}
          {% endif %}
          <td{{ column.attributes.addClass(column_classes) }}>
            {%- if column.wrapper_element -%}
              <{{ column.wrapper_element }}>
              {% for content in column.content %}
                {{ content.separator }}{{ content.field_output }}
              {% endfor %}
              </{{ column.wrapper_element }}>
            {%- else -%}
              {% for content in column.content %}
                {{- content.separator }}{{ content.field_output -}}
              {% endfor %}
            {%- endif %}
          </td>
        {% endfor %}
      </tr>
    {% endfor %}
  </tbody>
</table>
", "core/themes/claro/templates/views/views-view-table.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/core/themes/claro/templates/views/views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 44, "for" => 59);
        static $filters = array("length" => 38, "escape" => 43, "merge" => 100);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
