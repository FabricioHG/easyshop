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

/* @help_topics/core.maintenance.html.twig */
class __TwigTemplate_21510260b2aa14213e2dd595b44df9c9 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.maintenance.html.twig"));

        // line 12
        echo "<h2>";
        echo t("Maintaining and troubleshooting overview", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Here are some tasks and hints related to maintaining your site, and troubleshooting problems that may come up on your site. See the related topics below for more information.", array());
        echo "</p>
<ul>
  <li>";
        // line 15
        echo t("When performing maintenance, such as installing, uninstalling, or updating a module, put your site in maintenance mode.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Configure your site so that cron runs periodically.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("If your site is not behaving as expected, clear the cache before trying to diagnose the problem.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("There are several site reports that can help you diagnose problems with your site. There are also two core modules that can be used for error logging: Database Logging and Syslog.", array());
        echo "</li>
</ul>
<h2>";
        // line 20
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 22
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-chapter.html\">Preventing and Fixing Problems (Drupal User Guide)</a>", array());
        echo "</li>
    <li>";
        // line 23
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>", array());
        echo "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.maintenance.html.twig";
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
        return array (  78 => 23,  74 => 22,  69 => 20,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  47 => 13,  42 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 12 %}<h2>{% trans %}Maintaining and troubleshooting overview{% endtrans %}</h2>
<p>{% trans %}Here are some tasks and hints related to maintaining your site, and troubleshooting problems that may come up on your site. See the related topics below for more information.{% endtrans %}</p>
<ul>
  <li>{% trans %}When performing maintenance, such as installing, uninstalling, or updating a module, put your site in maintenance mode.{% endtrans %}</li>
  <li>{% trans %}Configure your site so that cron runs periodically.{% endtrans %}</li>
  <li>{% trans %}If your site is not behaving as expected, clear the cache before trying to diagnose the problem.{% endtrans %}</li>
  <li>{% trans %}There are several site reports that can help you diagnose problems with your site. There are also two core modules that can be used for error logging: Database Logging and Syslog.{% endtrans %}</li>
</ul>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-chapter.html\">Preventing and Fixing Problems (Drupal User Guide)</a>{% endtrans %}</li>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>{% endtrans %}</li>
</ul>", "@help_topics/core.maintenance.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/help/help_topics/core.maintenance.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 12);
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
