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

/* themes/custom/ws_ecommerce/templates/page.html.twig */
class __TwigTemplate_a15ce013d2f4210f9adf804b5d8a735e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/ws_ecommerce/templates/page.html.twig"));

        // line 45
        echo "<div class=\"layout-container font-smoothing\">

  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "

  ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 49)) {
            // line 50
            echo "    <div class=\"piso_slideshow container-fluid\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "
  <header role=\"banner\">
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "

  ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "

  ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "

  ";
        // line 65
        $this->displayBlock('main', $context, $blocks);
        // line 90
        echo "
  ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 91)) {
            // line 92
            echo "    <div class=\"piso_1 piso_page container-fluid\">
      ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 97)) {
            // line 98
            echo "    <div class=\"piso_2 piso_page container-fluid\">
      ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 103)) {
            // line 104
            echo "    <div class=\"piso_3 piso_page container-fluid\">
      ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 108
        echo "
  ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 109)) {
            // line 110
            echo "    <div class=\"piso_4 piso_page container-fluid\">
      ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 114
        echo "
  ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 115)) {
            // line 116
            echo "    <div class=\"piso_5 piso_page container-fluid\">
      ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 120
        echo "
  ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_6", [], "any", false, false, true, 121)) {
            // line 122
            echo "    <div class=\"piso_6 piso_page container-fluid\">
      ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_6", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 126
        echo "
  ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_7", [], "any", false, false, true, 127)) {
            // line 128
            echo "    <div class=\"piso_7 piso_page container-fluid\">
      ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_7", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 132
        echo "
  ";
        // line 133
        $this->displayBlock('footer', $context, $blocks);
        // line 140
        echo "
  ";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "main_container", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 65
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 66
        echo "    ";
        if (($context["main_container"] ?? null)) {
            // line 67
            echo "      <div class=\"main-container ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_container"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
    ";
        }
        // line 69
        echo "
      <main role=\"main\" ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 70, $this->source), "html", null, true);
        echo ">
        <a id=\"main-content\" tabindex=\"-1\" aria-hidden=\"true\"></a>

        <div class=\"row\">
          ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "

          ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76)) {
            // line 77
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 79
        echo "
          ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80)) {
            // line 81
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 83
        echo "        </div>
      </main>

    ";
        // line 86
        if (($context["main_container"] ?? null)) {
            // line 87
            echo "      </div>
    ";
        }
        // line 89
        echo "  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 133
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 134
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 134)) {
            // line 135
            echo "      <footer role=\"contentinfo\">
        ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
      </footer>
    ";
        }
        // line 139
        echo "  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/ws_ecommerce/templates/page.html.twig";
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
        return array (  296 => 139,  290 => 136,  287 => 135,  284 => 134,  277 => 133,  270 => 89,  266 => 87,  264 => 86,  259 => 83,  253 => 81,  251 => 80,  248 => 79,  242 => 77,  240 => 76,  235 => 74,  228 => 70,  225 => 69,  219 => 67,  216 => 66,  209 => 65,  197 => 141,  194 => 140,  192 => 133,  189 => 132,  183 => 129,  180 => 128,  178 => 127,  175 => 126,  169 => 123,  166 => 122,  164 => 121,  161 => 120,  155 => 117,  152 => 116,  150 => 115,  147 => 114,  141 => 111,  138 => 110,  136 => 109,  133 => 108,  127 => 105,  124 => 104,  122 => 103,  119 => 102,  113 => 99,  110 => 98,  108 => 97,  105 => 96,  99 => 93,  96 => 92,  94 => 91,  91 => 90,  89 => 65,  84 => 63,  79 => 61,  74 => 59,  68 => 56,  64 => 54,  58 => 51,  55 => 50,  53 => 49,  48 => 47,  44 => 45,);
    }

    public function getSourceContext()
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
