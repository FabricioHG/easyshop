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

/* modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_acc64e4ca39ce16ee3fa1a721c4b7b60 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig"));

        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views_bootstrap/components"), "html", null, true);
        yield "

<div id=\"";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 26, $this->source), "html", null, true);
        yield "\" class=\"carousel slide\" data-ride=\"carousel\"";
        if (($context["ride"] ?? null)) {
            yield " data-bs-ride=\"carousel\" ";
        }
        // line 27
        yield "     data-bs-interval=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null), 27, $this->source), "html", null, true);
        yield "\" data-bs-pause=\"";
        if (($context["pause"] ?? null)) {
            yield "hover";
        } else {
            yield "false";
        }
        yield "\"
     data-wrap=\"";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null), 28, $this->source), "html", null, true);
        yield "\">

  ";
        // line 31
        yield "  ";
        if (($context["indicators"] ?? null)) {
            // line 32
            yield "    <div class=\"carousel-indicators\">
      ";
            // line 33
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
                // line 34
                yield "        ";
                if ((($context["key"] % ($context["columns"] ?? null)) == 0)) {
                    // line 35
                    yield "          ";
                    $context["indicator_classes"] = [((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 35)) ? ("active") : (""))];
                    // line 36
                    yield "          <button class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null), 36, $this->source), " "), "html", null, true);
                    yield "\" data-bs-target=\"#";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 36, $this->source), "html", null, true);
                    yield "\" data-bs-slide-to=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] / ($context["columns"] ?? null)), "html", null, true);
                    yield "\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((t("Slide") . " ") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
                    yield "\"></button>
        ";
                }
                // line 38
                yield "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    </div>
  ";
        }
        // line 41
        yield "
  ";
        // line 43
        yield "  <div class=\"carousel-inner\">
    ";
        // line 44
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
            // line 45
            yield "      ";
            $context["row_classes"] = ["carousel-item", ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 45)) ? ("active") : (""))];
            // line 46
            yield "      ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 46) - 1) % ($context["columns"] ?? null)) == 0)) {
                // line 47
                yield "        ";
                $context["row_classes"] = ["carousel-item", "row", ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 47)) ? ("active") : (""))];
                // line 48
                yield "        <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                yield ">
      ";
            }
            // line 50
            yield "      <div class=\"col-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoints"] ?? null), 50, $this->source), "html", null, true);
            yield "-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (12 / ($context["columns"] ?? null)), "html", null, true);
            yield "\">
        ";
            // line 51
            if ((($context["display"] ?? null) == "fields")) {
                // line 52
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                yield "
          ";
                // line 53
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 53) || CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 53))) {
                    // line 54
                    yield "        ";
                    if (($context["use_caption"] ?? null)) {
                        // line 55
                        yield "            <div class=\"carousel-caption d-none d-md-block\">
          ";
                    }
                    // line 57
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 57)) {
                        // line 58
                        yield "                <h3>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        yield "</h3>
              ";
                    }
                    // line 60
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 60)) {
                        // line 61
                        yield "                <p>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        yield "</p>
              ";
                    }
                    // line 63
                    yield "            ";
                    if (($context["use_caption"] ?? null)) {
                        // line 64
                        yield "              </div>
            ";
                    }
                    // line 66
                    yield "          ";
                }
                // line 67
                yield "        ";
            } else {
                // line 68
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                yield "
        ";
            }
            // line 70
            yield "      </div>
      ";
            // line 71
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 71) % ($context["columns"] ?? null)) == 0)) {
                // line 72
                yield "        </div>
      ";
            }
            // line 74
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "  </div>
  ";
        // line 77
        yield "  ";
        if (($context["navigation"] ?? null)) {
            // line 78
            yield "    <a class=\"carousel-control-prev\" href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 78, $this->source), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            yield "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 82, $this->source), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            yield "</span>
    </a>
  ";
        }
        // line 87
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "ride", "interval", "pause", "wrap", "indicators", "rows", "columns", "loop", "breakpoints", "display", "use_caption", "navigation"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
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
        return array (  278 => 87,  272 => 84,  267 => 82,  262 => 80,  256 => 78,  253 => 77,  250 => 75,  236 => 74,  232 => 72,  230 => 71,  227 => 70,  221 => 68,  218 => 67,  215 => 66,  211 => 64,  208 => 63,  202 => 61,  199 => 60,  193 => 58,  190 => 57,  186 => 55,  183 => 54,  181 => 53,  176 => 52,  174 => 51,  167 => 50,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  135 => 44,  132 => 43,  129 => 41,  125 => 39,  111 => 38,  99 => 36,  96 => 35,  93 => 34,  76 => 33,  73 => 32,  70 => 31,  65 => 28,  54 => 27,  48 => 26,  43 => 24,);
    }

    public function getSourceContext()
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

<div id=\"{{ id }}\" class=\"carousel slide\" data-ride=\"carousel\"{% if ride %} data-bs-ride=\"carousel\" {% endif %}
     data-bs-interval=\"{{ interval }}\" data-bs-pause=\"{% if pause %}hover{% else %}false{% endif %}\"
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
      {% set row_classes = ['carousel-item', loop.first ? 'active'] %}
      {% if (loop.index-1) % columns == 0 %}
        {% set row_classes = ['carousel-item', 'row', loop.first ? 'active'] %}
        <div {{ row.attributes.addClass(row_classes) }}>
      {% endif %}
      <div class=\"col-{{ breakpoints }}-{{ 12/columns }}\">
        {% if display == 'fields' %}
          {{ row.image }}
          {% if row.title or row.description %}
        {%  if use_caption %}
            <div class=\"carousel-caption d-none d-md-block\">
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
      {% if loop.index % columns == 0 %}
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
        static $tags = array("if" => 26, "for" => 33, "set" => 35);
        static $filters = array("escape" => 24, "join" => 36, "t" => 36);
        static $functions = array("attach_library" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
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
