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

/* themes/custom/tactis_evolve/templates/paragraphs/fields/field--paragraph--field-actions--calls-to-action.html.twig */
class __TwigTemplate_0364255e2f3fbda812cae7ba3bbc8849 extends Template
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
        // line 41
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["field_type"] ?? null))), ("field--label-" .         // line 45
($context["label_display"] ?? null)), (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : ("")), "field__items", "container"];
        // line 51
        yield "

";
        // line 53
        $context["myCols"] = [];
        // line 54
        yield "
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            yield "    ";
            $context["myCols"] = Twig\Extension\CoreExtension::merge(($context["myCols"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 56)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 56), "#paragraph", [], "array", false, false, true, 56)), "field_location", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56) => $context["item"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
<div";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), "html", null, true);
        yield ">
    <div class=\"row align-content-md-around\">
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["myCols"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["top-start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "top-start", [], "array", false, false, true, 61)), "content", [], "any", false, false, true, 61), "html", null, true);
        yield "</div>
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["myCols"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["top-center"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "top-center", [], "array", false, false, true, 62)), "content", [], "any", false, false, true, 62), "html", null, true);
        yield "</div>
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["myCols"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["top-end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "top-end", [], "array", false, false, true, 63)), "content", [], "any", false, false, true, 63), "html", null, true);
        yield "</div>
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["myCols"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["bottom-start"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "bottom-start", [], "array", false, false, true, 64)), "content", [], "any", false, false, true, 64), "html", null, true);
        yield "</div>
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["myCols"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["bottom-center"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "bottom-center", [], "array", false, false, true, 65)), "content", [], "any", false, false, true, 65), "html", null, true);
        yield "</div>
        <div class=\"col col-12 col-md-6 col-xl-4\">";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["myCols"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["bottom-end"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["myCols"] ?? null), "bottom-end", [], "array", false, false, true, 66)), "content", [], "any", false, false, true, 66), "html", null, true);
        yield "</div>
    </div>
</div>


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "items", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/paragraphs/fields/field--paragraph--field-actions--calls-to-action.html.twig";
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
        return array (  98 => 66,  94 => 65,  90 => 64,  86 => 63,  82 => 62,  78 => 61,  73 => 59,  70 => 58,  63 => 56,  59 => 55,  56 => 54,  54 => 53,  50 => 51,  48 => 46,  47 => 45,  46 => 44,  45 => 43,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/paragraphs/fields/field--paragraph--field-actions--calls-to-action.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/paragraphs/fields/field--paragraph--field-actions--calls-to-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "for" => 55];
        static $filters = ["clean_class" => 43, "merge" => 56, "escape" => 59];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['clean_class', 'merge', 'escape'],
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
