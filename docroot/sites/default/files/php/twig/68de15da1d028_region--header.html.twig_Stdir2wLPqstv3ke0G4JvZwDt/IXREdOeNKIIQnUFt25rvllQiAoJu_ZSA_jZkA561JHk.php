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
($context["region"] ?? null))), "position-fixed", "w-100", "bg-white"];
        // line 24
        if (($context["content"] ?? null)) {
            // line 25
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
            yield ">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 logo-menu-container py-2 d-flex justify-content-between align-items-center\">
          ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "

          ";
            // line 32
            yield "          <nav class=\"desktop-nav d-none d-lg-flex align-items-center justify-content-center flex-grow-1\">
            <ul class=\"nav gap-4 m-0 list-unstyled\">
              <li class=\"nav-item\">
                <a class=\"nav-link fs-6 text-uppercase fw-semibold text-dark px-0\" href=\"/solutions\">Solutions</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link fs-6 text-uppercase fw-semibold text-dark px-0\" href=\"/our-work\">Work</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link fs-6 text-uppercase fw-semibold text-dark px-0\" href=\"/about\">About</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link fs-6 text-uppercase fw-semibold text-dark px-0\" href=\"/articles\">Articles</a>
              </li>
            </ul>
          </nav>
          ";
            // line 49
            yield "          <div class=\"desktop-right d-none d-lg-flex align-items-center gap-3\">
            <div class=\"search-icon\">
              <a href=\"/search\" class=\"text-dark\">
                <i class=\"bi bi-search fs-5\" ></i>
              </a>
            </div>

            <div class=\"vertical-separator bg-dark align-self-center\"></div>

            <a href=\"/contact\" class=\"btn btn-outline-dark border-0 bg-transparent rounded-0 shadow-none fs-5 text-uppercase fw-semibold px-4 py-2\">Contact</a>
          </div>

          ";
            // line 62
            yield "          <nav class=\"navbar align-items-end d-lg-none\">
            <div class=\"container-fluid\">
              <div class=\"search-icon mx-4\">
                <a href=\"/search\" class=\"text-dark\">
                  <i class=\"bi bi-search\"></i>
                </a>
              </div>
              <button class=\"navbar-toggler border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <div id=\"navbar-hamburger\" class=\"d-flex flex-column flex-nowrap justify-content-around align-items-end\">
                  <span class=\"icon-bar d-block rounded-1\"></span>
                  <span class=\"icon-bar d-block rounded-1\"></span>
                  <span class=\"icon-bar d-block rounded-1\"></span>
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
        return array (  94 => 62,  80 => 49,  62 => 32,  57 => 29,  49 => 25,  47 => 24,  45 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/region--header.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 24];
        static $filters = ["clean_class" => 18, "escape" => 25];
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
