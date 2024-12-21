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

/* themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig */
class __TwigTemplate_4b7ac0d825b76d8ed3e26e7ef1e7468d extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 29
        return "@belgrade/block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig"));

        // line 31
        CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["col-sm-6", "col-md-3", "mb-3"]], "method", false, false, true, 31);
        // line 29
        $this->parent = $this->loadTemplate("@belgrade/block/block.html.twig", "themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "directory"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        yield "  <a class=\"footer--logo\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        yield "\" rel=\"home\">
    ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, (($context["directory"] ?? null) . "//images/logo-graphic.svg"), true));
        yield "
  </a>
  <div>
    ";
        // line 38
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "
  </div>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig";
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
        return array (  86 => 38,  80 => 35,  73 => 34,  63 => 33,  54 => 29,  52 => 31,  42 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}

{% extends \"@belgrade/block/block.html.twig\" %}

{% do attributes.addClass(['col-sm-6', 'col-md-3', 'mb-3']) %}

{% block content %}
  <a class=\"footer--logo\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
    {{ source(directory ~ '//images/logo-graphic.svg', ignore_missing = true) }}
  </a>
  <div>
    {{ parent() }}
  </div>
{% endblock %}
", "themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/block/block--system-powered-by-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 29, "do" => 31);
        static $filters = array("t" => 34);
        static $functions = array("path" => 34, "source" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'do'],
                ['t'],
                ['path', 'source'],
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
