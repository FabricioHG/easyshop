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
use Twig\TemplateWrapper;

/* core/themes/claro/templates/classy/dataset/table.html.twig */
class __TwigTemplate_5ada1123e5b0954303b9351e2d9d8b69 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/classy/dataset/table.html.twig"));

        // line 44
        yield "<table";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 44, $this->source), "html", null, true);
        yield ">
  ";
        // line 45
        if (($context["caption"] ?? null)) {
            // line 46
            yield "    <caption>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 46, $this->source), "html", null, true);
            yield "</caption>
  ";
        }
        // line 48
        yield "
  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 50
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 50)) {
                // line 51
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                yield ">
        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 53
                    yield "          <col";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "attributes", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    yield " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "      </colgroup>
    ";
            } else {
                // line 57
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                yield " />
    ";
            }
            // line 59
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['colgroup'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
  ";
        // line 61
        if (($context["header"] ?? null)) {
            // line 62
            yield "    <thead>
      <tr>
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 65
                yield "          ";
                // line 66
                $context["cell_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["cell"], "active_table_sort", [], "any", false, false, true, 67)) ? ("is-active") : (""))];
                // line 70
                yield "          <";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 70), "addClass", [($context["cell_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                yield ">";
                // line 71
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                // line 72
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                yield ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </tr>
    </thead>
  ";
        }
        // line 77
        yield "
  ";
        // line 78
        if (($context["rows"] ?? null)) {
            // line 79
            yield "    <tbody>
      ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 81
                yield "        ";
                // line 82
                $context["row_classes"] = [(( !                // line 83
($context["no_striping"] ?? null)) ? (Twig\Extension\CoreExtension::cycle(["odd", "even"], $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 83), 83, $this->source))) : (""))];
                // line 86
                yield "        <tr";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 86), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
                yield ">
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 88
                    yield "            <";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    yield ">";
                    // line 89
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                    // line 90
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    yield ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                yield "        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "    </tbody>
  ";
        } elseif (        // line 95
($context["empty"] ?? null)) {
            // line 96
            yield "    <tbody>
      <tr class=\"odd\">
        <td colspan=\"";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null), 98, $this->source), "html", null, true);
            yield "\" class=\"empty message\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 98, $this->source), "html", null, true);
            yield "</td>
      </tr>
    </tbody>
  ";
        }
        // line 102
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 103
            yield "    <tfoot>
      ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 105
                yield "        <tr";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                yield ">
          ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 106));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 107
                    yield "            <";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                    yield ">";
                    // line 108
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                    // line 109
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    yield ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "    </tfoot>
  ";
        }
        // line 115
        yield "</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "caption", "colgroups", "header", "rows", "no_striping", "loop", "empty", "header_columns", "footer"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/classy/dataset/table.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  277 => 115,  273 => 113,  266 => 111,  257 => 109,  255 => 108,  250 => 107,  246 => 106,  241 => 105,  237 => 104,  234 => 103,  231 => 102,  222 => 98,  218 => 96,  216 => 95,  213 => 94,  198 => 92,  189 => 90,  187 => 89,  182 => 88,  178 => 87,  173 => 86,  171 => 83,  170 => 82,  168 => 81,  151 => 80,  148 => 79,  146 => 78,  143 => 77,  138 => 74,  129 => 72,  127 => 71,  122 => 70,  120 => 67,  119 => 66,  117 => 65,  113 => 64,  109 => 62,  107 => 61,  104 => 60,  98 => 59,  92 => 57,  88 => 55,  79 => 53,  75 => 52,  70 => 51,  67 => 50,  63 => 49,  60 => 48,  54 => 46,  52 => 45,  47 => 44,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a table.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the <table> tag.
 * - caption: A localized string for the <caption> tag.
 * - colgroups: Column groups. Each group contains the following properties:
 *   - attributes: HTML attributes to apply to the <col> tag.
 *     Note: Drupal currently supports only one table header row, see
 *     https://www.drupal.org/node/893530 and
 *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.
 * - header: Table header cells. Each cell contains the following properties:
 *   - tag: The HTML tag name to use; either 'th' or 'td'.
 *   - attributes: HTML attributes to apply to the tag.
 *   - content: A localized string for the title of the column.
 *   - field: Field name (required for column sorting).
 *   - sort: Default sort order for this column (\"asc\" or \"desc\").
 * - sticky: A flag indicating whether to use a \"sticky\" table header.
 * - rows: Table rows. Each row contains the following properties:
 *   - attributes: HTML attributes to apply to the <tr> tag.
 *   - data: Table cells.
 *   - no_striping: A flag indicating that the row should receive no
 *     'even / odd' styling. Defaults to FALSE.
 *   - cells: Table cells of the row. Each cell contains the following keys:
 *     - tag: The HTML tag name to use; either 'th' or 'td'.
 *     - attributes: Any HTML attributes, such as \"colspan\", to apply to the
 *       table cell.
 *     - content: The string to display in the table cell.
 *     - active_table_sort: A boolean indicating whether the cell is the active
         table sort.
 *     - header: Boolean indicating whether the cell should be rendered as a
 *       header (<th>) or not (<td>).
 * - footer: Table footer rows, in the same format as the rows variable.
 * - empty: The message to display in an extra row if table does not have
 *   any rows.
 * - no_striping: A boolean indicating that the row should receive no striping.
 * - header_columns: The number of columns in the header.
 *
 * @see template_preprocess_table()
 */
#}
<table{{ attributes }}>
  {% if caption %}
    <caption>{{ caption }}</caption>
  {% endif %}

  {% for colgroup in colgroups %}
    {% if colgroup.cols %}
      <colgroup{{ colgroup.attributes }}>
        {% for col in colgroup.cols %}
          <col{{ col.attributes }} />
        {% endfor %}
      </colgroup>
    {% else %}
      <colgroup{{ colgroup.attributes }} />
    {% endif %}
  {% endfor %}

  {% if header %}
    <thead>
      <tr>
        {% for cell in header %}
          {%
            set cell_classes = [
              cell.active_table_sort ? 'is-active',
            ]
          %}
          <{{ cell.tag }}{{ cell.attributes.addClass(cell_classes) }}>
            {{- cell.content -}}
          </{{ cell.tag }}>
        {% endfor %}
      </tr>
    </thead>
  {% endif %}

  {% if rows %}
    <tbody>
      {% for row in rows %}
        {%
          set row_classes = [
            not no_striping ? cycle(['odd', 'even'], loop.index0),
          ]
        %}
        <tr{{ row.attributes.addClass(row_classes) }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tbody>
  {% elseif empty %}
    <tbody>
      <tr class=\"odd\">
        <td colspan=\"{{ header_columns }}\" class=\"empty message\">{{ empty }}</td>
      </tr>
    </tbody>
  {% endif %}
  {% if footer %}
    <tfoot>
      {% for row in footer %}
        <tr{{ row.attributes }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tfoot>
  {% endif %}
</table>
", "core/themes/claro/templates/classy/dataset/table.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/classy/dataset/table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45, "for" => 49, "set" => 66);
        static $filters = array("escape" => 44);
        static $functions = array("cycle" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['cycle'],
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
