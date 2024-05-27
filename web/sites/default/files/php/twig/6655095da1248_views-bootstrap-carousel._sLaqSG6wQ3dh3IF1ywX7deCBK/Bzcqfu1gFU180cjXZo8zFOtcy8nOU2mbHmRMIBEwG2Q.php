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

/* modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_166bf7d830f1f4de8eadbe149f2206c4 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig"));

        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views_bootstrap/components"), "html", null, true);
        echo "

<div id=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 26, $this->source), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\"";
        if (($context["ride"] ?? null)) {
            echo " data-bs-ride=\"carousel\" ";
        }
        // line 27
        echo "     data-bs-interval=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null), 27, $this->source), "html", null, true);
        echo "\" data-bs-pause=\"";
        if (($context["pause"] ?? null)) {
            echo "hover";
        } else {
            echo "false";
        }
        echo "\"
     data-wrap=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null), 28, $this->source), "html", null, true);
        echo "\">

  ";
        // line 31
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 32
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
                echo "        ";
                if ((($context["key"] % ($context["columns"] ?? null)) == 0)) {
                    // line 35
                    echo "          ";
                    $context["indicator_classes"] = [((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 35)) ? ("active") : (""))];
                    // line 36
                    echo "          <li class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null), 36, $this->source), " "), "html", null, true);
                    echo "\" data-bs-target=\"#";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 36, $this->source), "html", null, true);
                    echo "\" data-bs-slide-to=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] / ($context["columns"] ?? null)), "html", null, true);
                    echo "\"></li>
        ";
                }
                // line 38
                echo "      ";
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
            echo "    </ol>
  ";
        }
        // line 41
        echo "
  ";
        // line 43
        echo "  <div class=\"carousel-inner\">
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            echo "      ";
            $context["row_classes"] = ["carousel-item", ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 45)) ? ("active") : (""))];
            // line 46
            echo "      ";
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 46) - 1) % ($context["columns"] ?? null)) == 0)) {
                // line 47
                echo "        ";
                $context["row_classes"] = ["carousel-item", "row", ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 47)) ? ("active") : (""))];
                // line 48
                echo "        <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo ">
      ";
            }
            // line 50
            echo "      <div class=\"col-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoints"] ?? null), 50, $this->source), "html", null, true);
            echo "-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (12 / ($context["columns"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 51
            if ((($context["display"] ?? null) == "fields")) {
                // line 52
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
          ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 53) || twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 53))) {
                    // line 54
                    echo "        ";
                    if (($context["use_caption"] ?? null)) {
                        // line 55
                        echo "            <div class=\"carousel-caption d-none d-md-block\">
          ";
                    }
                    // line 57
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "                <h3>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo "</h3>
              ";
                    }
                    // line 60
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 60)) {
                        // line 61
                        echo "                <p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo "</p>
              ";
                    }
                    // line 63
                    echo "            ";
                    if (($context["use_caption"] ?? null)) {
                        // line 64
                        echo "              </div>
            ";
                    }
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "        ";
            } else {
                // line 68
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 70
            echo "      </div>
      ";
            // line 71
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 71) % ($context["columns"] ?? null)) == 0)) {
                // line 72
                echo "        </div>
      ";
            }
            // line 74
            echo "    ";
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
        echo "  </div>
  ";
        // line 77
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 78
            echo "    <a class=\"carousel-control-prev\" href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 78, $this->source), "html", null, true);
            echo "\" role=\"button\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 82, $this->source), "html", null, true);
            echo "\" role=\"button\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 87
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "ride", "interval", "pause", "wrap", "indicators", "rows", "columns", "loop", "breakpoints", "display", "use_caption", "navigation"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

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
        return array (  275 => 87,  269 => 84,  264 => 82,  259 => 80,  253 => 78,  250 => 77,  247 => 75,  233 => 74,  229 => 72,  227 => 71,  224 => 70,  218 => 68,  215 => 67,  212 => 66,  208 => 64,  205 => 63,  199 => 61,  196 => 60,  190 => 58,  187 => 57,  183 => 55,  180 => 54,  178 => 53,  173 => 52,  171 => 51,  164 => 50,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  132 => 44,  129 => 43,  126 => 41,  122 => 39,  108 => 38,  98 => 36,  95 => 35,  92 => 34,  75 => 33,  72 => 32,  69 => 31,  64 => 28,  53 => 27,  47 => 26,  42 => 24,);
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
    <ol class=\"carousel-indicators\">
      {% for key, row in rows %}
        {% if key % columns == 0 %}
          {% set indicator_classes = [loop.first ? 'active'] %}
          <li class=\"{{ indicator_classes|join(' ') }}\" data-bs-target=\"#{{ id }}\" data-bs-slide-to=\"{{ key/columns }}\"></li>
        {% endif %}
      {% endfor %}
    </ol>
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
", "modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/modules/contrib/views_bootstrap/templates/views-bootstrap-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "for" => 33, "set" => 35);
        static $filters = array("escape" => 24, "join" => 36, "t" => 80);
        static $functions = array("attach_library" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
                ['attach_library']
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
