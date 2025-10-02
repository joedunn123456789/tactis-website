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

/* themes/custom/tactis_evolve/templates/layout/page.html.twig */
class __TwigTemplate_cfa80a191db4bc036db11aef0db278df extends Template
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
        // line 1
        yield "<header class=\"position-fixed w-100 bg-white\"";
        if (($context["bg"] ?? null)) {
            yield " style=\"background-image: url('";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg"] ?? null), "html", null, true);
            yield "');\"";
        }
        yield ">
  ";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_hero_image"] ?? null), "html", null, true);
        yield "
  ";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3), "html", null, true);
        yield "
  ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 4)) {
            // line 5
            yield "    ";
            // line 6
            $context["navClasses"] = ["region", ("region-" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 8
($context["page"] ?? null), "navigation", [], "any", false, false, true, 8)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#region"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 8), "#region", [], "array", false, false, true, 8))), "collapse", "tactis-gradient-bright", "position-relative", "z-500"];
            // line 15
            yield "    <div id=\"navbarToggleExternalContent\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["navClasses"] ?? null)], "method", false, false, true, 15), "html", null, true);
            yield ">
      <div class=\"container\">
        <div class=\"row vh-100\">
          <div class=\"col-12 menu-header d-flex justify-content-between align-items-center\">
            <div class=\"tactis-logo-white\"><a href=\"/\">Tactis, LLC</a></div>
            <nav class=\"navbar\">
              <div class=\"container-fluid\">
                <div class=\"search-icon visually-hidden\">
                  <a href=\"#\">
                    <i class=\"bi bi-search\"></i>
                  </a>
                </div>
                <button class=\"navbar-toggler fw-bolder text-light\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <i class=\"bi bi-x-lg\"></i>
                </button>
              </div>
            </nav>
          </div>
          <div class=\"nav-contact-container d-md-flex justify-content-md-between text-light pt-5 overflow-auto\">
            <div class=\"nav-container fs-3 fw-bold text-lowercase text-center text-md-start\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 34), "tactis_evolve_main_navigation", [], "any", false, false, true, 34), "html", null, true);
            yield "</div>
            <div class=\"contact-container text-center text-md-end mt-5 mt-md-0\">
              <div class=\"mb-5\">";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 36), "tactis_evolve_tactisaddress_nav", [], "any", false, false, true, 36), "html", null, true);
            yield "</div>
              <div class=\"mb-5\">";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 37), "tactis_evolve_letsconnect", [], "any", false, false, true, 37), "html", null, true);
            yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 44
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 44), "html", null, true);
        yield "
  ";
        // line 45
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 45) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 45)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 45))) {
            // line 46
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield " d-flex\">
      ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 47), "html", null, true);
            yield "
      <div class=\"collapse\" id=\"navbarToggleExternalContent\">
        <div class=\"p-4\">
          ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 50), "html", null, true);
            yield "
          ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 51), "html", null, true);
            yield "
        </div>
      </div>
      <div class=\"header-buttons\">
        <a href=\"#\">
          <i class=\"bi bi-search\"></i>
        </a>
        <nav class=\"navbar\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
          </div>
        </nav>
      </div>
      <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
      </div>
    </div>
  ";
        }
        // line 70
        yield "</header>
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 74
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 74) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 74))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 76
        yield "  ";
        // line 77
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 77) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 79
        yield "  ";
        // line 80
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 82
        yield "  <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 83)) {
            // line 84
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 84), "html", null, true);
            yield "
    ";
        }
        // line 86
        yield "    <div class=\"row g-0\">
      ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87)) {
            // line 88
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 89), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 92
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 93), "html", null, true);
        yield "
      </div>
      ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)) {
            // line 96
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 100
        yield "    </div>
  </div>
</main>
";
        // line 103
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 103) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 103)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 103))) {
            // line 104
            yield "  <footer class=\"mt-auto text-small ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 105
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 105) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 105))) {
                // line 106
                yield "      <div class=\"region region-footer-top bg-black text-light py-5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"d-flex flex-column flex-md-row justify-content-md-between align-items-start gap-4\">
              <div class=\"d-flex flex-column col-12 col-md-6 text-center text-md-start\">
                <div class=\"mb-3 d-flex justify-content-center justify-content-md-start\">
                  <div class=\"tactis-logo-white\">
                    <a href=\"/\" title=\"Home\" class=\"d-block\">Tactis, LLC</a>
                  </div>
                </div>
                ";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 116), "html", null, true);
                yield "
              </div>
              <div class=\"col-12 col-md-6 text-center text-md-end\">
                ";
                // line 119
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 119), "html", null, true);
                yield "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            // line 126
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 126)) {
                // line 127
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 127), "html", null, true);
                yield "
    ";
            }
            // line 129
            yield "  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bg", "field_hero_image", "page", "attributes", "b5_top_container", "footer_classes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/layout/page.html.twig";
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
        return array (  272 => 129,  266 => 127,  263 => 126,  253 => 119,  247 => 116,  235 => 106,  233 => 105,  228 => 104,  226 => 103,  221 => 100,  215 => 97,  210 => 96,  208 => 95,  203 => 93,  198 => 92,  192 => 89,  187 => 88,  185 => 87,  182 => 86,  176 => 84,  174 => 83,  169 => 82,  167 => 80,  165 => 79,  163 => 77,  161 => 76,  159 => 74,  154 => 70,  132 => 51,  128 => 50,  122 => 47,  117 => 46,  115 => 45,  110 => 44,  100 => 37,  96 => 36,  91 => 34,  68 => 15,  66 => 8,  65 => 6,  63 => 5,  61 => 4,  57 => 3,  53 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/page.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 6];
        static $filters = ["escape" => 1];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
