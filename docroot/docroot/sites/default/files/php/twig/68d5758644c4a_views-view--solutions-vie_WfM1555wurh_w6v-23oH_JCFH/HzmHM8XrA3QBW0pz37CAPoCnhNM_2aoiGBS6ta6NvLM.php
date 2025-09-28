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

/* themes/custom/tactis_evolve/templates/views/views-view--solutions-view-block--block.html.twig */
class __TwigTemplate_6ae9ef11d955dd07c8356dc73a441121 extends Template
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
        // line 17
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 19
($context["id"] ?? null))), ("view-id-" .         // line 20
($context["id"] ?? null)), ("view-display-id-" .         // line 21
($context["display_id"] ?? null)), ((        // line 22
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 25
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["dom_id"] ?? null)], "method", false, false, true, 25), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
        yield ">
  ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 27
        if (($context["title"] ?? null)) {
            // line 28
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 30
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 31
        if (($context["header"] ?? null)) {
            // line 32
            yield "    <div class=\"view-header\">
      ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 36
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 37
            yield "    <div class=\"view-filters\">
      ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 41
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 42
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 46
        yield "
  ";
        // line 47
        if (($context["rows"] ?? null)) {
            // line 48
            yield "    ";
            // line 49
            yield "    <div class=\"view-content\">
      <div class=\"container\">
        <div class=\"row h-100 align-items-center\">

          ";
            // line 54
            yield "          <div class=\"col-12 col-md-6\" style=\"margin-top: -20px;\">
            <div class=\"text-start\">
              <h2 class=\"display-5 fw-semibold mb-4\">
                Solutions & Services
              </h2>

              <p class=\"mb-4\" style=\"font-size: 20px; max-width: 527px; height: 107px; line-height: 28px; overflow: hidden;\">
                Tactis offers a comprehensive suite of solutions, including strategy, technology enablement, AI technologies, contact center operations, and marketing.
              </p>

              <a href=\"/solutions\" class=\"btn btn-lg fw-semibold adaptive-outline-btn text-nowrap\">
                View All Solutions & Services
                <i class=\"bi bi-arrow-right ms-2\"></i>
              </a>
            </div>
          </div>

          ";
            // line 72
            yield "          <div class=\"col-12 col-md-6 mt-4 mt-md-0\">
            <div class=\"solutions-list text-center\">
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = (($_v1 = ($context["rows"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), 0, [], "array", false, false, true, 74))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#rows"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["rows"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), 0, [], "array", false, false, true, 74)), "#rows", [], "array", false, false, true, 74)));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 75
                yield "                ";
                $context["term"] = (($_v3 = $context["row"]) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#taxonomy_term"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "#taxonomy_term", [], "array", false, false, true, 75));
                // line 76
                yield "                <div class=\"solution-item mb-3\">
                  <a href=\"";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 77)]), "html", null, true);
                yield "\"
                     class=\"solution-link text-decoration-none fs-5 fw-bold d-block py-2 text-white\">
                    ";
                // line 79
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "name", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), "html", null, true);
                yield "
                  </a>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "            </div>
          </div>

        </div>
      </div>
    </div>
  ";
        } elseif (        // line 89
($context["empty"] ?? null)) {
            // line 90
            yield "    <div class=\"view-empty\">
      ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 94
        yield "
  ";
        // line 95
        if (($context["pager"] ?? null)) {
            // line 96
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 98
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 99
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 100
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 103
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 104
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 106
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 107
            yield "    <div class=\"view-footer\">
      ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 111
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 112
            yield "    <div class=\"feed-icons\">
      ";
            // line 113
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 116
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/views/views-view--solutions-view-block--block.html.twig";
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
        return array (  243 => 116,  237 => 113,  234 => 112,  231 => 111,  225 => 108,  222 => 107,  219 => 106,  213 => 104,  210 => 103,  204 => 100,  201 => 99,  198 => 98,  192 => 96,  190 => 95,  187 => 94,  181 => 91,  178 => 90,  176 => 89,  168 => 83,  158 => 79,  153 => 77,  150 => 76,  147 => 75,  143 => 74,  139 => 72,  120 => 54,  114 => 49,  112 => 48,  110 => 47,  107 => 46,  101 => 43,  98 => 42,  95 => 41,  89 => 38,  86 => 37,  83 => 36,  77 => 33,  74 => 32,  72 => 31,  67 => 30,  61 => 28,  59 => 27,  55 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 20,  45 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/views/views-view--solutions-view-block--block.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/views/views-view--solutions-view-block--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 17, "if" => 27, "for" => 74];
        static $filters = ["clean_class" => 19, "escape" => 25];
        static $functions = ["path" => 77];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['path'],
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
