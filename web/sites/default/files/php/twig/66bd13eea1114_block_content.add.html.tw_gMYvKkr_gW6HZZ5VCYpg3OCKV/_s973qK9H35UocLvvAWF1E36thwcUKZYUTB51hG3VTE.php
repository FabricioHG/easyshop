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

/* @help_topics/block_content.add.html.twig */
class __TwigTemplate_3d5058f1e79d0d27c3b2f9bee24bdfe1 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/block_content.add.html.twig"));

        // line 9
        $context["library_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content blocks", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["library_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["library_link_text"] ?? null), 10, $this->source), "entity.block_content.collection"));
        // line 11
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Create a content block, which can later be placed on the site.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em>.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Open the @library_link tab.", array("@library_link" => ($context["library_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 17
        yield t("Click <em>Add content block</em>. If you have more than one block type defined on your site, click the name of the type you want to create.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Enter a description of your block (to be shown to administrators) and the body text for your block.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save</em>.", array());
        yield "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/block_content.add.html.twig";
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
        return array (  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  59 => 13,  55 => 12,  50 => 11,  48 => 10,  43 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set library_link_text %}{% trans %}Content blocks{% endtrans %}{% endset %}
{% set library_link = render_var(help_route_link(library_link_text, 'entity.block_content.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a content block, which can later be placed on the site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Content</em>.{% endtrans %}</li>
  <li>{% trans %}Open the {{ library_link }} tab.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add content block</em>. If you have more than one block type defined on your site, click the name of the type you want to create.{% endtrans %}</li>
  <li>{% trans %}Enter a description of your block (to be shown to administrators) and the body text for your block.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>.{% endtrans %}</li>
</ol>", "@help_topics/block_content.add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/core/modules/block_content/help_topics/block_content.add.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
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
