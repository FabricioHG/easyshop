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

/* themes/contrib/belgrade/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_067ca68aa274bf139a600e0d04003175 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/navigation/menu-local-tasks.html.twig"));

        // line 7
        if (($context["primary"] ?? null)) {
            // line 8
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
  <ul class=\"nav nav-tabs mb-3\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 9, $this->source), "html", null, true);
            echo "</ul>
";
        }
        // line 11
        if (($context["secondary"] ?? null)) {
            // line 12
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"nav nav-pills\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 13, $this->source), "html", null, true);
            echo "</ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["primary", "secondary"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/navigation/menu-local-tasks.html.twig";
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
        return array (  61 => 13,  56 => 12,  54 => 11,  49 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template primary and secondary local tasks.
 */
#}
{% if primary %}
  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
  <ul class=\"nav nav-tabs mb-3\">{{ primary }}</ul>
{% endif %}
{% if secondary %}
  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
  <ul class=\"nav nav-pills\">{{ secondary }}</ul>
{% endif %}
", "themes/contrib/belgrade/templates/navigation/menu-local-tasks.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/themes/contrib/belgrade/templates/navigation/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("t" => 8, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
