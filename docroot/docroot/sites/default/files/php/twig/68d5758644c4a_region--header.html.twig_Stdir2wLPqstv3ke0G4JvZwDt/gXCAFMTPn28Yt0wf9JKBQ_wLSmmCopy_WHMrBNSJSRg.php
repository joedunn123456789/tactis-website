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

/* themes/custom/tactis_evolve/templates/layout/region--header.html.twig */
class __TwigTemplate_8a9583c5b4cde519fcb43e9950bbeddd extends Template
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
        // line 16
        $context["classes"] = ["region", ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["region"] ?? null))), "position-fixed", "w-100"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), "html", null, true);
            yield ">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 logo-menu-container d-flex flex-row flex-nowrap justify-content-between\">
          ";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "

          ";
            // line 31
            yield "          <nav class=\"desktop-nav d-none d-lg-flex align-items-center justify-content-center flex-grow-1\">
            <ul class=\"nav gap-4 m-0 list-unstyled\">
              <li class=\"nav-item\">
                <a class=\"nav-link text-uppercase fw-semibold text-dark px-0\" href=\"/solutions\">Solutions</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-uppercase fw-semibold text-dark px-0\" href=\"/our-work\">Work</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-uppercase fw-semibold text-dark px-0\" href=\"/about\">About</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-uppercase fw-semibold text-dark px-0\" href=\"/articles\">Articles</a>
              </li>
            </ul>
          </nav>
          ";
            // line 48
            yield "          <div class=\"desktop-right d-none d-lg-flex align-items-center gap-3\">
            <div class=\"search-icon\">
              <a href=\"/search\">
                <i class=\"bi bi-search\"></i>
              </a>
            </div>

            <div class=\"vertical-separator\"></div>

            <a href=\"/contact\" class=\"btn btn-outline-dark text-uppercase fw-semibold px-4 py-2\">Contact</a>
          </div>

          ";
            // line 61
            yield "          <nav class=\"navbar align-items-end d-lg-none\">
            <div class=\"container-fluid\">
              <div class=\"search-icon\">
                <a href=\"/search\">
                  <i class=\"bi bi-search\"></i>
                </a>
              </div>
              <button class=\"navbar-toggler border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <div id=\"navbar-hamburger\" class=\"d-flex flex-column flex-nowrap justify-content-around align-items-end\">
                  <span class=\"icon-bar d-block\"></span>
                  <span class=\"icon-bar d-block\"></span>
                  <span class=\"icon-bar d-block\"></span>
                </div>
              </button>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "content", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/layout/region--header.html.twig";
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
        return array (  94 => 61,  80 => 48,  62 => 31,  57 => 28,  49 => 24,  47 => 23,  45 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/region--header.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 23];
        static $filters = ["clean_class" => 18, "escape" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
