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

/* core/themes/claro/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_2dacbaf22c2e96d9900c0ab9d139ec05 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/views/views-mini-pager.html.twig"));

        // line 15
        $context["pager_action_classes"] = ["pager__link", "pager__link--mini", "pager__link--action-link"];
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 21))) {
            // line 22
            yield "  <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["pager"], "method", false, false, true, 22), "setAttribute", ["role", "navigation"], "method", false, false, true, 22), "setAttribute", ["aria-labelledby", ($context["heading_id"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            yield ">
    <";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 23, $this->source), "html", null, true);
            yield " id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 23, $this->source), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 23, $this->source), "html", null, true);
            yield ">
    <ul";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["pager__items", "js-pager__items"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            yield ">
      ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 25)) {
                // line 26
                yield "        ";
                $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 27
                    yield "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a";
                    // line 28
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "addClass", [($context["pager_action_classes"] ?? null)], "method", false, false, true, 28), "setAttribute", ["title", t("Go to previous page")], "method", false, false, true, 28), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 28), "href", [], "any", false, false, true, 28)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 29
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
                // line 33
                yield "      ";
            }
            // line 34
            yield "
      ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 35)) {
                // line 36
                yield "        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            ";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                yield "
          </span>
          ";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                yield "
        </li>
      ";
            }
            // line 43
            yield "
      ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 44)) {
                // line 45
                yield "        ";
                $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 46
                    yield "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a";
                    // line 47
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), "addClass", [($context["pager_action_classes"] ?? null)], "method", false, false, true, 47), "setAttribute", ["title", t("Go to next page")], "method", false, false, true, 47), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 47), "href", [], "any", false, false, true, 47)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
                // line 52
                yield "      ";
            }
            // line 53
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "attributes", "heading_id", "pagination_heading_level", "content_attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/views/views-mini-pager.html.twig";
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
        return array (  139 => 53,  136 => 52,  134 => 45,  126 => 48,  122 => 47,  119 => 46,  116 => 45,  114 => 44,  111 => 43,  105 => 40,  100 => 38,  96 => 36,  94 => 35,  91 => 34,  88 => 33,  86 => 26,  78 => 29,  74 => 28,  71 => 27,  68 => 26,  66 => 25,  62 => 24,  52 => 23,  47 => 22,  45 => 21,  43 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a views mini-pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - pagination_heading_level: The heading level to use for the pager.
 * - items: List of pager items.
 *
 * @see template_preprocess_views_mini_pager()
 */
#}
{%
  set pager_action_classes = [
    'pager__link',
    'pager__link--mini',
    'pager__link--action-link'
  ]
%}
{% if items.previous or items.next %}
  <nav{{ attributes.addClass('pager').setAttribute('role', 'navigation').setAttribute('aria-labelledby', heading_id) }}>
    <{{ pagination_heading_level }} id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</{{ pagination_heading_level }}>
    <ul{{ content_attributes.addClass('pager__items', 'js-pager__items') }}>
      {% if items.previous %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a{{ items.previous.attributes.addClass(pager_action_classes).setAttribute('title', 'Go to previous page'|t).setAttribute('href', items.previous.href) }}>
              <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            </a>
          </li>
        {% endapply %}
      {% endif %}

      {% if items.current %}
        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            {{ 'Current page'|t }}
          </span>
          {{ items.current }}
        </li>
      {% endif %}

      {% if items.next %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a{{ items.next.attributes.addClass(pager_action_classes).setAttribute('title', 'Go to next page'|t).setAttribute('href', items.next.href) }}>
              <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            </a>
          </li>
        {% endapply %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/claro/templates/views/views-mini-pager.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 21, "apply" => 26);
        static $filters = array("escape" => 22, "t" => 23, "spaceless" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['escape', 't', 'spaceless'],
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
