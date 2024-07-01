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

/* @help_topics/user.overview.html.twig */
class __TwigTemplate_ff1d5fcb519233338899ac6391e66758 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/user.overview.html.twig"));

        // line 5
        echo "<h2>";
        echo t("What is a user?", array());
        echo "</h2>
<p>";
        // line 6
        echo t("A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.", array());
        echo "</p>
<h2>";
        // line 7
        echo t("What is a role?", array());
        echo "</h2>
<p>";
        // line 8
        echo t("<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What is a permission?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Overview of managing user accounts and visitors", array());
        echo "</h2>
<p>";
        // line 12
        echo t("The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. The core Ban module allows administrators to ban certain IP addresses from accessing the site. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.", array());
        echo "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/user.overview.html.twig";
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
        return array (  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  42 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 5 %}<h2>{% trans %}What is a user?{% endtrans %}</h2>
<p>{% trans %}A user is anyone accessing or viewing your site. <em>Anonymous</em> users are users who are not logged in, and <em>Authenticated</em> users are users who are logged in.{% endtrans %}</p>
<h2>{% trans %}What is a role?{% endtrans %}</h2>
<p>{% trans %}<em>Roles</em> are used to group and classify users; each user can be assigned one or more roles. There are also special roles for all anonymous and all authenticated users.{% endtrans %}</p>
<h2>{% trans %}What is a permission?{% endtrans %}</h2>
<p>{% trans %}Granting a <em>permission</em> to a role allows users who have been assigned that role to perform an action on the site, such as viewing content, editing or creating  a particular type of content, administering settings for a particular module, or using a particular function of the site (such as search).{% endtrans %}</p>
<h2>{% trans %}Overview of managing user accounts and visitors{% endtrans %}</h2>
<p>{% trans %}The core User module allows users to register, log in, and log out, and administrators to manage user roles and permissions. The core Ban module allows administrators to ban certain IP addresses from accessing the site. Depending on which modules you have installed on your site, the related topics below will help you with tasks related to managing user accounts and visitors.{% endtrans %}</p>", "@help_topics/user.overview.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/user/help_topics/user.overview.html.twig");
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
