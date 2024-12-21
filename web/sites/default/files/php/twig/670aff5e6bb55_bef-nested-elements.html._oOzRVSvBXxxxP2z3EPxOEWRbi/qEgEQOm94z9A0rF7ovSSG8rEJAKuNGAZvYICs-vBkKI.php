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

/* @better_exposed_filters/bef-nested-elements.html.twig */
class __TwigTemplate_78f401b2e6b640282309954fbbe2118b extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@better_exposed_filters/bef-nested-elements.html.twig"));

        // line 15
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "  ";
            $context["delta"] = abs((($context["current_nesting_level"] ?? null) - ($context["new_nesting_level"] ?? null)));
            // line 17
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, true, 17)) {
                // line 18
                yield "    <ul>
  ";
            } else {
                // line 20
                yield "    ";
                if (($context["delta"] ?? null)) {
                    // line 21
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["delta"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 22
                        yield "        ";
                        if ((($context["new_nesting_level"] ?? null) > ($context["current_nesting_level"] ?? null))) {
                            // line 23
                            yield "          <ul>
        ";
                        } else {
                            // line 25
                            yield "          </ul>
        ";
                        }
                        // line 27
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    yield "    ";
                }
                // line 29
                yield "  ";
            }
            // line 30
            yield "
  <li>";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 31, $this->source), "html", null, true);
            yield "

  ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, true, 33)) {
                // line 34
                yield "    ";
                // line 35
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(($context["new_nesting_level"] ?? null), 0));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    yield "      </li></ul>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["current_nesting_level", "new_nesting_level", "loop", "item"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@better_exposed_filters/bef-nested-elements.html.twig";
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
        return array (  119 => 15,  114 => 38,  107 => 36,  102 => 35,  100 => 34,  98 => 33,  93 => 31,  90 => 30,  87 => 29,  84 => 28,  78 => 27,  74 => 25,  70 => 23,  67 => 22,  62 => 21,  59 => 20,  55 => 18,  52 => 17,  49 => 16,  47 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Themes hierarchical taxonomy terms as nested <ul> elements.

  This template is intended to be called from within another template to provide
  the \"scaffolding\" of nested lists while the calling template provides the
  actual filter element via the 'item' variable.

  Available variables:
    - current_nesting_level: the nesting level of the most recently printe item.
    - new_nesting_level: the nesting level of the item to print.
    - item: The item to print.
    - loop: The loop variable from the iterator that calls this template.
      Requires the loop.first and loop.last elements.
#}
{% apply spaceless %}
  {% set delta = (current_nesting_level - new_nesting_level) | abs %}
  {% if loop.first %}
    <ul>
  {% else %}
    {% if delta %}
      {% for i in 1..delta %}
        {% if new_nesting_level > current_nesting_level  %}
          <ul>
        {% else %}
          </ul>
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endif %}

  <li>{{ item }}

  {% if loop.last %}
    {# Close any remaining <li> tags #}
    {% for i in new_nesting_level..0 %}
      </li></ul>
    {% endfor %}
  {% endif %}
{% endapply %}
", "@better_exposed_filters/bef-nested-elements.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/contrib/better_exposed_filters/templates/bef-nested-elements.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 15, "set" => 16, "if" => 17, "for" => 21);
        static $filters = array("abs" => 16, "escape" => 31, "spaceless" => 15);
        static $functions = array("range" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'for'],
                ['abs', 'escape', 'spaceless'],
                ['range'],
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
