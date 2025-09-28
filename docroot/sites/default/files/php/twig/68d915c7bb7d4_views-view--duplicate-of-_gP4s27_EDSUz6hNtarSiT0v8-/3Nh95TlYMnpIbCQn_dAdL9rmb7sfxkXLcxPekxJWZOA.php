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
        // line 16
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["id"] ?? null))), ("view-id-" .         // line 19
($context["id"] ?? null)), ("view-display-id-" .         // line 20
($context["display_id"] ?? null)), "articles-with-button-tac230", ((        // line 22
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 25
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
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
            yield "    <div class=\"container\">

      ";
            // line 51
            yield "      <div class=\"row mb-4\">
        <div class=\"col-12\">
          <h2 style=\"font-family: 'League Spartan'; font-weight: 600; font-size: 42px; line-height: 39px; color: #FFFFFF; margin: 0;\">
            Articles
          </h2>
        </div>
      </div>

      ";
            // line 60
            yield "      <div class=\"row mb-5\">
        <div class=\"col-12\">
          <div class=\"d-flex align-items-start justify-content-between\">

            ";
            // line 65
            yield "            <div style=\"width: 800px; max-width: 800px; flex-shrink: 0;\">
              <p style=\"font-family: 'League Spartan'; font-weight: 400; font-size: 20px; line-height: 28px; color: #FFFFFF; margin: 0;\">
                As the world evolves, so do its technology, practices, and people. Our selection of thought-leadership posts, profiles, and press releases offer a snapshot of our ideas and views on the issues of the day.
              </p>
            </div>

            ";
            // line 72
            yield "            <div class=\"flex-shrink-0 ms-4\">
              <a href=\"/articles\"
                 class=\"btn d-inline-flex align-items-center justify-content-center\"
                 style=\"width: 237px; height: 60px; border: 2px solid #FFFFFF; background: transparent; font-family: 'League Spartan'; font-weight: 600; font-size: 20px; line-height: 18px; color: #FFFFFF; text-decoration: none;\">
                View All Articles
                <i class=\"bi bi-arrow-right ms-2\" style=\"color: #FFFFFF;\"></i>
              </a>
            </div>

          </div>
        </div>
      </div>

      ";
            // line 86
            yield "      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"view-content d-md-flex flex-row justify-content-between flex-wrap animation-container\">
            ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>

    </div>
  ";
        } elseif (        // line 95
($context["empty"] ?? null)) {
            // line 96
            yield "    <div class=\"view-empty\">
      ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 100
        yield "
  ";
        // line 101
        if (($context["pager"] ?? null)) {
            // line 102
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 104
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 105
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 109
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 110
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 112
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 113
            yield "    <div class=\"view-footer\">
      ";
            // line 114
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 117
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 118
            yield "    <div class=\"feed-icons\">
      ";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 122
        yield "</div>

";
        // line 125
        yield "<style>
  .articles-with-button-tac230 .view-content .views-row {
    background: transparent !important;
    background-color: transparent !important;
    color: #FFFFFF !important;
  }

  .articles-with-button-tac230 .view-content .node {
    background: transparent !important;
    background-color: transparent !important;
    color: #FFFFFF !important;
  }

  .articles-with-button-tac230 .view-content .card {
    background: transparent !important;
    background-color: transparent !important;
    border: none !important;
    color: #FFFFFF !important;
  }

  .articles-with-button-tac230 .view-content .card-body {
    background: transparent !important;
    background-color: transparent !important;
    color: #FFFFFF !important;
  }

  /* Target article titles and text specifically */
  .articles-with-button-tac230 .view-content h3,
  .articles-with-button-tac230 .view-content h4,
  .articles-with-button-tac230 .view-content h5,
  .articles-with-button-tac230 .view-content .card-title,
  .articles-with-button-tac230 .view-content .card-text,
  .articles-with-button-tac230 .view-content .node-title,
  .articles-with-button-tac230 .view-content p,
  .articles-with-button-tac230 .view-content a {
    color: #FFFFFF !important;
  }

  /* Ensure links stay white */
  .articles-with-button-tac230 .view-content a:hover,
  .articles-with-button-tac230 .view-content a:visited,
  .articles-with-button-tac230 .view-content a:focus {
    color: #FFFFFF !important;
  }

  /* TAC-230: Hide date and author information from article cards */
  .articles-with-button-tac230 .view-content .field--name-created,
  .articles-with-button-tac230 .view-content .field--name-changed,
  .articles-with-button-tac230 .view-content .field--name-field-date,
  .articles-with-button-tac230 .view-content .field--name-field-created,
  .articles-with-button-tac230 .view-content .field--name-field-published-date,
  .articles-with-button-tac230 .view-content .field--name-uid,
  .articles-with-button-tac230 .view-content .field--name-field-author,
  .articles-with-button-tac230 .view-content .field--name-field-authors,
  .articles-with-button-tac230 .view-content .node__submitted,
  .articles-with-button-tac230 .view-content .submitted,
  .articles-with-button-tac230 .view-content .node__meta,
  .articles-with-button-tac230 .view-content .author,
  .articles-with-button-tac230 .view-content .date,
  .articles-with-button-tac230 .view-content time,
  .articles-with-button-tac230 .view-content .datetime {
    display: none !important;
  }

  /* Hide any \"By Author\" text */
  .articles-with-button-tac230 .view-content .views-field-name,
  .articles-with-button-tac230 .view-content .views-field-uid,
  .articles-with-button-tac230 .view-content .views-field-created,
  .articles-with-button-tac230 .view-content .views-field-changed {
    display: none !important;
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
        return array (  240 => 125,  236 => 122,  230 => 119,  227 => 118,  224 => 117,  218 => 114,  215 => 113,  212 => 112,  206 => 110,  203 => 109,  197 => 106,  194 => 105,  191 => 104,  185 => 102,  183 => 101,  180 => 100,  174 => 97,  171 => 96,  169 => 95,  160 => 89,  155 => 86,  140 => 72,  132 => 65,  126 => 60,  116 => 51,  112 => 48,  110 => 47,  107 => 46,  101 => 43,  98 => 42,  95 => 41,  89 => 38,  86 => 37,  83 => 36,  77 => 33,  74 => 32,  72 => 31,  67 => 30,  61 => 28,  59 => 27,  55 => 26,  50 => 25,  48 => 22,  47 => 20,  46 => 19,  45 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/views/views-view--duplicate-of-articles--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 27];
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
