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

/* @help_topics/core.maintenance.html.twig */
class __TwigTemplate_980cff7198ccfcea1f1a7400fb66aee3 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.maintenance.html.twig"));

        // line 12
        yield "<h2>";
        yield t("Maintaining and troubleshooting overview", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Here are some tasks and hints related to maintaining your site, and troubleshooting problems that may come up on your site. See the related topics below for more information.", array());
        yield "</p>
<ul>
  <li>";
        // line 15
        yield t("When performing maintenance, such as installing, uninstalling, or updating a module, put your site in maintenance mode.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Configure your site so that cron runs periodically.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("If your site is not behaving as expected, clear the cache before trying to diagnose the problem.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("There are several site reports that can help you diagnose problems with your site. There are also two core modules that can be used for error logging: Database Logging and Syslog.", array());
        yield "</li>
</ul>
<h2>";
        // line 20
        yield t("Additional resources", array());
        yield "</h2>
<ul>
    <li>";
        // line 22
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-chapter.html\">Preventing and Fixing Problems (Drupal User Guide)</a>", array());
        yield "</li>
    <li>";
        // line 23
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance (Drupal User Guide)</a>", array());
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
        return array (  79 => 23,  75 => 22,  70 => 20,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  48 => 13,  43 => 12,);
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
