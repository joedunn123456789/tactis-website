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

/* themes/custom/tactis_evolve/templates/paragraphs/paragraph--action.html.twig */
class __TwigTemplate_4796b703d1084e84e92fa6d62a71b7c3 extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44))), ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : ("")), "bg-black", "bg-opacity-75", "p-3", "my-5", "my-xl-5", "my-md-4", "text-light", "d-flex", "flex-column", "justify-content-center", "text-light"];
        // line 60
        yield "
";
        // line 61
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 62), "html", null, true);
        yield ">
        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 70
        yield "    </div>
";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "            <h5 class=\"action-title\"><i class=\"pe-3 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_icon_class", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), "html", null, true);
        yield "\"></i>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), "html", null, true);
        yield "</h5>
            <div class=\"border-top border-white\">&nbsp;</div>
            <div class=\"action-description text-small pt-3\">
                ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_rich_text", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67));
        yield "
            </div>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/paragraphs/paragraph--action.html.twig";
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
        return array (  95 => 67,  86 => 64,  79 => 63,  73 => 70,  71 => 63,  66 => 62,  54 => 61,  51 => 60,  49 => 46,  48 => 45,  47 => 44,  46 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/paragraphs/paragraph--action.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/paragraphs/paragraph--action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "block" => 61];
        static $filters = ["clean_class" => 44, "escape" => 62, "raw" => 67];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'raw'],
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
