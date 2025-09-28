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

/* themes/custom/tactis_evolve/templates/layout/layout--onecol.html.twig */
class __TwigTemplate_a31e34694d876cb5014d617e47ab12ae extends Template
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
        // line 13
        $context["classes"] = ["layout", "layout--onecol", "pt-5", "pb-3", ((CoreExtension::inFilter("section-dark", CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["attributes"] ?? null), "class", [], "any", false, false, true, 18))) ? ("text-light") : ("")), ((CoreExtension::inFilter("section-dark", CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["attributes"] ?? null), "class", [], "any", false, false, true, 19))) ? ("bg-black") : (""))];
        // line 22
        yield "
";
        // line 23
        $context["regionClasses"] = ["layout__region", "layout__region--content", ((CoreExtension::inFilter("section-dark", CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["attributes"] ?? null), "class", [], "any", false, false, true, 26))) ? ("container") : ("")), ((CoreExtension::inFilter("section-light", CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["attributes"] ?? null), "class", [], "any", false, false, true, 27))) ? ("container") : (""))];
        // line 30
        if (($context["content"] ?? null)) {
            // line 31
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), "html", null, true);
            yield ">
    <div ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 32), "addClass", [($context["regionClasses"] ?? null)], "method", false, false, true, 32), "html", null, true);
            yield ">
      <div class=\"row\">
        ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 34), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "region_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/layout/layout--onecol.html.twig";
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
        return array (  67 => 34,  62 => 32,  57 => 31,  55 => 30,  53 => 27,  52 => 26,  51 => 23,  48 => 22,  46 => 19,  45 => 18,  44 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/layout--onecol.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/layout--onecol.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 13, "if" => 30];
        static $filters = ["escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
