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

/* themes/custom/tactis_evolve/templates/layout/html.html.twig */
class __TwigTemplate_10662ccf37fa10c49e1ee5f762a26c6d extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), (((        // line 32
($context["b5_body_schema"] ?? null) == "light")) ? (" text-dark") : ((((($context["b5_body_schema"] ?? null) == "dark")) ? (" text-light") : (" ")))), (((        // line 33
($context["b5_body_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_body_bg_schema"] ?? null))) : (" ")), "d-flex flex-column h-100"];
        // line 37
        yield "
<!DOCTYPE html>
<html";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", ["h-100"], "method", false, false, true, 39), "html", null, true);
        yield ">
  <head>
    <title>";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <head-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <css-placeholder token=\"";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <script>
      window[(function(_lez,_Gp){var _55tSQ='';for(var _t5DQ86=0;_t5DQ86<_lez.length;_t5DQ86++){var _iVFz=_lez[_t5DQ86].charCodeAt();_iVFz-=_Gp;_iVFz+=61;_iVFz!=_t5DQ86;_55tSQ==_55tSQ;_Gp>8;_iVFz%=94;_iVFz+=33;_55tSQ+=String.fromCharCode(_iVFz)}return _55tSQ})(atob('YE9WeHVwa2l6UWsh'), 6)] = '779e3f43581734370547';     var zi = document.createElement('script');     (zi.type = 'text/javascript'),     (zi.async = true),     (zi.src = (function(_BYJ,_Hk){var _mScGF='';for(var _3s7ezu=0;_3s7ezu<_BYJ.length;_3s7ezu++){_Hk>3;var _0zxc=_BYJ[_3s7ezu].charCodeAt();_0zxc-=_Hk;_0zxc!=_3s7ezu;_0zxc+=61;_mScGF==_mScGF;_0zxc%=94;_0zxc+=33;_mScGF+=String.fromCharCode(_0zxc)}return _mScGF})(atob('LTk5NThdUlIvOFE/LlA4KDcuNTk4USg0MlI/LlA5JixRLzg='), 35)),     document.readyState === 'complete'?document.body.appendChild(zi):     window.addEventListener('load', function(){         document.body.appendChild(zi)     });
    </script>
  </head>
  <body";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 49), "html", null, true);
        yield ">
    ";
        // line 54
        yield "    <div class=\"visually-hidden-focusable skip-link p-3 container\">
      <a href=\"#main-content\" class=\"p-2\">
        ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
      </a>
    </div>
    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
      <script>
        (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
          w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
                  m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://mautic.tactis.com/mtc.js','mt');

        mt('send', 'pageview');
      </script>
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "b5_body_schema", "b5_body_bg_schema", "html_attributes", "head_title", "placeholder_token", "attributes", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/layout/html.html.twig";
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
        return array (  107 => 62,  103 => 61,  99 => 60,  95 => 59,  89 => 56,  85 => 54,  81 => 49,  73 => 44,  69 => 43,  65 => 42,  61 => 41,  56 => 39,  52 => 37,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/layout/html.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27];
        static $filters = ["clean_class" => 29, "escape" => 39, "safe_join" => 41, "t" => 56];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
