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
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . ($context["b5_navbar_schema"] ?? null))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_navbar_bg_schema"] ?? null))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . ($context["b5_footer_schema"] ?? null))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_footer_bg_schema"] ?? null))) : (" ")));
        // line 58
        yield "
<header class=\"position-fixed w-100\"";
        // line 59
        if (($context["bg"] ?? null)) {
            yield " style=\"background-image: url('";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg"] ?? null), "html", null, true);
            yield "');\"";
        }
        yield ">
  ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_hero_image"] ?? null), "html", null, true);
        yield "
  ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 61), "html", null, true);
        yield "

  ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 63)) {
            // line 64
            yield "    ";
            // line 65
            $context["navClasses"] = ["region", ("region-" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 67
($context["page"] ?? null), "navigation", [], "any", false, false, true, 67)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#region"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 67), "#region", [], "array", false, false, true, 67))), "collapse", "tactis-gradient-bright", "position-relative", "z-500"];
            // line 74
            yield "    <div id=\"navbarToggleExternalContent\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["navClasses"] ?? null)], "method", false, false, true, 74), "html", null, true);
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
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 93), "tactis_evolve_main_navigation", [], "any", false, false, true, 93), "html", null, true);
            yield "</div>
            <div class=\"contact-container text-center text-md-end mt-5 mt-md-0\">
              <div class=\"mb-5\">";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 95), "tactis_evolve_tactisaddress_nav", [], "any", false, false, true, 95), "html", null, true);
            yield "</div>
              <div class=\"mb-5\">";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 96), "tactis_evolve_letsconnect", [], "any", false, false, true, 96), "html", null, true);
            yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 103
        yield "
  ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 104), "html", null, true);
        yield "

  ";
        // line 106
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 106) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 106)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 106))) {
            // line 107
            yield "  <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield " d-flex\">
    ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 108), "html", null, true);
            yield "

    <div class=\"collapse\" id=\"navbarToggleExternalContent\">
      <div class=\"p-4\">
        ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 112), "html", null, true);
            yield "
        ";
            // line 113
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 113), "html", null, true);
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
        // line 136
        yield "
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 141
        yield "
  ";
        // line 143
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 143))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 145
        yield "
  ";
        // line 147
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 149
        yield "
  ";
        // line 151
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 151) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 151))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 151) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 151))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 153
        yield "

  <div class=\"";
        // line 155
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 156)) {
            // line 157
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 157), "html", null, true);
            yield "
    ";
        }
        // line 159
        yield "    <div class=\"row g-0\">
      ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 162
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 162), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 165
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 166
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 166), "html", null, true);
        yield "
      </div>
      ";
        // line 168
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 168)) {
            // line 169
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 170
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 173
        yield "    </div>
  </div>

</main>

";
        // line 178
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 178) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 178)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 178))) {
            // line 179
            yield "  <footer class=\"mt-auto text-small ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
            yield "\">

    ";
            // line 182
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 182) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 182))) {
                // line 183
                yield "      <div class=\"region region-footer-top bg-black text-light py-5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"d-md-flex flex-md-nowrap justify-content-md-between align-items-md-start\">
              ";
                // line 188
                yield "              <div class=\"d-flex flex-column col-12 col-md-6\">
                ";
                // line 190
                yield "                <div class=\"mb-3\">
                  <div class=\"tactis-logo-white\">
                    <a href=\"/\" title=\"Home\">Tactis, LLC</a>
                  </div>
                </div>
                ";
                // line 196
                yield "                ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 196), "html", null, true);
                yield "
              </div>

              ";
                // line 200
                yield "              <div class=\"col-12 col-md-6 text-end\">
                ";
                // line 201
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 201), "html", null, true);
                yield "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            // line 208
            yield "
    ";
            // line 210
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 210)) {
                // line 211
                yield "      <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
                yield "\">
        ";
                // line 212
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 212), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 215
            yield "
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "bg", "field_hero_image", "page", "attributes", "b5_top_container"]);        yield from [];
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
        return array (  325 => 215,  319 => 212,  314 => 211,  311 => 210,  308 => 208,  298 => 201,  295 => 200,  288 => 196,  281 => 190,  278 => 188,  272 => 183,  269 => 182,  263 => 179,  261 => 178,  254 => 173,  248 => 170,  243 => 169,  241 => 168,  236 => 166,  231 => 165,  225 => 162,  220 => 161,  218 => 160,  215 => 159,  209 => 157,  207 => 156,  203 => 155,  199 => 153,  197 => 151,  194 => 149,  192 => 147,  189 => 145,  187 => 143,  184 => 141,  178 => 136,  152 => 113,  148 => 112,  141 => 108,  136 => 107,  134 => 106,  129 => 104,  126 => 103,  116 => 96,  112 => 95,  107 => 93,  84 => 74,  82 => 67,  81 => 65,  79 => 64,  77 => 63,  72 => 61,  68 => 60,  60 => 59,  57 => 58,  55 => 56,  54 => 55,  53 => 54,  52 => 53,  49 => 51,  47 => 49,  46 => 48,  45 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/page.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 46, "if" => 59];
        static $filters = ["escape" => 59];
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
