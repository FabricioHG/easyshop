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

/* @better_exposed_filters/bef-nested-elements.html.twig */
class __TwigTemplate_8ccbb4398ebdf0055f9e94dffe0f971e extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@better_exposed_filters/bef-nested-elements.html.twig"));

        // line 15
        ob_start();
        // line 16
        echo "  ";
        $context["delta"] = abs((($context["current_nesting_level"] ?? null) - ($context["new_nesting_level"] ?? null)));
        // line 17
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, true, 17)) {
            // line 18
            echo "    <ul>
  ";
        } else {
            // line 20
            echo "    ";
            if (($context["delta"] ?? null)) {
                // line 21
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["delta"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 22
                    echo "        ";
                    if ((($context["new_nesting_level"] ?? null) > ($context["current_nesting_level"] ?? null))) {
                        // line 23
                        echo "          <ul>
        ";
                    } else {
                        // line 25
                        echo "          </ul>
        ";
                    }
                    // line 27
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <li>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 31, $this->source), "html", null, true);
        echo "

  ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, true, 33)) {
            // line 34
            echo "    ";
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["new_nesting_level"] ?? null), 0));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "      </li></ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  ";
        }
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["current_nesting_level", "new_nesting_level", "loop", "item"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@better_exposed_filters/bef-nested-elements.html.twig";
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
        return array (  113 => 15,  109 => 38,  102 => 36,  97 => 35,  95 => 34,  93 => 33,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  73 => 27,  69 => 25,  65 => 23,  62 => 22,  57 => 21,  54 => 20,  50 => 18,  47 => 17,  44 => 16,  42 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Themes hierarchical taxonomy terms as nested <ul> elements.

  This template is intended to be called from within another template to provide
  the \"scaffolding\" of nested lists while the calling template provides the
  actual filter element via the 'item' variable.

  Available variables:
    - current_nesting_level: the nesting level of the most recently printe item.
    - new_nesting_level: the nesting level of the item to print.
    - item: The item to print.
    - loop: The loop variable from the iterator that calls this template.
      Requires the loop.first and loop.last elements.
#}
{% apply spaceless %}
  {% set delta = (current_nesting_level - new_nesting_level) | abs %}
  {% if loop.first %}
    <ul>
  {% else %}
    {% if delta %}
      {% for i in 1..delta %}
        {% if new_nesting_level > current_nesting_level  %}
          <ul>
        {% else %}
          </ul>
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endif %}

  <li>{{ item }}

  {% if loop.last %}
    {# Close any remaining <li> tags #}
    {% for i in new_nesting_level..0 %}
      </li></ul>
    {% endfor %}
  {% endif %}
{% endapply %}
", "@better_exposed_filters/bef-nested-elements.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/modules/contrib/better_exposed_filters/templates/bef-nested-elements.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 15, "set" => 16, "if" => 17, "for" => 21);
        static $filters = array("abs" => 16, "escape" => 31, "spaceless" => 15);
        static $functions = array("range" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'for'],
                ['abs', 'escape', 'spaceless'],
                ['range']
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
