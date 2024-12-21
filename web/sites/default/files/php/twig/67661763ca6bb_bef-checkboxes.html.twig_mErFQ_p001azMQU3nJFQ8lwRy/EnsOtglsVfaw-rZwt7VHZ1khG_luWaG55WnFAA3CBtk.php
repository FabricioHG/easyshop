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

/* modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig */
class __TwigTemplate_70ab84694877161d0be5903cd8da9b53 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig"));

        // line 13
        $context["classes"] = ["form-checkboxes", "bef-checkboxes", ((        // line 16
($context["is_nested"] ?? null)) ? ("bef-nested") : ("")), ((        // line 17
($context["show_select_all_none"] ?? null)) ? ("bef-select-all-none") : ("")), ((        // line 18
($context["show_select_all_none_nested"] ?? null)) ? ("bef-select-all-none-nested") : ("")), ((        // line 19
($context["display_inline"] ?? null)) ? ("form--inline") : (""))];
        // line 21
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 21), "html", null, true);
        yield ">
  ";
        // line 22
        $context["current_nesting_level"] = 0;
        // line 23
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["children"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            yield "    ";
            $context["item"] = CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), $context["child"], [], "any", false, false, true, 24);
            // line 25
            yield "    ";
            if (($context["is_nested"] ?? null)) {
                // line 26
                yield "      ";
                $context["new_nesting_level"] = CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 26);
                // line 27
                yield "      ";
                yield from $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", 27)->unwrap()->yield($context);
                // line 28
                yield "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 29
                yield "    ";
            } else {
                // line 30
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 32
            yield "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_nested", "show_select_all_none", "show_select_all_none_nested", "display_inline", "wrapper_attributes", "children", "element", "depth"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig";
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
        return array (  116 => 33,  102 => 32,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  60 => 23,  58 => 22,  53 => 21,  51 => 19,  50 => 18,  49 => 17,  48 => 16,  47 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Themes Views' default multi-select element as a set of checkboxes.

  Available variables:
    - wrapper_attributes: attributes for the wrapper element.
    - element: The collection of checkboxes.
    - children: An array of keys for the children of element.
    - is_nested: TRUE if this is to be rendered as a nested list.
    - depth: If is_nested is TRUE, this holds an array in the form of
      child_id => nesting_level which defines the depth a given element should
      appear in the nested list.
#}
{% set classes = [
  'form-checkboxes',
  'bef-checkboxes',
  is_nested ? 'bef-nested',
  show_select_all_none ? 'bef-select-all-none',
  show_select_all_none_nested ? 'bef-select-all-none-nested',
  display_inline ? 'form--inline'
] %}
<div{{ wrapper_attributes.addClass(classes) }}>
  {% set current_nesting_level = 0 %}
  {% for child in children %}
    {% set item = attribute(element, child) %}
    {% if is_nested %}
      {% set new_nesting_level = attribute(depth, child) %}
      {% include '@better_exposed_filters/bef-nested-elements.html.twig' %}
      {% set current_nesting_level = new_nesting_level %}
    {% else %}
      {{ item }}
    {% endif %}
  {% endfor %}
</div>
", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 23, "if" => 25, "include" => 27);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
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
