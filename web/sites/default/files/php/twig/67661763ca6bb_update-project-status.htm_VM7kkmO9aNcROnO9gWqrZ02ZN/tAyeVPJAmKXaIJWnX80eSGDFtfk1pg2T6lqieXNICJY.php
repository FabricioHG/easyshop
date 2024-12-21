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

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_acf3a03847cba840244233fee689e893 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/update/templates/update-project-status.html.twig"));

        // line 31
        $context["status_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["project"] ?? null), "status", [], "any", false, false, true, 32) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["project"] ?? null), "status", [], "any", false, false, true, 33) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["project"] ?? null), "status", [], "any", false, false, true, 34) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["project"] ?? null), "status", [], "any", false, false, true, 35) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["project"] ?? null), "status", [], "any", false, false, true, 36) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 39
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "attributes", [], "any", false, false, true, 39), "addClass", ["project-update__status", ($context["status_classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
        yield ">";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 40)) {
            // line 41
            yield "<span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 41), "html", null, true);
            yield "</span>";
        } else {
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "reason", [], "any", false, false, true, 43), "html", null, true);
        }
        // line 45
        yield "  <span class=\"project-update__status-icon\">
    ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "any", false, false, true, 46), "html", null, true);
        yield "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 51
        if (($context["url"] ?? null)) {
            // line 52
            yield "<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</a>";
        } else {
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        // line 56
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["existing_version"] ?? null), "html", null, true);
        yield "
  ";
        // line 57
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 58
            yield "    <span class=\"project-update__version-date\">(";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["datestamp"] ?? null), "html", null, true);
            yield ")</span>
  ";
        }
        // line 60
        yield "</div>

";
        // line 62
        if (($context["versions"] ?? null)) {
            // line 63
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 64
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["version"], "html", null, true);
                yield "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        yield "
";
        // line 69
        $context["extra_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["project"] ?? null), "status", [], "any", false, false, true, 70) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["project"] ?? null), "status", [], "any", false, false, true, 71) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["project"] ?? null), "status", [], "any", false, false, true, 72) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 75
        yield "<div class=\"project-updates__details\">
  ";
        // line 76
        if (($context["extras"] ?? null)) {
            // line 77
            yield "    <div class=\"extra\">
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 79
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["extra_classes"] ?? null)], "method", false, false, true, 79), "html", null, true);
                yield ">
          ";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "label", [], "any", false, false, true, 80), "html", null, true);
                yield ": ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "data", [], "any", false, false, true, 80), "html", null, true);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extra'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "    </div>
  ";
        }
        // line 85
        yield "  ";
        $context["includes"] = Twig\Extension\CoreExtension::join(($context["includes"] ?? null), ", ");
        // line 86
        yield "  ";
        if (($context["disabled"] ?? null)) {
            // line 87
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Includes:"));
            yield "
    <ul>
      <li>
        ";
            // line 90
            yield t("Enabled: %includes", array("%includes" =>             // line 91
($context["includes"] ?? null), ));
            // line 93
            yield "      </li>
      <li>
        ";
            // line 95
            $context["disabled"] = Twig\Extension\CoreExtension::join(($context["disabled"] ?? null), ", ");
            // line 96
            yield "        ";
            yield t("Disabled: %disabled", array("%disabled" =>             // line 97
($context["disabled"] ?? null), ));
            // line 99
            yield "      </li>
    </ul>
  ";
        } else {
            // line 102
            yield "    ";
            yield t("Includes: %includes", array("%includes" =>             // line 103
($context["includes"] ?? null), ));
            // line 105
            yield "  ";
        }
        // line 106
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["project", "status", "url", "title", "existing_version", "install_type", "datestamp", "versions", "extras", "disabled"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/update/templates/update-project-status.html.twig";
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
        return array (  202 => 106,  199 => 105,  197 => 103,  195 => 102,  190 => 99,  188 => 97,  186 => 96,  184 => 95,  180 => 93,  178 => 91,  177 => 90,  170 => 87,  167 => 86,  164 => 85,  160 => 83,  149 => 80,  144 => 79,  140 => 78,  137 => 77,  135 => 76,  132 => 75,  130 => 72,  129 => 71,  128 => 70,  127 => 69,  124 => 67,  114 => 64,  109 => 63,  107 => 62,  103 => 60,  97 => 58,  95 => 57,  90 => 56,  87 => 54,  80 => 52,  78 => 51,  71 => 46,  68 => 45,  65 => 43,  60 => 41,  58 => 40,  54 => 39,  52 => 36,  51 => 35,  50 => 34,  49 => 33,  48 => 32,  47 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the project status report.
 *
 * Available variables:
 * - title: The project title.
 * - url: The project URL.
 * - status: The project status.
 *   - label: The project status label.
 *   - attributes: HTML attributes for the project status.
 *   - reason: The reason you should update the project.
 *   - icon: The project status version indicator icon.
 * - existing_version: The version of the installed project.
 * - versions: The available versions of the project.
 * - install_type: The type of project (e.g., dev).
 * - datestamp: The date/time of a project version's release.
 * - extras: HTML attributes and additional information about the project.
 *   - attributes: HTML attributes for the extra item.
 *   - label: The label for an extra item.
 *   - data: The data about an extra item.
 * - includes: The projects within the project.
 * - disabled: The currently disabled projects in the project.
 *
 * @see template_preprocess_update_project_status()
 *
 * @ingroup themeable
 */
#}
{%
  set status_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-update__status--security-error',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-update__status--revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-update__status--not-supported',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_CURRENT') ? 'project-update__status--not-current',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::CURRENT') ? 'project-update__status--current',
  ]
%}
<div{{ status.attributes.addClass('project-update__status', status_classes) }}>
  {%- if status.label -%}
    <span>{{ status.label }}</span>
  {%- else -%}
    {{ status.reason }}
  {%- endif %}
  <span class=\"project-update__status-icon\">
    {{ status.icon }}
  </span>
</div>

<div class=\"project-update__title\">
  {%- if url -%}
    <a href=\"{{ url }}\">{{ title }}</a>
  {%- else -%}
    {{ title }}
  {%- endif %}
  {{ existing_version }}
  {% if install_type == 'dev' and datestamp %}
    <span class=\"project-update__version-date\">({{ datestamp }})</span>
  {% endif %}
</div>

{% if versions %}
  {% for version in versions %}
    {{ version }}
  {% endfor %}
{% endif %}

{%
  set extra_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-not-secure',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-not-supported',
  ]
%}
<div class=\"project-updates__details\">
  {% if extras %}
    <div class=\"extra\">
      {% for extra in extras %}
        <div{{ extra.attributes.addClass(extra_classes) }}>
          {{ extra.label }}: {{ extra.data }}
        </div>
      {% endfor %}
    </div>
  {% endif %}
  {% set includes = includes|join(', ') %}
  {% if disabled %}
    {{ 'Includes:'|t }}
    <ul>
      <li>
        {% trans %}
          Enabled: {{ includes|placeholder }}
        {% endtrans %}
      </li>
      <li>
        {% set disabled = disabled|join(', ') %}
        {% trans %}
          Disabled: {{ disabled|placeholder }}
        {% endtrans %}
      </li>
    </ul>
  {% else %}
    {% trans %}
      Includes: {{ includes|placeholder }}
    {% endtrans %}
  {% endif %}
</div>
", "core/modules/update/templates/update-project-status.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/update/templates/update-project-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 40, "for" => 63, "trans" => 90);
        static $filters = array("escape" => 39, "join" => 85, "t" => 87, "placeholder" => 91);
        static $functions = array("constant" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant'],
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
