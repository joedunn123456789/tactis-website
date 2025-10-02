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

/* themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig */
class __TwigTemplate_43d656d422fcbc7e1941462d2996c41c extends Template
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
        // line 20
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 22
($context["id"] ?? null))), ("view-id-" .         // line 23
($context["id"] ?? null)), ("view-display-id-" .         // line 24
($context["display_id"] ?? null)), "articles-view-adaptive", ((        // line 26
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 29
        yield "
";
        // line 34
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 34), "setAttribute", ["data-bs-theme", "dark"], "method", false, false, true, 34), "html", null, true);
        yield ">
  ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 36
        if (($context["title"] ?? null)) {
            // line 37
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 39
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 40
        if (($context["header"] ?? null)) {
            // line 41
            yield "    <div class=\"view-header\">
      ";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 45
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 46
            yield "    <div class=\"view-filters\">
      ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 50
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 51
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if (($context["rows"] ?? null)) {
            // line 57
            yield "    ";
            // line 58
            yield "    <div class=\"container py-5\">

      ";
            // line 61
            yield "      <div class=\"row mb-4\">
        <div class=\"col-12\">
          ";
            // line 64
            yield "          <h2 class=\"display-4 fw-semibold mb-0\" style=\"font-size: 42px; line-height: 39px;\">
            Articles
          </h2>
        </div>
      </div>

      ";
            // line 71
            yield "      <div class=\"row mb-5\">
        <div class=\"col-12\">
          ";
            // line 74
            yield "          <div class=\"d-flex flex-column flex-md-row align-items-start justify-content-between gap-3\">

            ";
            // line 77
            yield "            <div class=\"flex-grow-1\" style=\"max-width: 800px;\">
              <p class=\"mb-0\" style=\"font-size: 20px; line-height: 28px;\">
                As the world evolves, so do its technology, practices, and people.
                Our selection of thought-leadership posts, profiles, and press releases
                offer a snapshot of our ideas and views on the issues of the day.
              </p>
            </div>

            ";
            // line 86
            yield "            <div class=\"flex-shrink-0\">
              <a href=\"/articles\"
                 class=\"btn btn-outline-light fw-semibold d-inline-flex align-items-center justify-content-center text-nowrap\"
                 style=\"width: 237px; height: 60px; font-size: 20px;\">
                View All Articles
                <i class=\"bi bi-arrow-right ms-2\"></i>
              </a>
            </div>

          </div>
        </div>
      </div>

      ";
            // line 100
            yield "      <div class=\"row\">
        <div class=\"col-12\">
          ";
            // line 103
            yield "          <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            ";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>

    </div>
  ";
        } elseif (        // line 110
($context["empty"] ?? null)) {
            // line 111
            yield "    <div class=\"view-empty\">
      ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 115
        yield "
  ";
        // line 116
        if (($context["pager"] ?? null)) {
            // line 117
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 119
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 120
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 124
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 125
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 127
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 128
            yield "    <div class=\"view-footer\">
      ";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 132
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 133
            yield "    <div class=\"feed-icons\">
      ";
            // line 134
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 137
        yield "</div>

<style>
  /* TAC-230: Override card styling for transparent cards on dark background */
  .articles-view-adaptive .card {
    background-color: transparent !important;
    border: none !important;
    border-left: none !important;
  }

  .articles-view-adaptive .card-body {
    background-color: transparent !important;
  }

  /* Force article titles to be white (override link-dark class) */
  .articles-view-adaptive .card-title a {
    color: #FFFFFF !important;
  }

  .articles-view-adaptive .card-title a:hover,
  .articles-view-adaptive .card-title a:focus,
  .articles-view-adaptive .card-title a:visited {
    color: #FFFFFF !important;
  }

  /* Hide author names (field_uid) - we want dates instead */
  .articles-view-adaptive .field--name-uid,
  .articles-view-adaptive .node__submitted,
  .articles-view-adaptive .views-field-name,
  .articles-view-adaptive .field--name-field-author,
  .articles-view-adaptive .field--name-field-authors,
  .articles-view-adaptive .views-field-field-author,
  .articles-view-adaptive .views-field-field-authors,
  .articles-view-adaptive .author,
  .articles-view-adaptive .node__meta {
    display: none !important;
  }

  /* Show dates and make them white */
  .articles-view-adaptive .field--name-created,
  .articles-view-adaptive .views-field-created,
  .articles-view-adaptive time {
    display: block !important;
    color: #FFFFFF !important;
  }
</style>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig";
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
        return array (  249 => 137,  243 => 134,  240 => 133,  237 => 132,  231 => 129,  228 => 128,  225 => 127,  219 => 125,  216 => 124,  210 => 121,  207 => 120,  204 => 119,  198 => 117,  196 => 116,  193 => 115,  187 => 112,  184 => 111,  182 => 110,  173 => 104,  170 => 103,  166 => 100,  151 => 86,  141 => 77,  137 => 74,  133 => 71,  125 => 64,  121 => 61,  117 => 58,  115 => 57,  113 => 56,  110 => 55,  104 => 52,  101 => 51,  98 => 50,  92 => 47,  89 => 46,  86 => 45,  80 => 42,  77 => 41,  75 => 40,  70 => 39,  64 => 37,  62 => 36,  58 => 35,  53 => 34,  50 => 29,  48 => 26,  47 => 24,  46 => 23,  45 => 22,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "if" => 36];
        static $filters = ["clean_class" => 22, "escape" => 34];
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
