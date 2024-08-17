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

/* core/themes/claro/templates/admin/tablesort-indicator.html.twig */
class __TwigTemplate_1f5c7f679d6f0c19f9c0c73ad815ea85 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/admin/tablesort-indicator.html.twig"));

        // line 13
        $context["classes"] = ["tablesort", ("tablesort--" . $this->sandbox->ensureToStringAllowed(        // line 15
($context["style"] ?? null), 15, $this->source))];
        // line 18
        yield "<span";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        yield ">
  ";
        // line 19
        if (CoreExtension::inFilter(($context["style"] ?? null), ["asc", "desc"])) {
            // line 20
            yield "    <span class=\"visually-hidden\">
      ";
            // line 21
            if ((($context["style"] ?? null) == "asc")) {
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort ascending"));
                yield "
      ";
            } else {
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sort descending"));
                yield "
      ";
            }
            // line 26
            yield "    </span>
  ";
        }
        // line 28
        yield "</span>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["style", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/tablesort-indicator.html.twig";
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
        return array (  72 => 28,  68 => 26,  63 => 24,  58 => 22,  56 => 21,  53 => 20,  51 => 19,  46 => 18,  44 => 15,  43 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for displaying a tablesort indicator.
 *
 * Available variables:
 * - style: Either 'asc' or 'desc', indicating the sorting direction.
 *
 * @todo Remove after https://www.drupal.org/node/1973418 is in.
 */
#}
{%
  set classes = [
    'tablesort',
    'tablesort--' ~ style,
  ]
%}
<span{{ attributes.addClass(classes) }}>
  {% if style in ['asc', 'desc'] %}
    <span class=\"visually-hidden\">
      {% if style == 'asc' -%}
        {{ 'Sort ascending'|t }}
      {% else -%}
        {{ 'Sort descending'|t }}
      {% endif %}
    </span>
  {% endif %}
</span>
", "core/themes/claro/templates/admin/tablesort-indicator.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/admin/tablesort-indicator.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 19);
        static $filters = array("escape" => 18, "t" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
