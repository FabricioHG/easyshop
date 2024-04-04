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

        // line 22
        echo "
<div id=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 23, $this->source), "html", null, true);
        echo "\" class=\"carousel ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["effect"] ?? null), 23, $this->source), "html", null, true);
        echo "\"
    data-bs-interval=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null), 24, $this->source), "html", null, true);
        echo "\"
    ";
        // line 25
        if (($context["ride"] ?? null)) {
            echo " data-bs-ride=\"carousel\" ";
        }
        // line 26
        echo "    data-bs-pause=\"";
        if (($context["pause"] ?? null)) {
            echo "hover";
        } else {
            echo "false";
        }
        echo "\"
>
  ";
        // line 29
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 30
            echo "  <ol class=\"carousel-indicators\">
      ";
            // line 31
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
                // line 32
                echo "          ";
                $context["indicator_classes"] = [((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 32)) ? ("active") : (""))];
                // line 33
                echo "          <li class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null), 33, $this->source), " "), "html", null, true);
                echo "\" data-bs-target=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 33, $this->source), "html", null, true);
                echo "\" data-bs-slide-to=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 33, $this->source), "html", null, true);
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ol>
  ";
        }
        // line 37
        echo "
  ";
        // line 39
        echo "  <div class=\"carousel-inner\">
    ";
        // line 40
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
            // line 41
            echo "        ";
            $context["row_classes"] = ["carousel-item", ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 41)) ? ("active") : (""))];
            // line 42
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null), 42, $this->source), " "), "html", null, true);
            echo "\">
        ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 44) || twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 44))) {
                // line 45
                echo "            ";
                if (($context["use_caption"] ?? null)) {
                    // line 46
                    echo "            <div class=\"carousel-caption d-none d-md-block\">
            ";
                }
                // line 48
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 48)) {
                    // line 49
                    echo "                <h3>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 51
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 51)) {
                    // line 52
                    echo "                <p>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo "</p>
            ";
                }
                // line 54
                echo "            ";
                if (($context["use_caption"] ?? null)) {
                    // line 55
                    echo "            </div>
            ";
                }
                // line 57
                echo "        ";
            }
            // line 58
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>
  ";
        // line 62
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 63
            echo "    <a class=\"carousel-control-prev\" href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 63, $this->source), "html", null, true);
            echo "\" role=\"button\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 67, $this->source), "html", null, true);
            echo "\" role=\"button\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 72
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "effect", "interval", "ride", "pause", "indicators", "rows", "loop", "use_caption", "navigation"]);        
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
        return array (  235 => 72,  229 => 69,  224 => 67,  219 => 65,  213 => 63,  210 => 62,  207 => 60,  192 => 58,  189 => 57,  185 => 55,  182 => 54,  176 => 52,  173 => 51,  167 => 49,  164 => 48,  160 => 46,  157 => 45,  155 => 44,  151 => 43,  146 => 42,  143 => 41,  126 => 40,  123 => 39,  120 => 37,  116 => 35,  95 => 33,  92 => 32,  75 => 31,  72 => 30,  69 => 29,  59 => 26,  55 => 25,  51 => 24,  45 => 23,  42 => 22,);
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
 *
 * @see template_preprocess_views_bootstrap_carousel()
 *
 * @ingroup themeable
 */
#}

<div id=\"{{ id }}\" class=\"carousel {{ effect }}\"
    data-bs-interval=\"{{ interval }}\"
    {% if ride %} data-bs-ride=\"carousel\" {% endif %}
    data-bs-pause=\"{% if pause %}hover{% else %}false{% endif %}\"
>
  {# Show indicators if set in view. #}
  {%  if indicators %}
  <ol class=\"carousel-indicators\">
      {% for key, row in rows %}
          {% set indicator_classes = [loop.first ? 'active'] %}
          <li class=\"{{ indicator_classes|join(' ') }}\" data-bs-target=\"#{{ id }}\" data-bs-slide-to=\"{{ key }}\"></li>
      {% endfor %}
  </ol>
  {% endif %}

  {# Carousel body. #}
  <div class=\"carousel-inner\">
    {% for row in rows %}
        {% set row_classes = ['carousel-item', loop.first ? 'active'] %}
        <div class=\"{{ row_classes|join(' ') }}\">
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
        </div>
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
        static $tags = array("if" => 25, "for" => 31, "set" => 32);
        static $filters = array("escape" => 23, "join" => 33, "t" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
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
