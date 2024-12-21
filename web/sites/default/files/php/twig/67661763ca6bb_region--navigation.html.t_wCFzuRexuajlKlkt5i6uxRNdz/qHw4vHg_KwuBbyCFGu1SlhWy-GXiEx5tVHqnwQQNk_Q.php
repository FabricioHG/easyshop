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

/* themes/contrib/belgrade/templates/layout/region--navigation.html.twig */
class __TwigTemplate_ebb15740a50ff8ccde03123227013b3f extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/layout/region--navigation.html.twig"));

        // line 16
        $context["classes"] = ["offcanvas", "region", ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 19
($context["region"] ?? null))), ((        // line 20
($context["navigation_position"] ?? null)) ? (("offcanvas-" . ($context["navigation_position"] ?? null))) : ("")), "ps-md-3"];
        // line 24
        yield "
";
        // line 25
        $context["container"] = \Drupal\Component\Utility\Html::getClass(($context["region_container"] ?? null));
        // line 26
        yield "
";
        // line 27
        if (($context["content"] ?? null)) {
            // line 28
            yield "  <section";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
            yield " data-bs-scroll=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navigation_body_scrolling"] ?? null), "html", null, true);
            yield "\" data-bs-backdrop=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navigation_backdrop"] ?? null), "html", null, true);
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
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, ($context["site_logo"] ?? null), true));
                yield "
      ";
            } else {
                // line 34
                yield "        <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
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

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
      ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/layout/region--navigation.html.twig";
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
        return array (  122 => 41,  112 => 40,  100 => 43,  98 => 40,  92 => 36,  84 => 34,  78 => 32,  76 => 31,  72 => 30,  62 => 28,  60 => 27,  57 => 26,  55 => 25,  52 => 24,  50 => 20,  49 => 19,  48 => 16,);
    }

    public function getSourceContext(): Source
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
