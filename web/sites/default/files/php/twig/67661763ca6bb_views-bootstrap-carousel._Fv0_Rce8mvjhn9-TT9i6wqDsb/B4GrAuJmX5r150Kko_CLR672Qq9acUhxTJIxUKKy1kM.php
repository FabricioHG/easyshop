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

/* modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_57ce377f010c6b927089e81891103105 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig"));

        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views_bootstrap/components"), "html", null, true);
        yield "
<div id=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" class=\"carousel ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["effect"] ?? null), "html", null, true);
        yield "\" ";
        if (($context["ride"] ?? null)) {
            yield " data-bs-ride=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ride"] ?? null), "html", null, true);
            yield "\"
     data-bs-interval=\"";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["interval"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " data-bs-pause=\"";
        if (($context["pause"] ?? null)) {
            yield "hover";
        } else {
            yield "false";
        }
        yield "\"
     data-wrap=\"";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrap"] ?? null), "html", null, true);
        yield "\">

  ";
        // line 30
        yield "  ";
        if (($context["indicators"] ?? null)) {
            // line 31
            yield "    <div class=\"carousel-indicators\">
      ";
            // line 32
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
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 33
                yield "        ";
                if ((($context["key"] % ($context["columns"] ?? null)) == 0)) {
                    // line 34
                    yield "          ";
                    $context["indicator_classes"] = [((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 34)) ? ("active") : (""))];
                    // line 35
                    yield "          <button class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["indicator_classes"] ?? null), " "), "html", null, true);
                    yield "\" data-bs-target=\"#";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                    yield "\" data-bs-slide-to=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] / ($context["columns"] ?? null)), "html", null, true);
                    yield "\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((t("Slide") . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 35)), "html", null, true);
                    yield "\"></button>
        ";
                }
                // line 37
                yield "      ";
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
            unset($context['_seq'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    </div>
  ";
        }
        // line 40
        yield "
  ";
        // line 42
        yield "  <div class=\"carousel-inner\">
    ";
        // line 43
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
            // line 44
            yield "      ";
            // line 47
            yield "      ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 47) - 1) % ($context["columns"] ?? null)) == 0)) {
                // line 48
                yield "        ";
                $context["row_classes"] = ["carousel-item", ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 48)) ? ("active") : (""))];
                // line 49
                yield "        <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 49), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 49), "html", null, true);
                yield ">
          <div class=\"row\">
      ";
            }
            // line 52
            yield "      ";
            // line 53
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breakpoints"] ?? null), "html", null, true);
            yield " position-relative\">
        ";
            // line 54
            if ((($context["display"] ?? null) == "fields")) {
                // line 55
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 55), "html", null, true);
                yield "
          ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 56) || CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 56))) {
                    // line 57
                    yield "        ";
                    if (($context["use_caption"] ?? null)) {
                        // line 58
                        yield "            <div class=\"carousel-caption ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption_breakpoints"] ?? null), "html", null, true);
                        yield "\">
          ";
                    }
                    // line 60
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 60)) {
                        // line 61
                        yield "                <h3>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 61), "html", null, true);
                        yield "</h3>
              ";
                    }
                    // line 63
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 63)) {
                        // line 64
                        yield "                <p>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 64), "html", null, true);
                        yield "</p>
              ";
                    }
                    // line 66
                    yield "            ";
                    if (($context["use_caption"] ?? null)) {
                        // line 67
                        yield "              </div>
            ";
                    }
                    // line 69
                    yield "          ";
                }
                // line 70
                yield "        ";
            } else {
                // line 71
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 71), "html", null, true);
                yield "
        ";
            }
            // line 73
            yield "      </div>
      ";
            // line 78
            yield "      ";
            if (((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 78) % ($context["columns"] ?? null)) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 78) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null))))) {
                // line 79
                yield "          </div>
        </div>
      ";
            }
            // line 82
            yield "    ";
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
        // line 83
        yield "  </div>
  ";
        // line 85
        yield "  ";
        if (($context["navigation"] ?? null)) {
            // line 86
            yield "    <a class=\"carousel-control-prev\" href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            yield "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            yield "</span>
    </a>
  ";
        }
        // line 95
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "effect", "ride", "interval", "pause", "wrap", "indicators", "rows", "columns", "loop", "breakpoints", "display", "use_caption", "caption_breakpoints", "navigation"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
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
        return array (  290 => 95,  284 => 92,  279 => 90,  274 => 88,  268 => 86,  265 => 85,  262 => 83,  248 => 82,  243 => 79,  240 => 78,  237 => 73,  231 => 71,  228 => 70,  225 => 69,  221 => 67,  218 => 66,  212 => 64,  209 => 63,  203 => 61,  200 => 60,  194 => 58,  191 => 57,  189 => 56,  184 => 55,  182 => 54,  177 => 53,  175 => 52,  168 => 49,  165 => 48,  162 => 47,  160 => 44,  143 => 43,  140 => 42,  137 => 40,  133 => 38,  119 => 37,  107 => 35,  104 => 34,  101 => 33,  84 => 32,  81 => 31,  78 => 30,  73 => 27,  61 => 26,  51 => 25,  47 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for displaying a view as a bootstrap carousel.
 *
 * Available variables:
 * - view: The view object.
 * - rows: A list of the view's row items.
 * - id: A valid HTML ID and guaranteed to be unique.
 * - interval: The amount of time to delay between automatically cycling a
 *   slide item. If false, carousel will not automatically cycle.
 * - pause: Pauses the cycling of the carousel on mouseenter and
 *   resumes the cycling of the carousel on mouseleave.
 * - wrap: Whether the carousel should cycle continuously or have
 *   hard stops.
 * - columns: The amount of columns in a single slide.
 * - breakpoints: The min-width of the multicolumn view.
 *
 * @see template_preprocess_views_bootstrap_carousel()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('views_bootstrap/components') }}
<div id=\"{{ id }}\" class=\"carousel {{ effect }}\" {% if ride %} data-bs-ride=\"{{ ride }}\"
     data-bs-interval=\"{{ interval }}\"{% endif %} data-bs-pause=\"{% if pause %}hover{% else %}false{% endif %}\"
     data-wrap=\"{{ wrap }}\">

  {# Carousel indicators #}
  {% if indicators %}
    <div class=\"carousel-indicators\">
      {% for key, row in rows %}
        {% if key % columns == 0 %}
          {% set indicator_classes = [loop.first ? 'active'] %}
          <button class=\"{{ indicator_classes|join(' ') }}\" data-bs-target=\"#{{ id }}\" data-bs-slide-to=\"{{ key/columns }}\" aria-label=\"{{ 'Slide'|t ~ ' ' ~ loop.index }}\"></button>
        {% endif %}
      {% endfor %}
    </div>
  {% endif %}

  {# Carousel rows #}
  <div class=\"carousel-inner\">
    {% for row in rows %}
      {#
       Create the carousel-item and row container before the first column in each row.
       #}
      {% if (loop.index-1) % columns == 0 %}
        {% set row_classes = ['carousel-item', loop.first ? 'active'] %}
        <div {{ row.attributes.addClass(row_classes) }}>
          <div class=\"row\">
      {% endif %}
      {# Create columns. #}
      <div class=\"{{ breakpoints }} position-relative\">
        {% if display == 'fields' %}
          {{ row.image }}
          {% if row.title or row.description %}
        {%  if use_caption %}
            <div class=\"carousel-caption {{ caption_breakpoints }}\">
          {% endif %}
              {% if row.title %}
                <h3>{{ row.title }}</h3>
              {% endif %}
              {% if row.description %}
                <p>{{ row.description }}</p>
              {% endif %}
            {%  if use_caption %}
              </div>
            {% endif %}
          {% endif %}
        {% else %}
          {{ row.content }}
        {% endif %}
      </div>
      {#
       Close the row and carousel-item divs for the last column in the row or
       the last item in the list of items.
       #}
      {% if (loop.index is divisible by columns) or (loop.index == rows|length) %}
          </div>
        </div>
      {% endif %}
    {% endfor %}
  </div>
  {# Controls #}
  {% if navigation %}
    <a class=\"carousel-control-prev\" href=\"#{{ id }}\" role=\"button\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">{{ 'Previous'|t }}</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#{{ id }}\" role=\"button\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">{{ 'Next'|t }}</span>
    </a>
  {% endif %}
</div>
", "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25, "for" => 32, "set" => 34);
        static $filters = array("escape" => 24, "join" => 35, "t" => 35, "length" => 78);
        static $functions = array("attach_library" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't', 'length'],
                ['attach_library'],
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
