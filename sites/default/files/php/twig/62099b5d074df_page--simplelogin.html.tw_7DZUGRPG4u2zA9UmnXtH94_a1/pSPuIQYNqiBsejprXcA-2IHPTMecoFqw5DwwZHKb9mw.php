<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/simplelogin/templates/page--simplelogin.html.twig */
class __TwigTemplate_89538e995467600f95388b548a32534d034894581f13bf2949e7f3c7ae875df0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<style>
  #block-moby2buy-page-title,
  nav.tabs {
    display: none;
  }
</style>

";
        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "  <div class=\"simplelogin-wrapper ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_class"] ?? null), 19, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_opacity"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
    <div class=\"simplelogin-form\" style=\"width: ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_width"] ?? null), 20, $this->source), "html", null, true);
        echo "px\">
      <div class=\"simplelogin-link\">
        ";
        // line 22
        if ((($context["path"] ?? null) == "/user/password")) {
            // line 23
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } elseif ((        // line 24
($context["path"] ?? null) == "/user/register")) {
            // line 25
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } else {
            // line 27
            echo "          ";
            if ((($context["site_register"] ?? null) != "admin_only")) {
                // line 28
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source), "html", null, true);
                echo "user/register\" class=\"signreg\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign up"));
                echo "</a>
          ";
            }
            // line 30
            echo "        ";
        }
        // line 31
        echo "      </div>

      <div class=\"simplelogin-bg\">
        <div class=\"simplelogin-logo\" style=\"background-color: #05122e;\">
          <a href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 35, $this->source), "html", null, true);
        echo "\" alt=\"Home\"/></a>
        </div>

        <div class=\"alert alert-success mt-2\">
          <p><strong>Warning</strong> use details below to login </p>
          <ul>
            <li><strong>User:</strong> moby</li>
            <li><strong>Pass:</strong> moby</li>
          </ul>
          
        </div>

        ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
        ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
 
        ";
        // line 50
        if ((($context["path"] ?? null) == "/user/login")) {
            // line 51
            echo "          <div class=\"forgot-password\">
            ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forgot password?"));
            echo " <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source), "html", null, true);
            echo "user/password\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click here"));
            echo "</a>
          </div>
        ";
        }
        // line 55
        echo "      </div>
    </div>
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplelogin/templates/page--simplelogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  133 => 52,  130 => 51,  128 => 50,  123 => 48,  119 => 47,  102 => 35,  96 => 31,  93 => 30,  85 => 28,  82 => 27,  74 => 25,  72 => 24,  65 => 23,  63 => 22,  58 => 20,  51 => 19,  49 => 18,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simplelogin/templates/page--simplelogin.html.twig", "/app/modules/contrib/simplelogin/templates/page--simplelogin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 18, "if" => 22);
        static $filters = array("escape" => 19, "t" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if'],
                ['escape', 't'],
                []
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
