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

/* themes/custom/ws_ecommerce/templates/page.html.twig */
class __TwigTemplate_8879dc1fbc728c7ee5472cd82417d935 extends Template
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
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/ws_ecommerce/templates/page.html.twig"));

        // line 45
        yield "<div class=\"layout-container font-smoothing\">

  ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        yield "

  ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 49)) {
            // line 50
            yield "    <div class=\"piso_slideshow container-fluid\">
      ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 54
        yield "
  <header role=\"banner\">
    ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        yield "
  </header>

  ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        yield "

  ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        yield "

  ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        yield "

  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 90
        yield "
  ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 91)) {
            // line 92
            yield "    <div class=\"piso_1 piso_page container-fluid\">
      ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 96
        yield "
  ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 97)) {
            // line 98
            yield "    <div class=\"piso_2 piso_page container-fluid\">
      ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 102
        yield "
  ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 103)) {
            // line 104
            yield "    <div class=\"piso_3 piso_page container-fluid\">
      ";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 108
        yield "
  ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 109)) {
            // line 110
            yield "    <div class=\"piso_4 piso_page container-fluid\">
      ";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 114
        yield "
  ";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 115)) {
            // line 116
            yield "    <div class=\"piso_5 piso_page container-fluid\">
      ";
            // line 117
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 120
        yield "
  ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_6", [], "any", false, false, true, 121)) {
            // line 122
            yield "    <div class=\"piso_6 piso_page container-fluid\">
      ";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_6", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 126
        yield "
  ";
        // line 127
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_7", [], "any", false, false, true, 127)) {
            // line 128
            yield "    <div class=\"piso_7 piso_page container-fluid\">
      ";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "piso_7", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 132
        yield "
  ";
        // line 133
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 140
        yield "
  ";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        yield "

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "main_container", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 66
        yield "    ";
        if (($context["main_container"] ?? null)) {
            // line 67
            yield "      <div class=\"main-container ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_container"] ?? null), 67, $this->source), "html", null, true);
            yield "\">
    ";
        }
        // line 69
        yield "
      <main role=\"main\" ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 70, $this->source), "html", null, true);
        yield ">
        <a id=\"main-content\" tabindex=\"-1\" aria-hidden=\"true\"></a>

        <div class=\"row\">
          ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        yield "

          ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76)) {
            // line 77
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 79
        yield "
          ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80)) {
            // line 81
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 83
        yield "        </div>
      </main>

    ";
        // line 86
        if (($context["main_container"] ?? null)) {
            // line 87
            yield "      </div>
    ";
        }
        // line 89
        yield "  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 134
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 134)) {
            // line 135
            yield "      <footer role=\"contentinfo\">
        ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            yield "
      </footer>
    ";
        }
        // line 139
        yield "  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ws_ecommerce/templates/page.html.twig";
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
        return array (  309 => 139,  303 => 136,  300 => 135,  297 => 134,  287 => 133,  279 => 89,  275 => 87,  273 => 86,  268 => 83,  262 => 81,  260 => 80,  257 => 79,  251 => 77,  249 => 76,  244 => 74,  237 => 70,  234 => 69,  228 => 67,  225 => 66,  215 => 65,  202 => 141,  199 => 140,  197 => 133,  194 => 132,  188 => 129,  185 => 128,  183 => 127,  180 => 126,  174 => 123,  171 => 122,  169 => 121,  166 => 120,  160 => 117,  157 => 116,  155 => 115,  152 => 114,  146 => 111,  143 => 110,  141 => 109,  138 => 108,  132 => 105,  129 => 104,  127 => 103,  124 => 102,  118 => 99,  115 => 98,  113 => 97,  110 => 96,  104 => 93,  101 => 92,  99 => 91,  96 => 90,  94 => 65,  89 => 63,  84 => 61,  79 => 59,  73 => 56,  69 => 54,  63 => 51,  60 => 50,  58 => 49,  53 => 47,  49 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container font-smoothing\">

  {{ page.top_bar }}

  {% if page.slideshow %}
    <div class=\"piso_slideshow container-fluid\">
      {{ page.slideshow }}
    </div>
  {% endif %}

  <header role=\"banner\">
    {{ page.header }}
  </header>

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  {% block main %}
    {% if (main_container) %}
      <div class=\"main-container {{ main_container }}\">
    {% endif %}

      <main role=\"main\" {{ attributes }}>
        <a id=\"main-content\" tabindex=\"-1\" aria-hidden=\"true\"></a>

        <div class=\"row\">
          {{ page.content }}

          {% if page.sidebar_first %}
            {{ page.sidebar_first }}
          {% endif %}

          {% if page.sidebar_second %}
            {{ page.sidebar_second }}
          {% endif %}
        </div>
      </main>

    {% if (main_container) %}
      </div>
    {% endif %}
  {% endblock %}

  {% if page.piso_1 %}
    <div class=\"piso_1 piso_page container-fluid\">
      {{ page.piso_1 }}
    </div>
  {% endif %}

  {% if page.piso_2 %}
    <div class=\"piso_2 piso_page container-fluid\">
      {{ page.piso_2 }}
    </div>
  {% endif %}

  {% if page.piso_3 %}
    <div class=\"piso_3 piso_page container-fluid\">
      {{ page.piso_3 }}
    </div>
  {% endif %}

  {% if page.piso_4 %}
    <div class=\"piso_4 piso_page container-fluid\">
      {{ page.piso_4 }}
    </div>
  {% endif %}

  {% if page.piso_5 %}
    <div class=\"piso_5 piso_page container-fluid\">
      {{ page.piso_5 }}
    </div>
  {% endif %}

  {% if page.piso_6 %}
    <div class=\"piso_6 piso_page container-fluid\">
      {{ page.piso_6 }}
    </div>
  {% endif %}

  {% if page.piso_7 %}
    <div class=\"piso_7 piso_page container-fluid\">
      {{ page.piso_7 }}
    </div>
  {% endif %}

  {% block footer %}
    {% if page.footer %}
      <footer role=\"contentinfo\">
        {{ page.footer }}
      </footer>
    {% endif %}
  {% endblock %}

  {{ page.navigation }}

</div>
", "themes/custom/ws_ecommerce/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/custom/ws_ecommerce/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49, "block" => 65);
        static $filters = array("escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
