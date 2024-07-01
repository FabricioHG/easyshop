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

/* @help_topics/core.web_services.html.twig */
class __TwigTemplate_8368dffaf8d4174ba2b8a2b3e4c5b546 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.web_services.html.twig"));

        // line 7
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 8
        echo "<h2>";
        echo t("What is a web service?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("A web service allows your site to provide its content and data to other web sites and applications. Typically, the data is transported via <a href=\"https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol\">HTTP</a> in a serialized machine-readable format.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What is serialization?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Serialization is the process of converting complex data structures into text strings, so that they can be exchanged and stored. The reverse process is called <em>deserialization</em>. JSON and XML are the two most-commonly-used data serialization formats for web services.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("What is HTTP Basic authentication?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("<a href=\"http://en.wikipedia.org/wiki/Basic_access_authentication\">HTTP Basic authentication</a> is a method for authenticating requests by sending a user name and password along with the request.", array());
        echo "</p>
<h2>";
        // line 14
        echo t("What modules provide web services?", array());
        echo "</h2>
<p>";
        // line 15
        echo t("The following core software modules provide web services:", array());
        echo "</p>
<dl>
  <dt>";
        // line 17
        echo t("JSON:API module", array());
        echo "</dt>
  <dd>";
        // line 18
        echo t("Exposes <em>entities</em> to other applications using a fully compliant implementation of the <a href=\"https://jsonapi.org\">JSON:API Specification</a>. See @content_structure_topic for more information on content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</dd>
  <dt>";
        // line 19
        echo t("RESTful Web Services module", array());
        echo "</dt>
  <dd>";
        // line 20
        echo t("Exposes entities and other resources to other applications using a <a href=\"https://en.wikipedia.org/wiki/Representational_state_transfer\">REST</a> implementation. Data is exchanged using a serialization format such as JSON, and transferred using an authentication method such as HTTP Basic Authentication.", array());
        echo "</dd>
  <dt>";
        // line 21
        echo t("Serialization module", array());
        echo "</dt>
  <dd>";
        // line 22
        echo t("Provides a framework for adding specific serialization formats for other modules to use.", array());
        echo "</dd>
  <dt>";
        // line 23
        echo t("HTTP Basic Authentication module", array());
        echo "</dt>
  <dd>";
        // line 24
        echo t("Provides a way for web services to be authenticated using HTTP Basic authentication against site user accounts.", array());
        echo "</dd>
</dl>
<p>";
        // line 26
        echo t("There are also contributed modules that provide web services.", array());
        echo "</p>
<h2>";
        // line 27
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/rest\">";
        // line 29
        echo t("Online documentation for the RESTful Web Services module", array());
        echo "</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module\">";
        // line 30
        echo t("Online documentation for the JSON:API module", array());
        echo "</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module/jsonapi-vs-cores-rest-module\">";
        // line 31
        echo t("Comparison of the RESTFul Web Services and JSON:API modules", array());
        echo "</a></li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.web_services.html.twig";
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
        return array (  128 => 31,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}What is a web service?{% endtrans %}</h2>
<p>{% trans %}A web service allows your site to provide its content and data to other web sites and applications. Typically, the data is transported via <a href=\"https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol\">HTTP</a> in a serialized machine-readable format.{% endtrans %}</p>
<h2>{% trans %}What is serialization?{% endtrans %}</h2>
<p>{% trans %}Serialization is the process of converting complex data structures into text strings, so that they can be exchanged and stored. The reverse process is called <em>deserialization</em>. JSON and XML are the two most-commonly-used data serialization formats for web services.{% endtrans %}</p>
<h2>{% trans %}What is HTTP Basic authentication?{% endtrans %}</h2>
<p>{% trans %}<a href=\"http://en.wikipedia.org/wiki/Basic_access_authentication\">HTTP Basic authentication</a> is a method for authenticating requests by sending a user name and password along with the request.{% endtrans %}</p>
<h2>{% trans %}What modules provide web services?{% endtrans %}</h2>
<p>{% trans %}The following core software modules provide web services:{% endtrans %}</p>
<dl>
  <dt>{% trans %}JSON:API module{% endtrans %}</dt>
  <dd>{% trans %}Exposes <em>entities</em> to other applications using a fully compliant implementation of the <a href=\"https://jsonapi.org\">JSON:API Specification</a>. See {{ content_structure_topic }} for more information on content entities and fields.{% endtrans %}</dd>
  <dt>{% trans %}RESTful Web Services module{% endtrans %}</dt>
  <dd>{% trans %}Exposes entities and other resources to other applications using a <a href=\"https://en.wikipedia.org/wiki/Representational_state_transfer\">REST</a> implementation. Data is exchanged using a serialization format such as JSON, and transferred using an authentication method such as HTTP Basic Authentication.{% endtrans %}</dd>
  <dt>{% trans %}Serialization module{% endtrans %}</dt>
  <dd>{% trans %}Provides a framework for adding specific serialization formats for other modules to use.{% endtrans %}</dd>
  <dt>{% trans %}HTTP Basic Authentication module{% endtrans %}</dt>
  <dd>{% trans %}Provides a way for web services to be authenticated using HTTP Basic authentication against site user accounts.{% endtrans %}</dd>
</dl>
<p>{% trans %}There are also contributed modules that provide web services.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/rest\">{% trans %}Online documentation for the RESTful Web Services module{% endtrans %}</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module\">{% trans %}Online documentation for the JSON:API module{% endtrans %}</a></li>
  <li><a href=\"https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module/jsonapi-vs-cores-rest-module\">{% trans %}Comparison of the RESTFul Web Services and JSON:API modules{% endtrans %}</a></li>
</ul>", "@help_topics/core.web_services.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/help/help_topics/core.web_services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 18);
        static $functions = array("render_var" => 7, "help_topic_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link']
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
