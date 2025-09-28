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

/* themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig */
class __TwigTemplate_de74bd0b84fca667eee325b67e0bd937 extends Template
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
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : ("")), "py-5", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48)) ? ("is_parallax") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49)) ? ("min-vh-66") : ("")), ("bg-" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), ["section-background-" => ""])), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51) == "section-background-black")) ? ("text-light") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52) == "section-background-plum")) ? ("text-light") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53) == "section-background-image")) ? ("z-3") : ("")), "border-bottom", "border-tactis-light", "position-relative"];
        // line 59
        yield "
";
        // line 60
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "id", "bg_lg", "bg_xl", "attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "
";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62) == "section-background-image")) {
            // line 63
            yield "    <style>
      .bg-";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
        background-image: url('";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_lg"] ?? null), "html", null, true);
            yield "');
      }

      .is_parallax .bg-";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
        background-position-y: calc(50% - 1px);
        position: absolute;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
        height: 100%;
      }

      @media screen and (min-width: 1140px){
        .bg-";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
          background-image: url('";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_xl"] ?? null), "html", null, true);
            yield "');
        }

      }
    </style>
    ";
            // line 84
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84)) {
                // line 85
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 85), "html", null, true);
                yield ">
            <div class=\"img-container position-absolute w-100 h-100\">
                <div class=\"bg-";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\"></div>
            </div>
            <div class=\"content-container container position-absolute w-100 h-100\">
                <div class=\"row h-100 animate-scroll animate\">
                    ";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
                yield "
                </div>
            </div>
        </div>
    ";
            } else {
                // line 96
                yield "        <div class=\"container-fluid g-0 bg-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\">
            <div";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 97), "html", null, true);
                yield ">
                <div class=\"container\">
                    <div class=\"row animate-scroll animate\">
                        ";
                // line 100
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
                yield "
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        } else {
            // line 107
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 107), "html", null, true);
            yield ">
        <div class=\"container\">
            <div class=\"row animate-scroll animate\">
                ";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
            yield "
            </div>
        </div>
    </div>
";
        }
        // line 115
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig";
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
        return array (  173 => 115,  165 => 110,  158 => 107,  148 => 100,  142 => 97,  137 => 96,  129 => 91,  122 => 87,  116 => 85,  114 => 84,  106 => 79,  102 => 78,  89 => 68,  83 => 65,  79 => 64,  76 => 63,  74 => 62,  71 => 61,  59 => 60,  56 => 59,  54 => 53,  53 => 52,  52 => 51,  51 => 50,  50 => 49,  49 => 48,  48 => 46,  47 => 45,  46 => 44,  45 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "block" => 60, "if" => 62];
        static $filters = ["clean_class" => 44, "replace" => 50, "escape" => 64, "without" => 91];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
