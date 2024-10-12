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

/* @belgrade/macros.twig */
class __TwigTemplate_c0ee5d498f972353d6e9a8a2720c42af extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@belgrade/macros.twig"));

        // line 2
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "classes", "width", "height", "path", "desc"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    // line 3
    public function macro_getIcon($__icon__ = null, $__width__ = null, $__height__ = null, $__classes__ = null, $__path__ = null, $__title__ = null, $__desc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "icon" => $__icon__,
            "width" => $__width__,
            "height" => $__height__,
            "classes" => $__classes__,
            "path" => $__path__,
            "title" => $__title__,
            "desc" => $__desc__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getIcon"));

            // line 4
            yield "
  ";
            // line 5
            $context["title"] = ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 5, $this->source))));
            // line 6
            yield "
  ";
            // line 12
            yield "
  <svg class=\"beo beo-";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 13, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 13, $this->source), "html", null, true);
            yield "\"
       width=\"";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 14, $this->source), 16)) : (16)), "html", null, true);
            yield "\"
       height=\"";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 15, $this->source), 16)) : (16)), "html", null, true);
            yield "\"
       fill=\"currentColor\"
       aria-hidden=\"true\"
       viewBox=\"0 0 16 16\"
       role=\"img\">
    <title>";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
            yield "</title>

    ";
            // line 25
            yield "    <use xlink:href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("path", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 25, $this->source), ((("/" . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath()) . "/images/belgrade-icons.svg#") . $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 25, $this->source)))) : (((("/" . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath()) . "/images/belgrade-icons.svg#") . $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 25, $this->source)))), "html", null, true);
            yield "\"/>

    ";
            // line 31
            yield "
    ";
            // line 32
            if (($context["desc"] ?? null)) {
                // line 33
                yield "      <desc>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 33, $this->source), "html", null, true);
                yield "</desc>
    ";
            }
            // line 35
            yield "  </svg>

";
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@belgrade/macros.twig";
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
        return array (  129 => 35,  123 => 33,  121 => 32,  118 => 31,  112 => 25,  107 => 20,  99 => 15,  95 => 14,  89 => 13,  86 => 12,  83 => 6,  81 => 5,  78 => 4,  57 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# SVG icons #}

{% macro getIcon(icon, width, height, classes, path, title, desc) %}

  {% set title = title ? title : icon|capitalize %}

  {#
    Belgrade uses Bootstrap icons.
    complete list of icons is located here: https://icons.getbootstrap.com/#icons.
    Other SVG's can be imported by defining a custom path to a sprite or image.
  #}

  <svg class=\"beo beo-{{ icon }} {{ classes }}\"
       width=\"{{ width|default(16) }}\"
       height=\"{{ height|default(16) }}\"
       fill=\"currentColor\"
       aria-hidden=\"true\"
       viewBox=\"0 0 16 16\"
       role=\"img\">
    <title>{{ title }}</title>

    {#
      Belgrade icons:
    #}
    <use xlink:href=\"{{ path|default(\"/\" ~ active_theme_path() ~ \"/images/belgrade-icons.svg#\" ~ icon) }}\"/>

    {#
      All Bootstrap icons:
      <use xlink:href=\"{{ path|default(\"/\" ~ active_theme_path() ~ \"/images/bootstrap-icons.svg#\" ~ icon) }}\"/>
    #}

    {% if desc %}
      <desc>{{ desc }}</desc>
    {% endif %}
  </svg>

{% endmacro %}
", "@belgrade/macros.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/macros.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 3, "set" => 5, "if" => 32);
        static $filters = array("capitalize" => 5, "escape" => 13, "default" => 14);
        static $functions = array("active_theme_path" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'set', 'if'],
                ['capitalize', 'escape', 'default'],
                ['active_theme_path'],
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
