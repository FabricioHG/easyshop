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

/* themes/custom/plantilla_web/templates/page.html.twig */
class __TwigTemplate_460beb3a3a2a58e8e6b4e4e8eafc70f4 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/plantilla_web/templates/page.html.twig"));

        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        echo "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        echo "
<header>
  ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "

  ";
        // line 62
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            // line 63
            echo "  <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 63, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 64, $this->source), "html", null, true);
            echo " d-flex logo btn_amb\">
      ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "

      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
    ";
            // line 74
            echo "    <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 74, $this->source), "html", null, true);
            echo " d-flex\">
    <div class=\"container collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
        ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  </nav>
  ";
        }
        // line 82
        echo "
</header>

";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 85)) {
            // line 86
            echo "  <div class=\"pw_slideshow container-fluid\">
    ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 90
        echo "

<main role=\"main\" class=\"front_page_ws\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 94
        echo "
  ";
        // line 96
        $context["sidebar_first_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 96))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 98
        echo "
  ";
        // line 100
        $context["sidebar_second_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 100) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 100))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 102
        echo "
  ";
        // line 104
        $context["content_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104))) ? ("col-12 col-lg-6") : ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 106
        echo "

  <div class=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 108, $this->source), "html", null, true);
        echo "\">
    ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 109)) {
            // line 110
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 112
        echo "    <div class=\"row g-0\">
      ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 113)) {
            // line 114
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 114, $this->source), "html", null, true);
            echo "\">
          ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 118
        echo "      <div class=\"order-1 order-lg-2 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 118, $this->source), "html", null, true);
        echo "\">
        ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121)) {
            // line 122
            echo "        <div class=\"order-3 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 122, $this->source), "html", null, true);
            echo "\">
          ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 126
        echo "    </div>
  </div>

</main>

";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 131)) {
            // line 132
            echo "  <div class=\"pw_piso_1 container-fluid\">
    ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_1", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 136
        echo "
";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 137)) {
            // line 138
            echo "  <div class=\"pw_piso_2 container-fluid\">
    ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_2", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 142
        echo "
";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 143)) {
            // line 144
            echo "  <div class=\"pw_piso_3 container-fluid\">
    ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_3", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 148
        echo "
";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 149)) {
            // line 150
            echo "  <div class=\"pw_piso_4 container-fluid\">
    ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_4", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 154
        echo "
";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 155)) {
            // line 156
            echo "  <div class=\"pw_piso_5 container-fluid\">
    ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "piso_5", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 160
        echo "

";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 162)) {
            // line 163
            echo "<footer class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 163, $this->source), "html", null, true);
            echo "\">
  <div class=\"";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 164, $this->source), "html", null, true);
            echo "\">
    ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
  </div>
</footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/plantilla_web/templates/page.html.twig";
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
        return array (  284 => 165,  280 => 164,  275 => 163,  273 => 162,  269 => 160,  263 => 157,  260 => 156,  258 => 155,  255 => 154,  249 => 151,  246 => 150,  244 => 149,  241 => 148,  235 => 145,  232 => 144,  230 => 143,  227 => 142,  221 => 139,  218 => 138,  216 => 137,  213 => 136,  207 => 133,  204 => 132,  202 => 131,  195 => 126,  189 => 123,  184 => 122,  182 => 121,  177 => 119,  172 => 118,  166 => 115,  161 => 114,  159 => 113,  156 => 112,  150 => 110,  148 => 109,  144 => 108,  140 => 106,  138 => 104,  135 => 102,  133 => 100,  130 => 98,  128 => 96,  125 => 94,  120 => 90,  114 => 87,  111 => 86,  109 => 85,  104 => 82,  96 => 77,  92 => 76,  86 => 74,  75 => 65,  71 => 64,  66 => 63,  64 => 62,  59 => 60,  55 => 58,  53 => 56,  52 => 55,  51 => 54,  50 => 53,  47 => 51,  45 => 49,  44 => 48,  43 => 47,  42 => 46,);
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
{%
set nav_classes = 'navbar navbar-expand-lg' ~
  (b5_navbar_schema != 'none' ? \" navbar-#{b5_navbar_schema}\" : ' ') ~
  (b5_navbar_schema != 'none' ? (b5_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_navbar_bg_schema != 'none' ? \" bg-#{b5_navbar_bg_schema}\" : ' ')
%}

{%
set footer_classes = ' ' ~
  (b5_footer_schema != 'none' ? \" footer-#{b5_footer_schema}\" : ' ') ~
  (b5_footer_schema != 'none' ? (b5_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_footer_bg_schema != 'none' ? \" bg-#{b5_footer_bg_schema}\" : ' ')
%}

<header>
  {{ page.header }}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"{{ nav_classes }}\">
    <div class=\"{{ b5_top_container }} d-flex logo btn_amb\">
      {{ page.nav_branding }}

      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
    {# Se movio el div siguiente fuer del anterior para hacer el dieño de Magenta y se le agregaron estilos#}
    <div class=\"{{ b5_top_container }} d-flex\">
    <div class=\"container collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
        {{ page.nav_main }}
        {{ page.nav_additional }}
    </div>
  </div>
  </nav>
  {% endif %}

</header>

{% if page.slideshow %}
  <div class=\"pw_slideshow container-fluid\">
    {{ page.slideshow }}
  </div>
{% endif %}


<main role=\"main\" class=\"front_page_ws\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

  {%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


  <div class=\"{{ b5_top_container }}\">
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div class=\"row g-0\">
      {% if page.sidebar_first %}
        <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"order-1 order-lg-2 {{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"order-3 {{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
    </div>
  </div>

</main>

{% if page.piso_1 %}
  <div class=\"pw_piso_1 container-fluid\">
    {{ page.piso_1 }}
  </div>
{% endif %}

{% if page.piso_2 %}
  <div class=\"pw_piso_2 container-fluid\">
    {{ page.piso_2 }}
  </div>
{% endif %}

{% if page.piso_3 %}
  <div class=\"pw_piso_3 container-fluid\">
    {{ page.piso_3 }}
  </div>
{% endif %}

{% if page.piso_4 %}
  <div class=\"pw_piso_4 container-fluid\">
    {{ page.piso_4 }}
  </div>
{% endif %}

{% if page.piso_5 %}
  <div class=\"pw_piso_5 container-fluid\">
    {{ page.piso_5 }}
  </div>
{% endif %}


{% if page.footer %}
<footer class=\"mt-auto {{ footer_classes }}\">
  <div class=\"{{ b5_top_container }}\">
    {{ page.footer }}
  </div>
</footer>
{% endif %}
", "themes/custom/plantilla_web/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/themes/custom/plantilla_web/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 62);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
