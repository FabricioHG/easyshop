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

/* themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig */
class __TwigTemplate_b4aa78ad487162d48fe94d82a79ce71d extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig"));

        // line 1
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", 1)->unwrap();
        // line 2
        yield "
<div";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\">
      <span class=\"cart-block--summary__icon\">
        ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["svg"]->getTemplateForMacro("macro_getIcon", $context, 7, $this->getSourceContext())->macro_getIcon(...["basket", 18, 18, "me-1"]));
        yield "
      </span>
      <span class=\"cart-block--summary__count\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["count_text"] ?? null), "html", null, true);
        yield "</span>
    </a>
  </div>
  ";
        // line 12
        if (($context["content"] ?? null)) {
            // line 13
            yield "  <div class=\"cart-block--contents bg-primary text-white mt-3\">
    <div class=\"cart-block--contents__inner p-4\">
      <div class=\"fw-bold mb-3\">";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shopping bag"));
            yield " / ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["count_text"] ?? null), "html", null, true);
            yield "</div>
      <div class=\"cart-block--contents__items\">
        ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "
      </div>
      <div class=\"cart-block--contents__links mt-3\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 21
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($context["link"], ["#attributes" => ["class" => ["btn", "btn-outline-white", "w-100"]]]), "html", null, true);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      </div>
    </div>
    <a type=\"button\" class=\"cart-block--link__expand m-3 mt-4 position-absolute top-0 end-0\" href=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" aria-label=\"Close\">
      ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["svg"]->getTemplateForMacro("macro_getIcon", $context, 26, $this->getSourceContext())->macro_getIcon(...["x", 20, 20]));
            yield "
    </a>
  </div>
  ";
        }
        // line 30
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "url", "count_text", "content", "links"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig";
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
        return array (  120 => 30,  113 => 26,  109 => 25,  105 => 23,  96 => 21,  92 => 20,  86 => 17,  79 => 15,  75 => 13,  73 => 12,  67 => 9,  62 => 7,  57 => 5,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@belgrade/macros.twig\" as svg %}

<div{{ attributes }}>
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"{{ url }}\">
      <span class=\"cart-block--summary__icon\">
        {{ svg.getIcon('basket', 18, 18, 'me-1') }}
      </span>
      <span class=\"cart-block--summary__count\">{{ count_text }}</span>
    </a>
  </div>
  {% if content %}
  <div class=\"cart-block--contents bg-primary text-white mt-3\">
    <div class=\"cart-block--contents__inner p-4\">
      <div class=\"fw-bold mb-3\">{{ 'Shopping bag'|t }} / {{ count_text }}</div>
      <div class=\"cart-block--contents__items\">
        {{ content }}
      </div>
      <div class=\"cart-block--contents__links mt-3\">
        {% for link in links %}
          {{ link|merge({ '#attributes': { 'class': [ 'btn', 'btn-outline-white', 'w-100'] } }) }}
        {% endfor %}
      </div>
    </div>
    <a type=\"button\" class=\"cart-block--link__expand m-3 mt-4 position-absolute top-0 end-0\" href=\"{{ url }}\" aria-label=\"Close\">
      {{ svg.getIcon('x', 20, 20) }}
    </a>
  </div>
  {% endif %}
</div>
", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/easyshop.com.mx/web/themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "if" => 12, "for" => 20);
        static $filters = array("escape" => 3, "t" => 15, "merge" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'for'],
                ['escape', 't', 'merge'],
                [],
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
