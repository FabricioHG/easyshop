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

/* themes/contrib/belgrade/templates/form/details.html.twig */
class __TwigTemplate_3a04076e8741b061e47ae99f14958391 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/form/details.html.twig"));

        // line 18
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["card", "mb-3"]], "method", false, false, true, 18), "html", null, true);
        yield ">
  ";
        // line 20
        $context["summary_classes"] = ["card-header", ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 23
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 26
        if (($context["title"] ?? null)) {
            // line 27
            yield "<summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</summary>";
        }
        // line 30
        yield "<div class=\"card-body\">
    ";
        // line 31
        if (($context["errors"] ?? null)) {
            // line 32
            yield "      <div class=\"alert alert-danger\">
        ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 37
        if (($context["description"] ?? null)) {
            // line 38
            yield "<small class=\"details-description text-muted\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</small>";
        }
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
    ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        yield "
  </div>

</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "title", "summary_attributes", "errors", "description", "children", "value"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/form/details.html.twig";
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
        return array (  90 => 42,  86 => 41,  81 => 38,  79 => 37,  73 => 33,  70 => 32,  68 => 31,  65 => 30,  58 => 27,  56 => 26,  54 => 23,  53 => 22,  52 => 20,  47 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - summary_attributes: A list of HTML attributes for the summary element.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
<details{{ attributes.addClass(['card', 'mb-3']) }}>
  {%
    set summary_classes = [
      'card-header',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {%- if title -%}
    <summary{{ summary_attributes.addClass(summary_classes) }}>{{ title }}</summary>
  {%- endif -%}

  <div class=\"card-body\">
    {% if errors %}
      <div class=\"alert alert-danger\">
        {{ errors }}
      </div>
    {% endif %}

    {%- if description -%}
      <small class=\"details-description text-muted\">{{ description }}</small>
    {%- endif -%}

    {{ children }}
    {{ value }}
  </div>

</details>
", "themes/contrib/belgrade/templates/form/details.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 26);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
