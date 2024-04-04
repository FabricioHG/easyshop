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

/* modules/custom/webs_systems/templates/slide_autoplay.html.twig */
class __TwigTemplate_1848a6ee2b832e694bebfcd36195f51e extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/webs_systems/templates/slide_autoplay.html.twig"));

        // line 1
        echo "
";
        // line 6
        echo "
<div class=\"container\">
\t<div class=\"autoplay\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["url_imgs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["url_img"]) {
            // line 10
            echo "\t\t";
            if ($context["url_img"]) {
                // line 11
                echo "\t  \t\t";
                // line 12
                echo "\t  \t\t<div class=\"slide slide_car_auto_play\">
\t\t    \t<img src=\"";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed($context["url_img"], 13, $this->source), "carousel_auto_265_x_370"), "html", null, true);
                echo "\" alt=\"Imagen 1\">
\t\t  \t</div>
\t\t";
            }
            // line 16
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url_img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
</div>



";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url_imgs"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/custom/webs_systems/templates/slide_autoplay.html.twig";
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
        return array (  74 => 17,  68 => 16,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  45 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# variables que se pueden utilizar
\t- url_imgs
\t- titulo
#}

<div class=\"container\">
\t<div class=\"autoplay\">
\t{% for url_img in url_imgs %}
\t\t{% if url_img %}
\t  \t\t{# Renderizar la imagen utilizando el estilo de imagen \"carousel_auto_265_x_370\" #}
\t  \t\t<div class=\"slide slide_car_auto_play\">
\t\t    \t<img src=\"{{url_img|image_style('carousel_auto_265_x_370')}}\" alt=\"Imagen 1\">
\t\t  \t</div>
\t\t{% endif %}
\t{% endfor %}
\t</div>
</div>



", "modules/custom/webs_systems/templates/slide_autoplay.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/modules/custom/webs_systems/templates/slide_autoplay.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 10);
        static $filters = array("escape" => 13, "image_style" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'image_style'],
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
