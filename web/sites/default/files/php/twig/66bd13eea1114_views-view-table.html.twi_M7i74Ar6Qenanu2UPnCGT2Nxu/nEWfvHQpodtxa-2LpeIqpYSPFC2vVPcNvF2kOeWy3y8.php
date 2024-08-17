<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/views/views-view-table.html.twig */
class __TwigTemplate_5aece9db36f40f587dcf0e454f2e2fb8 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/views/views-view-table.html.twig"));

        // line 35
        $context["classes"] = ["views-table", "views-view-table", ("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(        // line 38
($context["header"] ?? null), 38, $this->source))), ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 40
($context["sticky"] ?? null)) ? ("position-sticky sticky-header") : (""))];
        // line 43
        yield "<table";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        yield ">
  ";
        // line 44
        if (($context["caption_needed"] ?? null)) {
            // line 45
            yield "    <caption>
    ";
            // line 46
            if (($context["caption"] ?? null)) {
                // line 47
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 47, $this->source), "html", null, true);
                yield "
    ";
            } else {
                // line 49
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 49, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 51
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary_element"] ?? null))) {
                // line 52
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 52, $this->source), "html", null, true);
                yield "
    ";
            }
            // line 54
            yield "    </caption>
  ";
        }
        // line 56
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 57
            yield "    <thead>
      <tr>
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 60
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 60)) {
                    // line 61
                    yield "            ";
                    // line 62
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 64
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 64, $this->source))];
                    // line 67
                    yield "          ";
                }
                // line 68
                yield "          <th";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 68), "setAttribute", ["scope", "col"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                yield ">";
                // line 69
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 69)) {
                    // line 70
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    yield ">";
                    // line 71
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 71)) {
                        // line 72
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 74
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    }
                    // line 76
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 78
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 78)) {
                        // line 79
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        yield "\" rel=\"nofollow\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 81
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                    }
                }
                // line 84
                yield "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "      </tr>
    </thead>
  ";
        }
        // line 89
        yield "  <tbody>
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 91
            yield "      <tr";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            yield ">
        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 92));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 93
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 93)) {
                    // line 94
                    yield "            ";
                    // line 95
                    $context["column_classes"] = ["views-field"];
                    // line 99
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 99));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 100
                        yield "              ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 100, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 100, $this->source))]);
                        // line 101
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    yield "          ";
                }
                // line 103
                yield "          <td";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 103), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 103), 103, $this->source), "html", null, true);
                yield ">";
                // line 104
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 104)) {
                    // line 105
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                    yield ">
              ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 107
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        yield "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    yield "              </";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 111));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 112
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 115
                yield "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary_element", "fields", "rows"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
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
        return array (  263 => 119,  256 => 117,  249 => 115,  241 => 112,  237 => 111,  232 => 109,  222 => 107,  218 => 106,  213 => 105,  211 => 104,  207 => 103,  204 => 102,  198 => 101,  195 => 100,  190 => 99,  188 => 95,  186 => 94,  183 => 93,  179 => 92,  174 => 91,  170 => 90,  167 => 89,  162 => 86,  155 => 84,  150 => 81,  140 => 79,  138 => 78,  133 => 76,  129 => 74,  119 => 72,  117 => 71,  113 => 70,  111 => 69,  107 => 68,  104 => 67,  102 => 64,  101 => 62,  99 => 61,  96 => 60,  92 => 59,  88 => 57,  85 => 56,  81 => 54,  75 => 52,  72 => 51,  66 => 49,  60 => 47,  58 => 46,  55 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 35,);
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
    sticky ? 'position-sticky sticky-header',
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
", "core/themes/claro/templates/views/views-view-table.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/views/views-view-table.html.twig");
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
                [],
                $this->source
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
