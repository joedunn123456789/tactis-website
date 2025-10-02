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

/* themes/custom/tactis_evolve/templates/field/field--node--title.html.twig */
class __TwigTemplate_ab2c205de6b74e9c823eb94a8fdefe73 extends Template
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
        // line 28
        if ( !($context["is_inline"] ?? null)) {
            // line 29
            yield "  ";
            yield from $this->loadTemplate("field.html.twig", "themes/custom/tactis_evolve/templates/field/field--node--title.html.twig", 29)->unwrap()->yield($context);
        } else {
            // line 31
            yield "  ";
            // line 32
            yield "  ";
            // line 33
            $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(            // line 35
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(            // line 36
($context["field_type"] ?? null))), ("field--label-" .             // line 37
($context["label_display"] ?? null)), "display-4", "fw-bold"];
            // line 43
            $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(            // line 45
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(            // line 46
($context["field_type"] ?? null))), ("field--label-" .             // line 47
($context["label_display"] ?? null)), "display-4", "fw-bold"];
            // line 52
            yield "<h1";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
            yield ">";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 55), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "</h1>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_inline", "field_name", "field_type", "label_display", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/field/field--node--title.html.twig";
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
        return array (  79 => 57,  72 => 55,  68 => 53,  64 => 52,  62 => 47,  61 => 46,  60 => 45,  59 => 43,  57 => 37,  56 => 36,  55 => 35,  54 => 33,  52 => 32,  50 => 31,  46 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/field/field--node--title.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/field/field--node--title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 28, "include" => 29, "set" => 33, "for" => 53];
        static $filters = ["clean_class" => 35, "escape" => 52];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'set', 'for'],
                ['clean_class', 'escape'],
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
