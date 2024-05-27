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

/* core/modules/update/templates/update-last-check.html.twig */
class __TwigTemplate_f8fafcd015b0ba8168c2c7ad7cd9fb72 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/update/templates/update-last-check.html.twig"));

        // line 16
        echo "<p>
  ";
        // line 17
        if (($context["last"] ?? null)) {
            // line 18
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last checked: @time ago", ["@time" => ($context["time"] ?? null)]));
            echo "
  ";
        } else {
            // line 20
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 22
        echo "  (";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 22, $this->source), "html", null, true);
        echo ")
</p>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["last", "time", "link"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/update/templates/update-last-check.html.twig";
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
        return array (  59 => 22,  53 => 20,  47 => 18,  45 => 17,  42 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the last time update data was checked.
 *
 * Available variables:
 * - last: The timestamp that the site was last checked for updates.
 * - time: The formatted time since the site last checked for updates.
 * - link: A link to check for updates manually.
 *
 * @see template_preprocess_update_last_check()
 *
 * @ingroup themeable
 */
#}
<p>
  {% if last %}
    {{ 'Last checked: @time ago'|t({'@time': time}) }}
  {% else %}
    {{ 'Last checked: never'|t }}
  {% endif %}
  ({{ link }})
</p>
", "core/modules/update/templates/update-last-check.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/core/modules/update/templates/update-last-check.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("t" => 18, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
