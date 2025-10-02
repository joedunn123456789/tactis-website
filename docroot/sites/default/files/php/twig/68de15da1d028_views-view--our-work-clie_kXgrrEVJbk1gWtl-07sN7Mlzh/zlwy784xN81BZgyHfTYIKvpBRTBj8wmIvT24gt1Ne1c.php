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

/* themes/custom/tactis_evolve/templates/views/views-view--our-work-client-logos.html.twig */
class __TwigTemplate_3aa43bafc519ffd7a78d0df7b367009a extends Template
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
        // line 2
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 4
($context["id"] ?? null))), ("view-id-" .         // line 5
($context["id"] ?? null)), ("view-display-id-" .         // line 6
($context["display_id"] ?? null)), "our-work-view", "our-work-block", "py-5", "container-fluid"];
        // line 13
        yield "
<div";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 14), "html", null, true);
        yield ">
  <div class=\"container\">

    ";
        // line 18
        yield "    <div class=\"row align-items-center mb-5\">
      <div class=\"col-12 col-lg-8\">
        <div class=\"our-work-content\">
          <h2 class=\"our-work-title fw-semibold mb-3\">Our Work</h2>
          <div class=\"our-work-teaser mb-4\">
            Expanding boundaries and seeking out solutions for hard-to-solve challenges, the singular goal behind every project we undertake at Tactis is the promise of a truly transformative customer experience.
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-4\">
        <div class=\"our-work-cta text-center text-lg-end\">
          <a href=\"/our-work\" class=\"btn btn-tactis-primary pt-3-5 pb-3 px-3-5 fs-small fw-semibold\">
            Learn More About Our Work
            <i class=\"bi bi-arrow-right ms-2 fw-semibold\"></i>
          </a>
        </div>
      </div>
    </div>

    ";
        // line 38
        yield "    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"client-logos-grid\">
          ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
        yield "
        </div>
      </div>
    </div>

  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "attributes", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/views/views-view--our-work-client-logos.html.twig";
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
        return array (  84 => 41,  79 => 38,  58 => 18,  52 => 14,  49 => 13,  47 => 6,  46 => 5,  45 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/views/views-view--our-work-client-logos.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/views/views-view--our-work-client-logos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2];
        static $filters = ["clean_class" => 4, "escape" => 14];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
