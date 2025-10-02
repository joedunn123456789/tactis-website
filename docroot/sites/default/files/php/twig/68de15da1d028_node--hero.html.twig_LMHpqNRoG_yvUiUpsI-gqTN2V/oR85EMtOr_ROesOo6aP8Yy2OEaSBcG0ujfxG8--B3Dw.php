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

/* themes/custom/tactis_evolve/templates/content/node--hero.html.twig */
class __TwigTemplate_c3270d5c2df8412d38ed262f3e9a5f15 extends Template
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
        // line 71
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "field_hero_options", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), "d-flex", "flex-column", "justify-content-end"];
        // line 85
        yield "
";
        // line 86
        $context["newAttributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 87
        yield "
";
        // line 89
        $context["titleTextClasses"] = ["title-text", "mt-5", "mt-md-0", (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 93
($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 93), 0, [], "any", false, false, true, 93))) ? ("order-md-1") : ("")), (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 94
($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 94), 0, [], "any", false, false, true, 94))) ? ("mw-100") : ("")), (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 95
($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95))) ? ("mw-md-70") : ("")), ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 96), 0, [], "any", false, false, true, 96))) ? ("mw-lg") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 97
($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97) != "hero-title")) ? ("display-5") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98) != "hero-title")) ? ("fw-semibold") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 99), "value", [], "any", false, false, true, 99) != "hero-title")) ? ("pe-md-5") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 100
($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100) != "hero-title")) ? ("text-lowercase") : (""))];
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap5/node"), "html", null, true);
        yield "
";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap5/bootstrap_icons"), "html", null, true);
        yield "
<div";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 105), "html", null, true);
        yield ">
  ";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_options", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106) == "hero-split")) {
            // line 107
            yield "    ";
            // line 108
            yield "    <div class=\"container py-4 py-md-5\" data-bs-theme=\"light\">
      <div class=\"row align-items-center g-3 g-md-4\">
        <div class=\"col-12 col-md-6\">
          ";
            // line 112
            yield "          <div class=\"hero-tag text-primary text-uppercase fw-semibold mb-3 mb-md-4\">
            Welcome to Tactis
          </div>

          ";
            // line 117
            yield "          <div class=\"hero-headline mb-3 mb-md-4\">
            ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 118) == "article")) {
                // line 119
                yield "              <div class=\"return-to-articles pb-5\"><a class=\"link-tactis-primary link-underline-opacity-0 fw-semibold\" href=\"/articles\"><i class=\"bi bi-arrow-left\"></i> Back to articles</a></div>
            ";
            }
            // line 121
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 121), "value", [], "any", false, false, true, 121) == "hero-title")) {
                // line 122
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 124
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 124), "html", null, true);
            yield "
          </div>

          ";
            // line 128
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_arrow", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128) == 1)) {
                // line 129
                yield "            <a href=\"/articles\" class=\"hero-button btn btn-primary btn-lg fw-semibold d-inline-flex align-items-center mt-3 mt-md-4\">
              View Full Series
              <img src=\"themes/custom/images/tactis-button-arrow.svg\" class=\"ms-2\" width=\"16\" height=\"16\" alt=\"Arrow\">
            </a>
          ";
            }
            // line 134
            yield "        </div>

        <div class=\"col-12 col-md-6\">
          ";
            // line 137
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 137), 0, [], "any", false, false, true, 137))) {
                // line 138
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_use_animation", [], "any", false, false, true, 138), "value", [], "any", false, false, true, 138) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 138)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 138), 0, [], "array", false, false, true, 138))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 138)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 138), 0, [], "array", false, false, true, 138)), "#media", [], "array", false, false, true, 138)), "field_media_json", [], "any", false, false, true, 138), "value", [], "any", false, false, true, 138))) {
                    // line 139
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tactis_evolve/lottie"), "html", null, true);
                    yield "
              <div class=\"hero-image-container position-relative w-100\">
                <div id=\"hero-image-animation\" class=\"lottie-animation\" data-animation=\"";
                    // line 141
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 141)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 141), 0, [], "array", false, false, true, 141))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 141)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 141), 0, [], "array", false, false, true, 141)), "#media", [], "array", false, false, true, 141)), "field_media_json", [], "any", false, false, true, 141), "value", [], "any", false, false, true, 141), "html", null, true);
                    yield "\"></div>
              </div>
            ";
                } else {
                    // line 144
                    yield "              <div class=\"hero-image-container\">
                ";
                    // line 145
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 145), "html", null, true);
                    yield "
              </div>
            ";
                }
                // line 148
                yield "          ";
            }
            // line 149
            yield "        </div>
      </div>
    </div>

  ";
        } else {
            // line 154
            yield "    ";
            // line 155
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 155), 0, [], "any", false, false, true, 155))) {
                // line 156
                yield "      <div class=\"d-md-flex flex-md-row justify-content-md-between align-items-md-center text-center text-md-start\">
      ";
                // line 157
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_use_animation", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 157)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 157), 0, [], "array", false, false, true, 157))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 157)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 157), 0, [], "array", false, false, true, 157)), "#media", [], "array", false, false, true, 157)), "field_media_json", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157))) {
                    // line 158
                    yield "        ";
                    $context["titleTextClasses"] = Twig\Extension\CoreExtension::merge(($context["titleTextClasses"] ?? null), ["animate-burst"]);
                    // line 159
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tactis_evolve/lottie"), "html", null, true);
                    yield "
        <div class=\"hero-image-container order-md-2 d-inline-block position-relative w-100 animate-header-lottie\">
          <div id=\"hero-image-animation\" class=\"lottie-animation\" data-animation=\"";
                    // line 161
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 161)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 161), 0, [], "array", false, false, true, 161))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 161)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 161), 0, [], "array", false, false, true, 161)), "#media", [], "array", false, false, true, 161)), "field_media_json", [], "any", false, false, true, 161), "value", [], "any", false, false, true, 161), "html", null, true);
                    yield "\"></div>
        </div>
      ";
                } else {
                    // line 164
                    yield "        <div class=\"hero-image-container order-md-2 d-inline-block\">
          ";
                    // line 165
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 165), "html", null, true);
                    yield "
        </div>
      ";
                }
                // line 168
                yield "    ";
            }
            // line 169
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newAttributes"] ?? null), "addClass", [($context["titleTextClasses"] ?? null)], "method", false, false, true, 169), "html", null, true);
            yield ">
      ";
            // line 170
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 170) == "article")) {
                // line 171
                yield "        <div class=\"return-to-articles pb-3\"><a class=\"text-primary text-decoration-none fw-semibold\" href=\"/articles\"><i class=\"bi bi-arrow-left\"></i> Back to articles</a></div>
      ";
            }
            // line 173
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 173), "value", [], "any", false, false, true, 173) == "hero-title")) {
                // line 174
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
      ";
            }
            // line 176
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 176), "html", null, true);
            yield "
    </div>
    ";
            // line 178
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 178), 0, [], "any", false, false, true, 178))) {
                // line 179
                yield "      </div>
    ";
            }
            // line 181
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_arrow", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181) == 1)) {
                // line 182
                yield "      <div class=\"get-started d-flex align-items-center py-3\">
        <span>Let's get started</span><i class=\"bi bi-arrow-down-circle ps-3 fs-5\"></i>
      </div>
    ";
            }
            // line 186
            yield "  ";
        }
        // line 187
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "attributes", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/content/node--hero.html.twig";
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
        return array (  255 => 187,  252 => 186,  246 => 182,  243 => 181,  239 => 179,  237 => 178,  231 => 176,  225 => 174,  222 => 173,  218 => 171,  216 => 170,  211 => 169,  208 => 168,  202 => 165,  199 => 164,  193 => 161,  187 => 159,  184 => 158,  182 => 157,  179 => 156,  176 => 155,  174 => 154,  167 => 149,  164 => 148,  158 => 145,  155 => 144,  149 => 141,  143 => 139,  140 => 138,  138 => 137,  133 => 134,  126 => 129,  123 => 128,  116 => 124,  110 => 122,  107 => 121,  103 => 119,  101 => 118,  98 => 117,  92 => 112,  87 => 108,  85 => 107,  83 => 106,  79 => 105,  75 => 104,  71 => 103,  69 => 100,  68 => 99,  67 => 98,  66 => 97,  65 => 96,  64 => 95,  63 => 94,  62 => 93,  61 => 89,  58 => 87,  56 => 86,  53 => 85,  51 => 79,  50 => 78,  49 => 77,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 71,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/content/node--hero.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/content/node--hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 71, "if" => 106];
        static $filters = ["clean_class" => 73, "raw" => 78, "escape" => 103, "merge" => 158];
        static $functions = ["create_attribute" => 86, "attach_library" => 103];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'raw', 'escape', 'merge'],
                ['create_attribute', 'attach_library'],
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
