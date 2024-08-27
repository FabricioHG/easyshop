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

/* themes/contrib/belgrade/templates/layout/region--navigation.html.twig */
class __TwigTemplate_4f34f2b0e61a019c306fe4659da8fffc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/layout/region--navigation.html.twig"));

        // line 16
        $context["classes"] = ["offcanvas", "region", ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["region"] ?? null), 19, $this->source))), ((        // line 20
($context["navigation_position"] ?? null)) ? (("offcanvas-" . $this->sandbox->ensureToStringAllowed(($context["navigation_position"] ?? null), 20, $this->source))) : ("")), "ps-md-3"];
        // line 24
        yield "
";
        // line 25
        $context["container"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region_container"] ?? null), 25, $this->source));
        // line 26
        yield "
";
        // line 27
        if (($context["content"] ?? null)) {
            // line 28
            yield "  <section";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            yield " data-bs-scroll=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_body_scrolling"] ?? null), 28, $this->source), "html", null, true);
            yield "\" data-bs-backdrop=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_backdrop"] ?? null), 28, $this->source), "html", null, true);
            yield "\" tabindex=\"-1\" id=\"navigationRegion\" aria-labelledby=\"navigationRegionLabel\">
    <div class=\"offcanvas-header\">
      <a href=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\" class=\"site-logo\">
      ";
            // line 31
            if (($context["inline_logo"] ?? null)) {
                // line 32
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 32, $this->source), true));
                yield "
      ";
            } else {
                // line 34
                yield "        <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 34, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" />
      ";
            }
            // line 36
            yield "      </a>
      <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
      ";
            // line 40
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 43
            yield "    </div>
  </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "navigation_position", "region_container", "content", "attributes", "navigation_body_scrolling", "navigation_backdrop", "inline_logo", "site_logo"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
        yield "
      ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/layout/region--navigation.html.twig";
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
        return array (  115 => 41,  108 => 40,  96 => 43,  94 => 40,  88 => 36,  80 => 34,  74 => 32,  72 => 31,  68 => 30,  58 => 28,  56 => 27,  53 => 26,  51 => 25,  48 => 24,  46 => 20,  45 => 19,  44 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
  'offcanvas',
  'region',
  'region-' ~ region|clean_class,
  navigation_position ? 'offcanvas-' ~ navigation_position,
  'ps-md-3'
]
%}

{% set container = region_container|clean_class %}

{% if content %}
  <section{{ attributes.addClass(classes) }} data-bs-scroll=\"{{ navigation_body_scrolling }}\" data-bs-backdrop=\"{{ navigation_backdrop }}\" tabindex=\"-1\" id=\"navigationRegion\" aria-labelledby=\"navigationRegionLabel\">
    <div class=\"offcanvas-header\">
      <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"site-logo\">
      {% if inline_logo %}
        {{ source(site_logo, ignore_missing = true) }}
      {% else %}
        <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
      {% endif %}
      </a>
      <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
      {% block content %}
        {{ content }}
      {% endblock %}
    </div>
  </section>
{% endif %}
", "themes/contrib/belgrade/templates/layout/region--navigation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/layout/region--navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 27, "block" => 40);
        static $filters = array("clean_class" => 19, "escape" => 28, "t" => 34);
        static $functions = array("path" => 30, "source" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['path', 'source'],
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
