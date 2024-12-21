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

/* modules/contrib/webform/templates/webform-message.html.twig */
class __TwigTemplate_8d8f4525af0e3a7025edbe04fb168453 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-message.html.twig"));

        // line 20
        $context["classes"] = [((        // line 21
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), ((        // line 22
($context["has_parent"] ?? null)) ? ("form-wrapper") : (""))];
        // line 25
        if ( !($context["closed"] ?? null)) {
            // line 26
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["has_parent", "closed", "attributes", "message"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/webform/templates/webform-message.html.twig";
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
        return array (  53 => 26,  51 => 25,  49 => 22,  48 => 21,  47 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of a Webform message container.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - message: The rendered status_messages elements.
 * - has_parent: A flag to indicate that the container has one or more parent
 *    containers.
 * - closed: A flag to indicate that the message has been been closed and should
 *    not be displayed.
 *
 * @see template_preprocess_webform_message()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    has_parent ? 'js-form-wrapper',
    has_parent ? 'form-wrapper',
  ]
%}
{% if not closed %}
  <div{{ attributes.addClass(classes) }}>{{ message }}</div>
{% endif %}
", "modules/contrib/webform/templates/webform-message.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/contrib/webform/templates/webform-message.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 25);
        static $filters = array("escape" => 26);
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
