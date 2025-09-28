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

/* modules/contrib/svg_image_field/templates/svg-image-field-formatter.html.twig */
class __TwigTemplate_0632931c9341aa33c3f37d13e6e3b618 extends Template
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
        if (($context["link_url"] ?? null)) {
            // line 2
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_url"] ?? null), "html", null, true);
            yield "\">
";
        }
        // line 4
        if (($context["inline"] ?? null)) {
            // line 5
            yield "  ";
            if (($context["twig_debug"] ?? null)) {
                // line 6
                yield "  <!-- INLINE SVG FILE PATH: '";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["uri"] ?? null)), "html", null, true);
                yield "' -->
  ";
            }
            // line 8
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_data"] ?? null));
            yield "
";
        } else {
            // line 10
            yield "  <img";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield " src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["uri"] ?? null)), "html", null, true);
            yield "\" />
";
        }
        // line 12
        if (($context["link_url"] ?? null)) {
            // line 13
            yield "  </a>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["link_url", "inline", "twig_debug", "uri", "svg_data", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/svg_image_field/templates/svg-image-field-formatter.html.twig";
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
        return array (  79 => 13,  77 => 12,  69 => 10,  63 => 8,  57 => 6,  54 => 5,  52 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/svg_image_field/templates/svg-image-field-formatter.html.twig", "/var/www/html/docroot/modules/contrib/svg_image_field/templates/svg-image-field-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2, "raw" => 8];
        static $functions = ["file_url" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['file_url'],
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
