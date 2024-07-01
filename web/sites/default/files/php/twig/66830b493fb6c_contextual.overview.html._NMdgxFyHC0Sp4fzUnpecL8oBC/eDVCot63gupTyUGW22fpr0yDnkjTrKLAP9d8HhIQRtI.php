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

/* @help_topics/contextual.overview.html.twig */
class __TwigTemplate_2b8a8f7f3138dab472470edc5625c0ba extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/contextual.overview.html.twig"));

        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Use contextual links to access administrative tasks without navigating the administrative menu.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What are contextual links?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Visit a non-administrative page on your site, such as the home page.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Locate a block or another area on the page that you want to edit or configure.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/contextual.overview.html.twig";
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
        return array (  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Use contextual links to access administrative tasks without navigating the administrative menu.{% endtrans %}</p>
<h2>{% trans %}What are contextual links?{% endtrans %}</h2>
<p>{% trans %}<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).{% endtrans %}</li>
  <li>{% trans %}Visit a non-administrative page on your site, such as the home page.{% endtrans %}</li>
  <li>{% trans %}Locate a block or another area on the page that you want to edit or configure.{% endtrans %}</li>
  <li>{% trans %}Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.{% endtrans %}</li>
  <li>{% trans %}While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.{% endtrans %}</li>
  <li>{% trans %}Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.{% endtrans %}</li>
</ol>", "@help_topics/contextual.overview.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/contextual/help_topics/contextual.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
