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

/* core/themes/claro/templates/misc/status-messages.html.twig */
class __TwigTemplate_df6a08cc6e0da844df48a5e900a337b6 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/misc/status-messages.html.twig"));

        // line 25
        echo "<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages-list__wrapper\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "      ";
            // line 29
            $context["classes"] = ["messages-list__item", "messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 32
$context["type"], 32, $this->source))];
            // line 35
            echo "      ";
            // line 36
            $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null);
            // line 38
            echo "      ";
            // line 39
            $context["is_message_with_icon"] = twig_in_filter($context["type"], ["error", "status", "warning"]);
            // line 41
            echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null), 42, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
        ";
            // line 43
            if (($context["type"] == "error")) {
                // line 44
                echo "          <div role=\"alert\">
        ";
            }
            // line 46
            echo "          ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 47
                echo "            <div class=\"messages__header\">
              ";
                // line 48
                if (($context["is_message_with_title"] ?? null)) {
                    // line 49
                    echo "                <h2 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 49, $this->source), "html", null, true);
                    echo "\" class=\"messages__title\">
                  ";
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 50, $this->source), "html", null, true);
                    echo "
                </h2>
              ";
                }
                // line 53
                echo "            </div>
          ";
            }
            // line 55
            echo "          <div class=\"messages__content\">
            ";
            // line 56
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 57
                echo "              <ul class=\"messages__list\">
                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 59
                    echo "                  <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 59, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "              </ul>
            ";
            } else {
                // line 63
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 63, $this->source)), "html", null, true);
                echo "
            ";
            }
            // line 65
            echo "          </div>
        ";
            // line 66
            if (($context["type"] == "error")) {
                // line 67
                echo "          </div>
        ";
            }
            // line 69
            echo "      </div>
      ";
            // line 71
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 71);
            // line 72
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "title_ids", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/misc/status-messages.html.twig";
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
        return array (  153 => 73,  147 => 72,  144 => 71,  141 => 69,  137 => 67,  135 => 66,  132 => 65,  126 => 63,  122 => 61,  113 => 59,  109 => 58,  106 => 57,  104 => 56,  101 => 55,  97 => 53,  91 => 50,  86 => 49,  84 => 48,  81 => 47,  78 => 46,  74 => 44,  72 => 43,  66 => 42,  63 => 41,  61 => 39,  59 => 38,  57 => 36,  55 => 35,  53 => 32,  52 => 29,  50 => 28,  46 => 27,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 * - title_ids: A list of unique ids keyed by message type.
 *
 * @see claro_preprocess_status_messages().
 */
#}
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages-list__wrapper\">
    {% for type, messages in message_list %}
      {%
        set classes = [
          'messages-list__item',
          'messages',
          'messages--' ~ type,
        ]
      %}
      {%
        set is_message_with_title = status_headings[type]
      %}
      {%
        set is_message_with_icon = type in ['error', 'status', 'warning']
      %}

      <div role=\"contentinfo\" aria-labelledby=\"{{ title_ids[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
        {% if type == 'error' %}
          <div role=\"alert\">
        {% endif %}
          {% if is_message_with_title or is_message_with_icon %}
            <div class=\"messages__header\">
              {% if is_message_with_title %}
                <h2 id=\"{{ title_ids[type] }}\" class=\"messages__title\">
                  {{ status_headings[type] }}
                </h2>
              {% endif %}
            </div>
          {% endif %}
          <div class=\"messages__content\">
            {% if messages|length > 1 %}
              <ul class=\"messages__list\">
                {% for message in messages %}
                  <li class=\"messages__item\">{{ message }}</li>
                {% endfor %}
              </ul>
            {% else %}
              {{ messages|first }}
            {% endif %}
          </div>
        {% if type == 'error' %}
          </div>
        {% endif %}
      </div>
      {# Remove type specific classes. #}
      {% set attributes = attributes.removeClass(classes) %}
    {% endfor %}
  </div>
</div>
", "core/themes/claro/templates/misc/status-messages.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/core/themes/claro/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 27, "set" => 29, "if" => 43);
        static $filters = array("escape" => 42, "without" => 42, "length" => 56, "first" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
