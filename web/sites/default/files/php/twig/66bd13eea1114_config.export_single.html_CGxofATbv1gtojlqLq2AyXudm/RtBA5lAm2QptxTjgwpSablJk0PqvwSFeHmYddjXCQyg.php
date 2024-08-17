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

/* @help_topics/config.export_single.html.twig */
class __TwigTemplate_a1f7af28d6794ec964a90e709db98f5c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/config.export_single.html.twig"));

        // line 9
        $context["single_export_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Single item", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["single_export_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["single_export_link_text"] ?? null), 10, $this->source), "config.export_single"));
        // line 11
        $context["config_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.config_overview"));
        // line 12
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Export a single configuration item to a file. See @config_overview_topic for more information about configuration.", array("@config_overview_topic" => ($context["config_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>Configuration synchronization</em> &gt; <em>Export</em> &gt; <em>@single_export_link</em>.", array("@single_export_link" => ($context["single_export_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Select the <em>Configuration type</em> that you want to export, and then select the specific <em>Configuration name</em> to export.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Use your browser to copy the text in the box marked <em>Here is your configuration</em> to the clipboard.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Paste the copied text into a plain-text editor on your computer or other device, and save it using the suggested file name below the text box.", array());
        // line 20
        yield "  </li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/config.export_single.html.twig";
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
        return array (  80 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  61 => 14,  57 => 13,  52 => 12,  50 => 11,  48 => 10,  43 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set single_export_link_text %}{% trans %}Single item{% endtrans %}{% endset %}
{% set single_export_link = render_var(help_route_link(single_export_link_text, 'config.export_single')) %}
{% set config_overview_topic = render_var(help_topic_link('core.config_overview')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Export a single configuration item to a file. See {{ config_overview_topic }} for more information about configuration.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>Configuration synchronization</em> &gt; <em>Export</em> &gt; <em>{{ single_export_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Select the <em>Configuration type</em> that you want to export, and then select the specific <em>Configuration name</em> to export.{% endtrans %}</li>
  <li>{% trans %}Use your browser to copy the text in the box marked <em>Here is your configuration</em> to the clipboard.{% endtrans %}</li>
  <li>{% trans %}Paste the copied text into a plain-text editor on your computer or other device, and save it using the suggested file name below the text box.{% endtrans %}
  </li>
</ol>", "@help_topics/config.export_single.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/config/help_topics/config.export_single.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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
