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

/* core/themes/claro/templates/datetime-wrapper.html.twig */
class __TwigTemplate_3a9d6eb6ff262f51e4fcbd99b2f031b7 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/datetime-wrapper.html.twig"));

        // line 10
        $context["title_classes"] = ["form-item__label", ((        // line 12
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 13
($context["required"] ?? null)) ? ("form-required") : ("")), ((        // line 14
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 17
        echo "<div class=\"form-item form-datetime-wrapper\">
";
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</h4>
";
        }
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 21, $this->source), "html", null, true);
        echo "
";
        // line 22
        if (($context["errors"] ?? null)) {
            // line 23
            echo "  <div class=\"form-item__error-message\">
    ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 24, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 27
        if (($context["description"] ?? null)) {
            // line 28
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", ["form-item__description"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">
    ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 29, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 32
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["required", "errors", "title", "title_attributes", "content", "description", "description_attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/datetime-wrapper.html.twig";
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
        return array (  88 => 32,  82 => 29,  77 => 28,  75 => 27,  69 => 24,  66 => 23,  64 => 22,  60 => 21,  52 => 19,  50 => 18,  47 => 17,  45 => 14,  44 => 13,  43 => 12,  42 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override of a datetime form wrapper.
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set title_classes = [
    'form-item__label',
    required ? 'js-form-required',
    required ? 'form-required',
    errors ? 'has-error',
  ]
%}
<div class=\"form-item form-datetime-wrapper\">
{% if title %}
  <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>
{% endif %}
{{ content }}
{% if errors %}
  <div class=\"form-item__error-message\">
    {{ errors }}
  </div>
{% endif %}
{% if description %}
  <div{{ description_attributes.addClass('form-item__description') }}>
    {{ description }}
  </div>
{% endif %}
</div>
", "core/themes/claro/templates/datetime-wrapper.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/core/themes/claro/templates/datetime-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 18);
        static $filters = array("escape" => 19);
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
