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

/* modules/contrib/commerce/modules/payment/templates/commerce-payment-total-summary.html.twig */
class __TwigTemplate_4898ffd294481e5efb2f4c226fdd1802 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/commerce/modules/payment/templates/commerce-payment-total-summary.html.twig"));

        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("commerce_payment/payment_summary"), "html", null, true);
        echo "
<div>
  <div class=\"payment-summary-line payment-summary-line-total-paid\">
    <span class=\"payment-summary-line-label\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total paid"));
        echo " </span><span class=\"payment-summary-line-value\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getTotalPaid", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
        echo "</span>
  </div>
  <div class=\"payment-summary-line payment-summary-line-balance\">
    <span class=\"payment-summary-line-label\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Order balance"));
        echo " </span><span class=\"payment-summary-line-value\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order_entity"] ?? null), "getBalance", [], "any", false, false, true, 18), 18, $this->source)), "html", null, true);
        echo "</span>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["order_entity"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/payment/templates/commerce-payment-total-summary.html.twig";
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
        return array (  56 => 18,  48 => 15,  42 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default payments summary template.
 *
 * Available variables:
 * - order_entity: The order entity object.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('commerce_payment/payment_summary') }}
<div>
  <div class=\"payment-summary-line payment-summary-line-total-paid\">
    <span class=\"payment-summary-line-label\">{{ 'Total paid'|t }} </span><span class=\"payment-summary-line-value\">{{ order_entity.getTotalPaid|commerce_price_format }}</span>
  </div>
  <div class=\"payment-summary-line payment-summary-line-balance\">
    <span class=\"payment-summary-line-label\">{{ 'Order balance'|t }} </span><span class=\"payment-summary-line-value\">{{ order_entity.getBalance|commerce_price_format }}</span>
  </div>
</div>
", "modules/contrib/commerce/modules/payment/templates/commerce-payment-total-summary.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/webPlantillaWSYS/web/modules/contrib/commerce/modules/payment/templates/commerce-payment-total-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12, "t" => 15, "commerce_price_format" => 15);
        static $functions = array("attach_library" => 12);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't', 'commerce_price_format'],
                ['attach_library']
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
