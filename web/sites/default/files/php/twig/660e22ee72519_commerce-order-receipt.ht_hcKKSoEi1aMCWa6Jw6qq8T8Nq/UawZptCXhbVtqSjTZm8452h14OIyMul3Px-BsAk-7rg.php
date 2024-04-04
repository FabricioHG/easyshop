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

/* modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig */
class __TwigTemplate_f2cc4871a61f93be14693a4ddc7fd083 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_items' => [$this, 'block_order_items'],
            'shipping_information' => [$this, 'block_shipping_information'],
            'billing_information' => [$this, 'block_billing_information'],
            'payment_method' => [$this, 'block_payment_method'],
            'additional_information' => [$this, 'block_additional_information'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig"));

        // line 23
        echo "<table style=\"margin: 15px auto 0 auto; max-width: 768px; font-family: arial,sans-serif\">
  <tbody>
  <tr>
    <td>
      <table style=\"margin-left: auto; margin-right: auto; max-width: 768px; text-align: center;\">
        <tbody>
        <tr>
          <td>
            <a href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\" style=\"color: #0e69be; text-decoration: none; font-weight: bold; margin-top: 15px;\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getStore", [], "any", false, false, true, 31), "label", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</a>
          </td>
        </tr>
        </tbody>
      </table>
      <table style=\"text-align: center; min-width: 450px; margin: 5px auto 0 auto; border: 1px solid #cccccc; border-radius: 5px; padding: 40px 30px 30px 30px;\">
        <tbody>
        <tr>
          <td style=\"font-size: 30px; padding-bottom: 30px\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Order Confirmation"));
        echo "</td>
        </tr>
        <tr>
          <td style=\"font-weight: bold; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
            ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Order #@number details:", ["@number" => twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getOrderNumber", [], "any", false, false, true, 43)]));
        echo "
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 48
        $this->displayBlock('order_items', $context, $blocks);
        // line 65
        echo "          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 69
        if ((($context["billing_information"] ?? null) || ($context["shipping_information"] ?? null))) {
            // line 70
            echo "            <table style=\"width: 100%; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc;\">
              <tbody>
              <tr>
                ";
            // line 73
            if (($context["shipping_information"] ?? null)) {
                // line 74
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shipping Information"));
                echo "</td>
                ";
            }
            // line 76
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 77
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Billing Information"));
                echo "</td>
                ";
            }
            // line 79
            echo "              </tr>
              <tr style=\"vertical-align: top;\">
                ";
            // line 81
            if (($context["shipping_information"] ?? null)) {
                // line 82
                echo "                  <td>
                    ";
                // line 83
                $this->displayBlock('shipping_information', $context, $blocks);
                // line 86
                echo "                  </td>
                ";
            }
            // line 88
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 89
                echo "                  <td>
                    ";
                // line 90
                $this->displayBlock('billing_information', $context, $blocks);
                // line 93
                echo "                  </td>
                ";
            }
            // line 95
            echo "              </tr>
              ";
            // line 96
            if (($context["payment_method"] ?? null)) {
                // line 97
                echo "                <tr>
                  <td style=\"font-weight: bold; margin-top: 10px;\">";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Payment Method"));
                echo "</td>
                </tr>
                <tr>
                  <td>
                    ";
                // line 102
                $this->displayBlock('payment_method', $context, $blocks);
                // line 105
                echo "                  </td>
                </tr>
              ";
            }
            // line 108
            echo "              </tbody>
            </table>
            ";
        }
        // line 111
        echo "          </td>
        </tr>
        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subtotal: @subtotal", ["@subtotal" => $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, true, 116), 116, $this->source))]));
        echo "
            </p>
          </td>
        </tr>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "adjustments", [], "any", false, false, true, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 121
            echo "        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo ": ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["adjustment"], "total", [], "any", false, false, true, 124), 124, $this->source)), "html", null, true);
            echo "
            </p>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        <tr>
          <td>
            <p style=\"font-size: 24px; padding-top: 15px; padding-bottom: 5px;\">
              ";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Order Total: @total", ["@total" => $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getTotalPrice", [], "any", false, false, true, 132), 132, $this->source))]));
        echo "
            </p>
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 138
        $this->displayBlock('additional_information', $context, $blocks);
        // line 141
        echo "          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["order_entity", "billing_information", "shipping_information", "payment_method", "totals"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 48
    public function block_order_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_items"));

        // line 49
        echo "            <table style=\"padding-top: 15px; padding-bottom:15px; width: 100%\">
              <tbody style=\"text-align: left;\">
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getItems", [], "any", false, false, true, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 52
            echo "              <tr>
                <td>
                  ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["order_item"], "getQuantity", [], "any", false, false, true, 54), 54, $this->source)), "html", null, true);
            echo " x
                </td>
                <td>
                  <span>";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["order_item"], "label", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</span>
                  <span style=\"float: right;\">";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["order_item"], "getTotalPrice", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
            echo "</span>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              </tbody>
            </table>
            ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 83
    public function block_shipping_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shipping_information"));

        // line 84
        echo "                      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["shipping_information"] ?? null), 84, $this->source), "html", null, true);
        echo "
                    ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 90
    public function block_billing_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "billing_information"));

        // line 91
        echo "                      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["billing_information"] ?? null), 91, $this->source), "html", null, true);
        echo "
                    ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 102
    public function block_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_method"));

        // line 103
        echo "                      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["payment_method"] ?? null), 103, $this->source), "html", null, true);
        echo "
                    ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 138
    public function block_additional_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additional_information"));

        // line 139
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Thank you for your order!"));
        echo "
            ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig";
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
        return array (  345 => 139,  338 => 138,  328 => 103,  321 => 102,  311 => 91,  304 => 90,  294 => 84,  287 => 83,  278 => 62,  268 => 58,  264 => 57,  258 => 54,  254 => 52,  250 => 51,  246 => 49,  239 => 48,  223 => 141,  221 => 138,  212 => 132,  207 => 129,  194 => 124,  189 => 121,  185 => 120,  178 => 116,  171 => 111,  166 => 108,  161 => 105,  159 => 102,  152 => 98,  149 => 97,  147 => 96,  144 => 95,  140 => 93,  138 => 90,  135 => 89,  132 => 88,  128 => 86,  126 => 83,  123 => 82,  121 => 81,  117 => 79,  111 => 77,  108 => 76,  102 => 74,  100 => 73,  95 => 70,  93 => 69,  87 => 65,  85 => 48,  77 => 43,  70 => 39,  57 => 31,  47 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the order receipt.
 *
 * Available variables:
 * - order_entity: The order entity.
 * - billing_information: The billing information.
 * - shipping_information: The shipping information.
 * - payment_method: The payment method.
 * - totals: An array of order totals values with the following keys:
 *   - subtotal: The order subtotal price.
 *   - adjustments: An array of adjustment totals:
 *     - type: The adjustment type.
 *     - label: The adjustment label.
 *     - total: The adjustment total price.
 *     - weight: The adjustment weight, taken from the adjustment type.
 *   - total: The order total price.
 *
 * @ingroup themeable
 */
#}
<table style=\"margin: 15px auto 0 auto; max-width: 768px; font-family: arial,sans-serif\">
  <tbody>
  <tr>
    <td>
      <table style=\"margin-left: auto; margin-right: auto; max-width: 768px; text-align: center;\">
        <tbody>
        <tr>
          <td>
            <a href=\"{{ url('<front>') }}\" style=\"color: #0e69be; text-decoration: none; font-weight: bold; margin-top: 15px;\">{{ order_entity.getStore.label }}</a>
          </td>
        </tr>
        </tbody>
      </table>
      <table style=\"text-align: center; min-width: 450px; margin: 5px auto 0 auto; border: 1px solid #cccccc; border-radius: 5px; padding: 40px 30px 30px 30px;\">
        <tbody>
        <tr>
          <td style=\"font-size: 30px; padding-bottom: 30px\">{{ 'Order Confirmation'|t }}</td>
        </tr>
        <tr>
          <td style=\"font-weight: bold; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
            {{ 'Order #@number details:'|t({'@number': order_entity.getOrderNumber}) }}
          </td>
        </tr>
        <tr>
          <td>
            {% block order_items %}
            <table style=\"padding-top: 15px; padding-bottom:15px; width: 100%\">
              <tbody style=\"text-align: left;\">
              {% for order_item in order_entity.getItems %}
              <tr>
                <td>
                  {{ order_item.getQuantity|number_format }} x
                </td>
                <td>
                  <span>{{ order_item.label }}</span>
                  <span style=\"float: right;\">{{ order_item.getTotalPrice|commerce_price_format }}</span>
                </td>
              </tr>
              {% endfor %}
              </tbody>
            </table>
            {% endblock %}
          </td>
        </tr>
        <tr>
          <td>
            {% if (billing_information or shipping_information) %}
            <table style=\"width: 100%; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc;\">
              <tbody>
              <tr>
                {% if shipping_information %}
                  <td style=\"padding-top: 5px; font-weight: bold;\">{{ 'Shipping Information'|t }}</td>
                {% endif %}
                {% if billing_information %}
                  <td style=\"padding-top: 5px; font-weight: bold;\">{{ 'Billing Information'|t }}</td>
                {% endif %}
              </tr>
              <tr style=\"vertical-align: top;\">
                {% if shipping_information %}
                  <td>
                    {% block shipping_information %}
                      {{ shipping_information }}
                    {% endblock %}
                  </td>
                {% endif %}
                {% if billing_information %}
                  <td>
                    {% block billing_information %}
                      {{ billing_information }}
                    {% endblock %}
                  </td>
                {% endif %}
              </tr>
              {% if payment_method %}
                <tr>
                  <td style=\"font-weight: bold; margin-top: 10px;\">{{ 'Payment Method'|t }}</td>
                </tr>
                <tr>
                  <td>
                    {% block payment_method %}
                      {{ payment_method }}
                    {% endblock %}
                  </td>
                </tr>
              {% endif %}
              </tbody>
            </table>
            {% endif %}
          </td>
        </tr>
        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              {{ 'Subtotal: @subtotal'|t({'@subtotal': totals.subtotal|commerce_price_format}) }}
            </p>
          </td>
        </tr>
        {% for adjustment in totals.adjustments %}
        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              {{ adjustment.label }}: {{ adjustment.total|commerce_price_format }}
            </p>
          </td>
        </tr>
        {% endfor %}
        <tr>
          <td>
            <p style=\"font-size: 24px; padding-top: 15px; padding-bottom: 5px;\">
              {{ 'Order Total: @total'|t({'@total': order_entity.getTotalPrice|commerce_price_format}) }}
            </p>
          </td>
        </tr>
        <tr>
          <td>
            {% block additional_information %}
              {{ 'Thank you for your order!'|t }}
            {% endblock %}
          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
", "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 48, "if" => 69, "for" => 120);
        static $filters = array("escape" => 31, "t" => 39, "commerce_price_format" => 116, "number_format" => 54);
        static $functions = array("url" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
                ['escape', 't', 'commerce_price_format', 'number_format'],
                ['url']
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
