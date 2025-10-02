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
        // line 72
        yield "
";
        // line 74
        $context["bg_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_section_background", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74);
        // line 75
        yield "
";
        // line 80
        if ((($context["bg_value"] ?? null) == "section-background-white")) {
            // line 81
            yield "  ";
            $context["bg_class"] = "bg-white";
            // line 82
            yield "  ";
            $context["theme"] = "light";
            // line 83
            yield "  ";
            // line 84
            yield "
";
        } elseif ((        // line 85
($context["bg_value"] ?? null) == "section-background-black")) {
            // line 86
            yield "  ";
            $context["bg_class"] = "bg-black";
            // line 87
            yield "  ";
            $context["theme"] = "dark";
            // line 88
            yield "  ";
            // line 89
            yield "
";
        } elseif ((        // line 90
($context["bg_value"] ?? null) == "section-background-plum")) {
            // line 91
            yield "  ";
            $context["bg_class"] = "bg-secondary";
            // line 92
            yield "  ";
            // line 93
            yield "  ";
            $context["theme"] = "dark";
            // line 94
            yield "  ";
            // line 95
            yield "
";
        } elseif ((        // line 96
($context["bg_value"] ?? null) == "section-background-gradient")) {
            // line 97
            yield "  ";
            $context["bg_class"] = "bg-gradient-plum";
            // line 98
            yield "  ";
            // line 99
            yield "  ";
            $context["theme"] = "dark";
            // line 100
            yield "  ";
            // line 101
            yield "
";
        } elseif ((        // line 102
($context["bg_value"] ?? null) == "section-background-image")) {
            // line 103
            yield "  ";
            $context["bg_class"] = ("bg-image-" . ($context["id"] ?? null));
            // line 104
            yield "  ";
            // line 105
            yield "  ";
            $context["theme"] = "dark";
            // line 106
            yield "  ";
            // line 107
            yield "
";
        } else {
            // line 109
            yield "  ";
            // line 110
            yield "  ";
            $context["bg_class"] = "bg-white";
            // line 111
            yield "  ";
            $context["theme"] = "light";
        }
        // line 113
        yield "
";
        // line 118
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 120
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 120))), ((        // line 121
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 122
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 122)) ? ("paragraph--unpublished") : ("")), "py-5", "border-bottom", "border-tactis-light", "position-relative",         // line 127
($context["bg_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128)) ? ("is_parallax") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 129
($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129)) ? ("min-vh-66") : ("")), (((        // line 130
($context["bg_value"] ?? null) == "section-background-image")) ? ("z-3") : (""))];
        // line 132
        yield "
  ";
        // line 133
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "id", "view_mode", "bg_lg", "bg_xl", "attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "
  ";
        // line 139
        yield "  ";
        if ((($context["bg_value"] ?? null) == "section-background-image")) {
            // line 140
            yield "
  ";
            // line 142
            yield "  <style>
  /* Dynamic background image URL */
  .bg-";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
  background-image: url('";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_lg"] ?? null), "html", null, true);
            yield "');
    }

/* Parallax effect calculations - custom CSS required */
.is_parallax .bg-";
            // line 149
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
  background-position-y: calc(50% - 1px);
  position: absolute;
  background-attachment: fixed;
  background-size: cover;
  width: 100%;
  height: 100%;
}

/* Responsive image for larger screens */
@media screen and (min-width: 1140px) {
  .bg-";
            // line 160
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
            yield " {
    background-image: url('";
            // line 161
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_xl"] ?? null), "html", null, true);
            yield "');
  }
}
  </style>

  ";
            // line 167
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_parallax", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167)) {
                // line 168
                yield "  ";
                // line 177
                yield "  <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 177), "html", null, true);
                yield " data-bs-theme=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["theme"] ?? null), "html", null, true);
                yield "\">

    ";
                // line 180
                yield "    <div class=\"img-container position-absolute w-100 h-100\">
      <div class=\"bg-";
                // line 181
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\"></div>
    </div>

    ";
                // line 185
                yield "    <div class=\"content-container container position-absolute w-100 h-100\">
      <div class=\"row h-100 animate-scroll animate\">
        ";
                // line 187
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
                yield "
      </div>
    </div>

  </div>

  ";
            } else {
                // line 195
                yield "  <div class=\"container-fluid g-0 bg-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true);
                yield "\">
    <div";
                // line 196
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 196), "html", null, true);
                yield " data-bs-theme=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["theme"] ?? null), "html", null, true);
                yield "\">
      <div class=\"container\">
        <div class=\"row animate-scroll animate\">
          ";
                // line 199
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
                yield "
        </div>
      </div>
    </div>
  </div>
";
            }
            // line 205
            yield "
  ";
        } else {
            // line 211
            yield "  ";
            // line 226
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 226), "html", null, true);
            yield " data-bs-theme=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["theme"] ?? null), "html", null, true);
            yield "\">
    <div class=\"container\">
      <div class=\"row animate-scroll animate\">
        ";
            // line 241
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_parallax", "field_section_background", "field_image"), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
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
        return array (  283 => 241,  274 => 226,  272 => 211,  268 => 205,  259 => 199,  251 => 196,  246 => 195,  236 => 187,  232 => 185,  226 => 181,  223 => 180,  215 => 177,  213 => 168,  211 => 167,  203 => 161,  199 => 160,  185 => 149,  178 => 145,  174 => 144,  170 => 142,  167 => 140,  164 => 139,  161 => 134,  149 => 133,  146 => 132,  144 => 130,  143 => 129,  142 => 128,  141 => 127,  140 => 122,  139 => 121,  138 => 120,  137 => 118,  134 => 113,  130 => 111,  127 => 110,  125 => 109,  121 => 107,  119 => 106,  116 => 105,  114 => 104,  111 => 103,  109 => 102,  106 => 101,  104 => 100,  101 => 99,  99 => 98,  96 => 97,  94 => 96,  91 => 95,  89 => 94,  86 => 93,  84 => 92,  81 => 91,  79 => 90,  76 => 89,  74 => 88,  71 => 87,  68 => 86,  66 => 85,  63 => 84,  61 => 83,  58 => 82,  55 => 81,  53 => 80,  50 => 75,  48 => 74,  45 => 72,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/paragraphs/paragraph--section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 74, "if" => 80, "block" => 133];
        static $filters = ["clean_class" => 120, "escape" => 144, "without" => 187];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'without'],
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
