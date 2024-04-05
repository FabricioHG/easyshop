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

/* modules/custom/webs_systems/templates/slide_multi_infin.html.twig */
class __TwigTemplate_78149cc4e30e98658f4b4356fa5d5af3 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/webs_systems/templates/slide_multi_infin.html.twig"));

        // line 5
        echo "
<div class=\"slider_inf container-fluid\">
\t<div class=\"slide-track_inf\">
\t\t";
        // line 9
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["url_imgs"] ?? null)) >= 14)) {
            // line 10
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["url_imgs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["url_img"]) {
                // line 11
                echo "            \t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"/sites/default/files/";
                // line 12
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["url_img"], 12, $this->source), "html", null, true);
                echo "\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
        \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url_img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
            // line 16
            echo "        ";
        } elseif (((twig_length_filter($this->env, ($context["url_imgs"] ?? null)) < 14) && (twig_length_filter($this->env, ($context["url_imgs"] ?? null)) > 0))) {
            // line 17
            echo "\t\t   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "\t\t   \t\t";
                if ((($__internal_compile_0 = ($context["url_imgs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null)) {
                    // line 19
                    echo "\t\t   \t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/";
                    // line 20
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["url_imgs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), 20, $this->source), "html", null, true);
                    echo "\" height=\"100\" width=\"250\" alt=\"L";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 20, $this->source), "html", null, true);
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["indiceAleatorio"] = twig_random($this->env, 0, (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_imgs"] ?? null), 23, $this->source)) - 1));
                    // line 24
                    echo "\t\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/";
                    // line 25
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["url_imgs"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["indiceAleatorio"] ?? null)] ?? null) : null), 25, $this->source), "html", null, true);
                    echo "\" height=\"100\" width=\"250\" alt=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["indiceAleatorio"] ?? null), 25, $this->source), "html", null, true);
                    echo "\" />
\t\t\t\t\t</div>

\t\t   \t\t";
                }
                // line 28
                echo " 
        \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t";
        } else {
            // line 31
            echo "\t\t";
            // line 32
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 33
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    echo "\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 35, $this->source), "html", null, true);
                    echo ".png\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t";
        }
        echo "\t
\t</div>
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
        return "modules/custom/webs_systems/templates/slide_multi_infin.html.twig";
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
        return array (  146 => 39,  140 => 38,  131 => 35,  128 => 34,  123 => 33,  118 => 32,  116 => 31,  113 => 30,  106 => 28,  97 => 25,  94 => 24,  91 => 23,  83 => 20,  80 => 19,  77 => 18,  72 => 17,  69 => 16,  67 => 15,  58 => 12,  55 => 11,  50 => 10,  47 => 9,  42 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# variables que se pueden utilizar
\t- url_imgs
\t- titulo
#}

<div class=\"slider_inf container-fluid\">
\t<div class=\"slide-track_inf\">
\t\t{# Si el array url_imgs es mayor o igual a 14 recorrer el array y mostrar cada imagen  #}
\t\t{% if url_imgs|length >= 14 %}
\t\t\t{% for url_img in url_imgs %}
            \t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"/sites/default/files/{{url_img}}\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
        \t{% endfor %}
        {# Si el array url_imgs  es menor 14 y mayor a 0 mostrar las imagenes que existen y las que no se van a repetir de las que si existen  #}
        {% elseif url_imgs|length < 14 and url_imgs|length > 0 %}
\t\t   {% for i in 0..14 %}
\t\t   \t\t{% if url_imgs[i] %}
\t\t   \t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/{{url_imgs[i]}}\" height=\"100\" width=\"250\" alt=\"L{{i}}\" />
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t{% set indiceAleatorio = random(0, url_imgs|length -1) %}
\t\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/{{url_imgs[indiceAleatorio]}}\" height=\"100\" width=\"250\" alt=\"{{indiceAleatorio}}\" />
\t\t\t\t\t</div>

\t\t   \t\t{% endif %} 
        \t{% endfor %}
\t\t{% else %}
\t\t{# Si no hay contenido slide-multi se mostraran imagenes de prueba #}
\t\t{% for j in 0..2 %}
\t\t\t{% for i in range(1, 7) %}
\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/{{i}}.png\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
\t\t{% endif %}\t
\t</div>
</div>

", "modules/custom/webs_systems/templates/slide_multi_infin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/modules/custom/webs_systems/templates/slide_multi_infin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "for" => 10, "set" => 23);
        static $filters = array("length" => 9, "escape" => 12);
        static $functions = array("range" => 17, "random" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape'],
                ['range', 'random']
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
