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

/* themes/custom/tactis_evolve/templates/paragraphs/paragraph--stats.html.twig */
class __TwigTemplate_e6d283b9e9f26015054854060aad23a9 extends Template
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
        // line 13
        yield "
";
        // line 16
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 18))), ((        // line 19
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 20)) ? ("paragraph--unpublished") : ("")), "stats-component"];
        // line 24
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "attributes"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
        yield ">
    <div class=\"container\">
      <div class=\"row align-items-center\">

        ";
        // line 32
        yield "        <div class=\"col-12 col-md-6 stats-content\">

          ";
        // line 35
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_title", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35)) {
            // line 36
            yield "            <h2 class=\"stats-title display-5 fw-semibold mb-4 text-lowercase\">
              ";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_title", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), "html", null, true);
            yield ".
            </h2>
          ";
        }
        // line 40
        yield "
          ";
        // line 42
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_description", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42)) {
            // line 43
            yield "            <div class=\"stats-description mb-4\">
              ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_description", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44));
            yield "
            </div>
          ";
        }
        // line 47
        yield "
          ";
        // line 49
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_link", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49)) {
            // line 50
            yield "            <div class=\"stats-button\">
              <a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_link", [], "any", false, false, true, 51), 0, [], "any", false, false, true, 51), "url", [], "any", false, false, true, 51), "html", null, true);
            yield "\"
                 class=\"btn btn-tactis-primary pt-3-5 pb-3 px-3-5 fs-small fw-semibold\">
                ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_link", [], "any", false, false, true, 53), 0, [], "any", false, false, true, 53), "title", [], "any", false, false, true, 53), "html", null, true);
            yield "
                <i class=\"bi bi-arrow-right ms-3 fw-semibold\"></i>
              </a>
            </div>
          ";
        }
        // line 58
        yield "
        </div>

        ";
        // line 62
        yield "        <div class=\"col-12 col-md-6 stats-list\">
          ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_items", [], "any", false, false, true, 63)) > 0)) {
            // line 64
            yield "            <div class=\"stats-grid\">
              ";
            // line 66
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_stats_items", [], "any", false, false, true, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["stats_item"]) {
                // line 67
                yield "                <div class=\"stat-item mb-4\">
                  ";
                // line 69
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stats_item"], "entity", [], "any", false, false, true, 69), "field_stat_item_number", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69)) {
                    // line 70
                    yield "                    <div class=\"stat-title display-3 fw-bold text-tactis-primary mb-2\">
                      ";
                    // line 71
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stats_item"], "entity", [], "any", false, false, true, 71), "field_stat_item_number", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), "html", null, true);
                    yield "
                    </div>
                  ";
                }
                // line 74
                yield "
                  ";
                // line 76
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stats_item"], "entity", [], "any", false, false, true, 76), "field_stat_item_description", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76)) {
                    // line 77
                    yield "                    <div class=\"stat-description fs-6\">
                      ";
                    // line 78
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stats_item"], "entity", [], "any", false, false, true, 78), "field_stat_item_description", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78));
                    yield "
                    </div>
                  ";
                }
                // line 81
                yield "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stats_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "            </div>
          ";
        }
        // line 85
        yield "        </div>

      </div>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/paragraphs/paragraph--stats.html.twig";
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
        return array (  188 => 85,  184 => 83,  177 => 81,  171 => 78,  168 => 77,  165 => 76,  162 => 74,  156 => 71,  153 => 70,  150 => 69,  147 => 67,  142 => 66,  139 => 64,  137 => 63,  134 => 62,  129 => 58,  121 => 53,  116 => 51,  113 => 50,  110 => 49,  107 => 47,  101 => 44,  98 => 43,  95 => 42,  92 => 40,  86 => 37,  83 => 36,  80 => 35,  76 => 32,  68 => 27,  56 => 26,  53 => 24,  51 => 20,  50 => 19,  49 => 18,  48 => 16,  45 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/paragraphs/paragraph--stats.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/paragraphs/paragraph--stats.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "block" => 26, "if" => 35, "for" => 66];
        static $filters = ["clean_class" => 18, "escape" => 27, "raw" => 44, "length" => 63];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape', 'raw', 'length'],
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
