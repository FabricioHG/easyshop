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

/* themes/contrib/belgrade/templates/form/form-element-label.html.twig */
class __TwigTemplate_c3757f5d071ebfff9434e980493583f2 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/form/form-element-label.html.twig"));

        // line 16
        $context["classes"] = ["form-label", (((        // line 18
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), (((        // line 19
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), ((        // line 20
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 21
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 24
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 25
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            echo "</label>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_display", "required", "title", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/form/form-element-label.html.twig";
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
        return array (  50 => 25,  48 => 24,  46 => 21,  45 => 20,  44 => 19,  43 => 18,  42 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element label.
 *
 * Available variables:
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - required: An indicator for whether the associated form element is required.
 * - attributes: A list of HTML attributes for the label.
 *
 * @see template_preprocess_form_element_label()
 */
#}
{%
  set classes = [
    'form-label',
    title_display == 'after' ? 'option',
    title_display == 'invisible' ? 'visually-hidden',
    required ? 'js-form-required',
    required ? 'form-required',
  ]
%}
{% if title is not empty or required -%}
  <label{{ attributes.addClass(classes) }}>{{ title }}</label>
{%- endif %}
", "themes/contrib/belgrade/templates/form/form-element-label.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 24);
        static $filters = array("escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
