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

/* core/themes/claro/templates/admin/admin-block-content.html.twig */
class __TwigTemplate_ea9b136c3e6032509961ddfc7aa96d7f extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/admin/admin-block-content.html.twig"));

        // line 21
        $context["item_classes"] = ["admin-item"];
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            yield "  <dl";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-list"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            yield ">
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                yield ">
        <dt class=\"admin-item__title\">";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                yield "</dt>
        ";
                // line 30
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 30)) {
                    // line 31
                    yield "          <dd class=\"admin-item__description\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    yield "</dd>
        ";
                }
                // line 33
                yield "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "  </dl>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/admin/admin-block-content.html.twig";
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
        return array (  84 => 35,  77 => 33,  71 => 31,  69 => 30,  65 => 29,  60 => 28,  56 => 27,  51 => 26,  49 => 25,  47 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation for the content of an administrative block.
 *
 * Available variables:
 * - content: List of administrative menu items. Each menu item contains:
 *   - link: Link to the admin section.
 *   - title: Short name of the section.
 *   - description: Description of the administrative menu item.
 *   - url: URI to the admin section.
 *   - options: URL options. See \\Drupal\\Core\\Url::fromUri() for details.
 * - attributes: HTML attributes to be added to the element.
 * - compact: Boolean indicating whether compact mode is turned on or not.
 *
 * @see template_preprocess_admin_block_content()
 * @see claro_preprocess_admin_block_content()
 */
#}
{%
  set item_classes = [
    'admin-item',
  ]
%}
{% if content %}
  <dl{{ attributes.addClass('admin-list') }}>
    {% for item in content %}
      <div{{ create_attribute({class: item_classes}) }}>
        <dt class=\"admin-item__title\">{{ item.link }}</dt>
        {% if item.description %}
          <dd class=\"admin-item__description\">{{ item.description }}</dd>
        {% endif %}
      </div>
    {% endfor %}
  </dl>
{% endif %}
", "core/themes/claro/templates/admin/admin-block-content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/themes/claro/templates/admin/admin-block-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 25, "for" => 27);
        static $filters = array("escape" => 26);
        static $functions = array("create_attribute" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute'],
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
