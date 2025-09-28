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
<div";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 104), "html", null, true);
        yield ">
  ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_hero_options", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105) == "hero-split")) {
            // line 106
            yield "    ";
            // line 107
            yield "    <div class=\"container\">
      <div class=\"row align-items-center g-4\">
        <div class=\"col-12 col-md-6\">
          ";
            // line 111
            yield "          <div class=\"hero-tag text-uppercase fw-semibold mb-4\">
            Welcome to Tactis
          </div>

          ";
            // line 116
            yield "          <div class=\"hero-headline\">
            ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 117) == "article")) {
                // line 118
                yield "              <div class=\"return-to-articles pb-5\"><a class=\"link-tactis-primary link-underline-opacity-0 fw-semibold\" href=\"/articles\"><i class=\"bi bi-arrow-left\"></i> Back to articles</a></div>
            ";
            }
            // line 120
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 120), "value", [], "any", false, false, true, 120) == "hero-title")) {
                // line 121
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 123
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 123), "html", null, true);
            yield "
          </div>

          ";
            // line 127
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_arrow", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127) == 1)) {
                // line 128
                yield "            <a href=\"/articles\" class=\"hero-button btn btn-lg fw-semibold d-inline-flex align-items-center text-white mt-3\">
              View Full Series
              <img src=\"/themes/custom/tactis_evolve/images/asset_arrow/tactis-button-arrow.svg\" class=\"ms-2\" width=\"16\" height=\"16\" alt=\"Arrow\">
            </a>
          ";
            }
            // line 133
            yield "        </div>

        <div class=\"col-12 col-md-6\">
          ";
            // line 136
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 136), 0, [], "any", false, false, true, 136))) {
                // line 137
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_use_animation", [], "any", false, false, true, 137), "value", [], "any", false, false, true, 137) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 137)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 137), 0, [], "array", false, false, true, 137))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 137)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 137), 0, [], "array", false, false, true, 137)), "#media", [], "array", false, false, true, 137)), "field_media_json", [], "any", false, false, true, 137), "value", [], "any", false, false, true, 137))) {
                    // line 138
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tactis_evolve/lottie"), "html", null, true);
                    yield "
              <div class=\"hero-image-container position-relative w-100\">
                <div id=\"hero-image-animation\" class=\"lottie-animation\" data-animation=\"";
                    // line 140
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 140)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 140), 0, [], "array", false, false, true, 140))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 140)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 140), 0, [], "array", false, false, true, 140)), "#media", [], "array", false, false, true, 140)), "field_media_json", [], "any", false, false, true, 140), "value", [], "any", false, false, true, 140), "html", null, true);
                    yield "\"></div>
              </div>
            ";
                } else {
                    // line 143
                    yield "              <div class=\"hero-image-container\">
                ";
                    // line 144
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 144), "html", null, true);
                    yield "
              </div>
            ";
                }
                // line 147
                yield "          ";
            }
            // line 148
            yield "        </div>
      </div>
    </div>

  ";
        } else {
            // line 153
            yield "    ";
            // line 154
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 154), 0, [], "any", false, false, true, 154))) {
                // line 155
                yield "      <div class=\"d-md-flex flex-md-row justify-content-md-between align-items-md-center text-center text-md-start\">
      ";
                // line 156
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_use_animation", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 156)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 156), 0, [], "array", false, false, true, 156))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 156)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 156), 0, [], "array", false, false, true, 156)), "#media", [], "array", false, false, true, 156)), "field_media_json", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156))) {
                    // line 157
                    yield "        ";
                    $context["titleTextClasses"] = Twig\Extension\CoreExtension::merge(($context["titleTextClasses"] ?? null), ["animate-burst"]);
                    // line 158
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tactis_evolve/lottie"), "html", null, true);
                    yield "
        <div class=\"hero-image-container order-md-2 d-inline-block position-relative w-100 animate-header-lottie\">
          <div id=\"hero-image-animation\" class=\"lottie-animation\" data-animation=\"";
                    // line 160
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 160)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 160), 0, [], "array", false, false, true, 160))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 160)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 160), 0, [], "array", false, false, true, 160)), "#media", [], "array", false, false, true, 160)), "field_media_json", [], "any", false, false, true, 160), "value", [], "any", false, false, true, 160), "html", null, true);
                    yield "\"></div>
        </div>
      ";
                } else {
                    // line 163
                    yield "        <div class=\"hero-image-container order-md-2 d-inline-block\">
          ";
                    // line 164
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 164), "html", null, true);
                    yield "
        </div>
      ";
                }
                // line 167
                yield "    ";
            }
            // line 168
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["newAttributes"] ?? null), "addClass", [($context["titleTextClasses"] ?? null)], "method", false, false, true, 168), "html", null, true);
            yield ">
      ";
            // line 169
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 169) == "article")) {
                // line 170
                yield "        <div class=\"return-to-articles pb-5\"><a class=\"link-tactis-primary link-underline-opacity-0 fw-semibold\" href=\"/articles\"><i class=\"bi bi-arrow-left\"></i> Back to articles</a></div>
      ";
            }
            // line 172
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_title", [], "any", false, false, true, 172), "value", [], "any", false, false, true, 172) == "hero-title")) {
                // line 173
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
      ";
            }
            // line 175
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 175), "html", null, true);
            yield "
    </div>
    ";
            // line 177
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 177), 0, [], "any", false, false, true, 177))) {
                // line 178
                yield "      </div>
    ";
            }
            // line 180
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_show_arrow", [], "any", false, false, true, 180), "value", [], "any", false, false, true, 180) == 1)) {
                // line 181
                yield "      <div class=\"get-started d-flex align-items-center py-3\">
        <span>Let's get started</span><i class=\"bi bi-arrow-down-circle ps-3 fs-5\"></i>
      </div>
    ";
            }
            // line 185
            yield "  ";
        }
        // line 186
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
        return array (  251 => 186,  248 => 185,  242 => 181,  239 => 180,  235 => 178,  233 => 177,  227 => 175,  221 => 173,  218 => 172,  214 => 170,  212 => 169,  207 => 168,  204 => 167,  198 => 164,  195 => 163,  189 => 160,  183 => 158,  180 => 157,  178 => 156,  175 => 155,  172 => 154,  170 => 153,  163 => 148,  160 => 147,  154 => 144,  151 => 143,  145 => 140,  139 => 138,  136 => 137,  134 => 136,  129 => 133,  122 => 128,  119 => 127,  112 => 123,  106 => 121,  103 => 120,  99 => 118,  97 => 117,  94 => 116,  88 => 111,  83 => 107,  81 => 106,  79 => 105,  75 => 104,  71 => 103,  69 => 100,  68 => 99,  67 => 98,  66 => 97,  65 => 96,  64 => 95,  63 => 94,  62 => 93,  61 => 89,  58 => 87,  56 => 86,  53 => 85,  51 => 79,  50 => 78,  49 => 77,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 71,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/content/node--hero.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/content/node--hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 71, "if" => 105];
        static $filters = ["clean_class" => 73, "raw" => 78, "escape" => 103, "merge" => 157];
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
