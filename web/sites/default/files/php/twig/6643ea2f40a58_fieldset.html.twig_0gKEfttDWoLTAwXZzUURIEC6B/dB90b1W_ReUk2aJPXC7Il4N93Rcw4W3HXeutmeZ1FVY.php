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

/* themes/contrib/belgrade/templates/form/fieldset.html.twig */
class __TwigTemplate_48ff4a871acb2092c54de88025d1ae8c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/form/fieldset.html.twig"));

        // line 25
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper", "my-3"];
        // line 33
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 35
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 37
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 38
($context["required"] ?? null)) ? ("form-required") : ("")), "border-bottom", "d-block", "py-2"];
        // line 44
        echo "  ";
        // line 45
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">
    <span";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 46), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 49
        if (($context["errors"] ?? null)) {
            // line 50
            echo "      <div>
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 51, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 55
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 55, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 57
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 57, $this->source), "html", null, true);
        echo "
    ";
        // line 58
        if (($context["suffix"] ?? null)) {
            // line 59
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 59, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 61
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 61)) {
            // line 62
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 62), "addClass", ["description"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 64
        echo "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend", "legend_span", "errors", "prefix", "children", "suffix", "description"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/form/fieldset.html.twig";
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
        return array (  112 => 64,  104 => 62,  101 => 61,  95 => 59,  93 => 58,  88 => 57,  82 => 55,  79 => 54,  73 => 51,  70 => 50,  68 => 49,  60 => 46,  55 => 45,  53 => 44,  51 => 38,  50 => 37,  49 => 35,  44 => 33,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a fieldset element and its children.
 *
 * Available variables:
 * - attributes: HTML attributes for the <fieldset> element.
 * - errors: (optional) Any errors for this <fieldset> element, may not be set.
 * - required: Boolean indicating whether the <fieldeset> element is required.
 * - legend: The <legend> element containing the following properties:
 *   - title: Title of the <fieldset>, intended for use as the text
       of the <legend>.
 *   - attributes: HTML attributes to apply to the <legend> element.
 * - description: The description element containing the following properties:
 *   - content: The description content of the <fieldset>.
 *   - attributes: HTML attributes to apply to the description container.
 * - children: The rendered child elements of the <fieldset>.
 * - prefix: The content to add before the <fieldset> children.
 * - suffix: The content to add after the <fieldset> children.
 *
 * @see template_preprocess_fieldset()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
    'my-3'
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
      'border-bottom',
      'd-block',
      'py-2',
    ]
  %}
  {#  Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if errors %}
      <div>
        {{ errors }}
      </div>
    {% endif %}
    {% if prefix %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
  </div>
</fieldset>
", "themes/contrib/belgrade/templates/form/fieldset.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/themes/contrib/belgrade/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 49);
        static $filters = array("escape" => 33);
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
