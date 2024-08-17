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

/* @help_topics/core.menus.html.twig */
class __TwigTemplate_000eb6ecd7611e7f8779f807f814e124 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.menus.html.twig"));

        // line 7
        yield "<h2>";
        yield t("What is a menu?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("A menu is a collection of <em>menu links</em> used to navigate a web site. Menus and menu links can be provided by modules or site administrators.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("Managing menus overview", array());
        yield "</h2>
<p>";
        // line 10
        yield t("The core Menu UI module provides a user interface for managing menus, including creating new menus, reordering menu links, and disabling links provided by modules. It also provides the ability for links to content items to be added to menus while editing, if configured on the content type. The core Custom Menu Links module provides the ability to add custom links to menus. Each menu can be displayed by placing a block in a theme region; some themes also can display a menu outside of the block system. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Additional Resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 13
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/menu-concept.html\">Concept: Menu (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.menus.html.twig";
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
        return array (  65 => 13,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  43 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}What is a menu?{% endtrans %}</h2>
<p>{% trans %}A menu is a collection of <em>menu links</em> used to navigate a web site. Menus and menu links can be provided by modules or site administrators.{% endtrans %}</p>
<h2>{% trans %}Managing menus overview{% endtrans %}</h2>
<p>{% trans %}The core Menu UI module provides a user interface for managing menus, including creating new menus, reordering menu links, and disabling links provided by modules. It also provides the ability for links to content items to be added to menus while editing, if configured on the content type. The core Custom Menu Links module provides the ability to add custom links to menus. Each menu can be displayed by placing a block in a theme region; some themes also can display a menu outside of the block system. See the related topics listed below for specific tasks.{% endtrans %}</p>
<h2>{% trans %}Additional Resources{% endtrans %}</h2>
<ul>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/menu-concept.html\">Concept: Menu (Drupal User Guide)</a>{% endtrans %}</li>
</ul>", "@help_topics/core.menus.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/help/help_topics/core.menus.html.twig");
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
