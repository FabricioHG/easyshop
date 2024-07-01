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

/* @belgrade/layout/region.html.twig */
class __TwigTemplate_5ac6abcb677cfa0fb34158c2316da444 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@belgrade/layout/region.html.twig"));

        // line 15
        echo "
";
        // line 17
        $context["classes"] = ["region", ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["region"] ?? null), 19, $this->source)))];
        // line 22
        echo "
";
        // line 23
        $context["container"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region_container"] ?? null), 23, $this->source));
        // line 24
        echo "
";
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            echo "  <section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">
    ";
            // line 27
            if (($context["region_container"] ?? null)) {
                // line 28
                echo "    <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 28, $this->source), "html", null, true);
                echo "\">
      ";
            }
            // line 30
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 33
            echo "      ";
            if (($context["region_container"] ?? null)) {
                // line 34
                echo "    </div>
    ";
            }
            // line 36
            echo "  </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "region_container", "content", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
        echo "
        ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@belgrade/layout/region.html.twig";
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
        return array (  99 => 31,  92 => 30,  82 => 36,  78 => 34,  75 => 33,  72 => 30,  66 => 28,  64 => 27,  59 => 26,  57 => 25,  54 => 24,  52 => 23,  49 => 22,  47 => 19,  46 => 17,  43 => 15,);
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
  'region',
  'region-' ~ region|clean_class,
]
%}

{% set container = region_container|clean_class %}

{% if content %}
  <section{{ attributes.addClass(classes) }}>
    {% if (region_container) %}
    <div class=\"{{ container }}\">
      {% endif %}
        {% block content %}
          {{ content }}
        {% endblock %}
      {% if (region_container) %}
    </div>
    {% endif %}
  </section>
{% endif %}
", "@belgrade/layout/region.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/layout/region.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 25, "block" => 30);
        static $filters = array("clean_class" => 19, "escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
