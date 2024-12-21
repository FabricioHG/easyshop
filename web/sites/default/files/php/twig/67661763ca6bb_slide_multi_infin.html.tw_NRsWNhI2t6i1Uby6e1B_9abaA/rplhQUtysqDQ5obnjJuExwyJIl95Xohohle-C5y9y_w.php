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
use Twig\TemplateWrapper;

/* modules/custom/webs_systems/templates/slide_multi_infin.html.twig */
class __TwigTemplate_c204b0f916e38baaf0beb7fbda5ae3db extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/webs_systems/templates/slide_multi_infin.html.twig"));

        // line 5
        yield "
<div class=\"slider_inf container-fluid\">
\t<div class=\"slide-track_inf\">
\t\t";
        // line 9
        yield "\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["url_imgs"] ?? null)) >= 14)) {
            // line 10
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["url_imgs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["url_img"]) {
                // line 11
                yield "            \t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"/sites/default/files/";
                // line 12
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["url_img"], "html", null, true);
                yield "\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
        \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['url_img'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        ";
            // line 16
            yield "        ";
        } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["url_imgs"] ?? null)) < 14) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["url_imgs"] ?? null)) > 0))) {
            // line 17
            yield "\t\t   ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                yield "\t\t   \t\t";
                if ((($_v0 = ($context["url_imgs"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_imgs"] ?? null), $context["i"], [], "array", false, false, true, 18))) {
                    // line 19
                    yield "\t\t   \t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/";
                    // line 20
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["url_imgs"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_imgs"] ?? null), $context["i"], [], "array", false, false, true, 20)), "html", null, true);
                    yield "\" height=\"100\" width=\"250\" alt=\"L";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["i"], "html", null, true);
                    yield "\" />
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 23
                    yield "\t\t\t\t\t";
                    $context["indiceAleatorio"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["url_imgs"] ?? null)) - 1));
                    // line 24
                    yield "\t\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t\t<img src=\"/sites/default/files/";
                    // line 25
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["url_imgs"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[($context["indiceAleatorio"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_imgs"] ?? null), ($context["indiceAleatorio"] ?? null), [], "array", false, false, true, 25)), "html", null, true);
                    yield "\" height=\"100\" width=\"250\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["indiceAleatorio"] ?? null), "html", null, true);
                    yield "\" />
\t\t\t\t\t</div>

\t\t   \t\t";
                }
                // line 28
                yield " 
        \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "\t\t";
        } else {
            // line 31
            yield "\t\t";
            // line 32
            yield "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 33
                yield "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    yield "\t\t\t\t<div class=\"slide_inf\">
\t\t\t\t\t<img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["i"], "html", null, true);
                    yield ".png\" height=\"100\" width=\"250\" alt=\"\" />
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "\t\t";
        }
        yield "\t
\t</div>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url_imgs"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/webs_systems/templates/slide_multi_infin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  151 => 39,  145 => 38,  136 => 35,  133 => 34,  128 => 33,  123 => 32,  121 => 31,  118 => 30,  111 => 28,  102 => 25,  99 => 24,  96 => 23,  88 => 20,  85 => 19,  82 => 18,  77 => 17,  74 => 16,  72 => 15,  63 => 12,  60 => 11,  55 => 10,  52 => 9,  47 => 5,);
    }

    public function getSourceContext(): Source
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

", "modules/custom/webs_systems/templates/slide_multi_infin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/custom/webs_systems/templates/slide_multi_infin.html.twig");
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
                ['range', 'random'],
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
