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

/* themes/custom/tactis_evolve/templates/user/username.html.twig */
class __TwigTemplate_7371b688e4307f42c567fa965f1646e0 extends Template
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
        // line 25
        yield "
";
        // line 26
        if ((($context["uid"] ?? null) == 0)) {
            yield "f
  Visitor
";
        } else {
            // line 29
            yield "  ";
            $context["fullname"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["account"] ?? null), "field_first_name", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["account"] ?? null), "field_last_name", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29));
            // line 30
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["account"] ?? null), "field_first_name", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30)) {
                // line 31
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["fullname"] ?? null), "html", null, true);
                yield "
  ";
            } else {
                // line 33
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
                yield "
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["uid", "account", "name"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/user/username.html.twig";
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
        return array (  65 => 33,  59 => 31,  56 => 30,  53 => 29,  47 => 26,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/user/username.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/user/username.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 26, "set" => 29];
        static $filters = ["raw" => 29, "escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['raw', 'escape'],
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
