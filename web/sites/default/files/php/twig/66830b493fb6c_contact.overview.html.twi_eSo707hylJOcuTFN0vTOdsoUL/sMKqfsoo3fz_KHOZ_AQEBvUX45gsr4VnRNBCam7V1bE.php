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

/* @help_topics/contact.overview.html.twig */
class __TwigTemplate_4a4d963f11f722596a8db72e53169e19 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/contact.overview.html.twig"));

        // line 5
        echo "<h2>";
        echo t("What are contact forms?", array());
        echo "</h2>
<p>";
        // line 6
        echo t("There are two different types of contact forms provided by the core Contact module: personal contact forms, which allow users to contact other users on the site, and site-wide contact forms, which allow users to contact site managers or administrators. A site can have more than one site-wide contact form; each has its own fields to fill out, recipients, and URL; you can also change the fields that are shown on personal contact forms.", array());
        echo "</p>
<h2>";
        // line 7
        echo t("Using the personal contact form", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Site visitors can email registered users on your site by using the personal contact form, without knowing or learning the email address of the recipient. When a user with the correct permissions is viewing another user's profile, the viewer will see a <em>Contact</em> tab or link, which leads to the personal contact form if the user whose profile is being viewed has their personal contact form enabled (this is a user account setting).", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Contact form management tasks", array());
        echo "</h2>
<p>";
        // line 10
        echo t("See the related topics below for specific tasks.", array());
        echo "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/contact.overview.html.twig";
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
        return array (  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  42 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 5 %}<h2>{% trans %}What are contact forms?{% endtrans %}</h2>
<p>{% trans %}There are two different types of contact forms provided by the core Contact module: personal contact forms, which allow users to contact other users on the site, and site-wide contact forms, which allow users to contact site managers or administrators. A site can have more than one site-wide contact form; each has its own fields to fill out, recipients, and URL; you can also change the fields that are shown on personal contact forms.{% endtrans %}</p>
<h2>{% trans %}Using the personal contact form{% endtrans %}</h2>
<p>{% trans %}Site visitors can email registered users on your site by using the personal contact form, without knowing or learning the email address of the recipient. When a user with the correct permissions is viewing another user's profile, the viewer will see a <em>Contact</em> tab or link, which leads to the personal contact form if the user whose profile is being viewed has their personal contact form enabled (this is a user account setting).{% endtrans %}</p>
<h2>{% trans %}Contact form management tasks{% endtrans %}</h2>
<p>{% trans %}See the related topics below for specific tasks.{% endtrans %}</p>", "@help_topics/contact.overview.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/contact/help_topics/contact.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 5);
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
