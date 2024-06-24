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

/* themes/contrib/belgrade/templates/layout/region--top-bar.html.twig */
class __TwigTemplate_688c671bab01b3b7942104a46245f8e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "@belgrade/layout/region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/layout/region--top-bar.html.twig"));

        // line 15
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/layout/region--top-bar.html.twig", 15)->unwrap();
        // line 19
        twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["role", "navigation"], "method", false, false, true, 19);
        // line 17
        $this->parent = $this->loadTemplate("@belgrade/layout/region.html.twig", "themes/contrib/belgrade/templates/layout/region--top-bar.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "navigation_toggle_text", "content"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "  <div class=\"d-flex align-items-center justify-content-between fw-light\">
    <a class=\"navigation-toggle me-auto cursor-pointer\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#navigationRegion\" aria-controls=\"navigationRegion\">
      ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["list", 32, 32], 24, $context, $this->getSourceContext()));
        echo "
      ";
        // line 25
        if (($context["navigation_toggle_text"] ?? null)) {
            // line 26
            echo "        <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_toggle_text"] ?? null), 26, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 28
        echo "    </a>
    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 29, $this->source), "html", null, true);
        echo "
  </div>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/layout/region--top-bar.html.twig";
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
        return array (  86 => 29,  83 => 28,  77 => 26,  75 => 25,  71 => 24,  67 => 22,  60 => 21,  51 => 17,  49 => 19,  47 => 15,  37 => 17,);
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
{% import \"@belgrade/macros.twig\" as svg %}

{% extends \"@belgrade/layout/region.html.twig\" %}

{% do attributes.setAttribute('role', 'navigation') %}

{% block content %}
  <div class=\"d-flex align-items-center justify-content-between fw-light\">
    <a class=\"navigation-toggle me-auto cursor-pointer\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#navigationRegion\" aria-controls=\"navigationRegion\">
      {{ svg.getIcon('list', 32, 32) }}
      {% if navigation_toggle_text %}
        <span>{{- navigation_toggle_text -}}</span>
      {% endif %}
    </a>
    {{ content }}
  </div>
{% endblock %}

", "themes/contrib/belgrade/templates/layout/region--top-bar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/layout/region--top-bar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 15, "do" => 19, "if" => 25);
        static $filters = array("escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'do', 'if'],
                ['escape'],
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
