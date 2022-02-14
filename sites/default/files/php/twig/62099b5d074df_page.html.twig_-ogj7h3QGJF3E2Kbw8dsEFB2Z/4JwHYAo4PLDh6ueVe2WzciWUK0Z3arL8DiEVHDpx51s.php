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

/* themes/moby2buy/templates/page.html.twig */
class __TwigTemplate_30a5cdad9b3125f70da70614593c29df9a32fab3ff48e3305d69d9572c32a22e extends \Twig\Template
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
        // line 1
        echo "<div class=\"moby2buy-site\">
  <div class=\"site-header\">
    <div class=\"container\">
      <nav class=\"navbar fixed-top navbar-expand-lg navbar-moby\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 5, $this->source), "html", null, true);
        echo "\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      
        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
          <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">Generate short URL <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "myurls\">My URLs</a>
            </li>
          </ul>
          <div class=\"form-inline social my-2 my-lg-0\">
            <a href=\"#\" class=\"px-3\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>";
        // line 24
        echo "      </nav>";
        // line 25
        echo "    </div>";
        // line 26
        echo "  </div>";
        // line 27
        echo "  ";
        if (($context["is_front"] ?? null)) {
            // line 28
            echo "  <div class=\"site-banner\">
    <div class=\"container h-100 d-flex justify-content-center align-items-center\">
      <div class=\"shorten-box\">
        <div class=\"hello text-center\">
          <h1>Hello, <span>everyone</span>!</h1>
          <h2>Welcome 2 new <span>shorten url</span> tool</h2>
          <h3>Enjoy it!</h3>
        </div>";
            // line 36
            echo "        <div class=\"py-4\">
          ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "shorturlform"), "html", null, true);
            echo "
        </div>
        <div class=\"text-center\">
          ";
            // line 40
            if (($context["logged_in"] ?? null)) {
                // line 41
                echo "          <h5>You are logged in as ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "displayname", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo ". <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "user/logout\">Logout now?</a> </h5>
          ";
            } else {
                // line 43
                echo "          <h5>* You need to login for view your generated URL's and create custom URL's. <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "user\">Login now</a> </h5>
          ";
            }
            // line 45
            echo "        </div>       
      </div>";
            // line 46
            echo "      
    </div>";
            // line 48
            echo "  </div>";
            // line 49
            echo "  ";
        } else {
            // line 50
            echo "  <div class=\"site-content\">
    <div class=\"container h-100 d-flex justify-content-center align-items-center\">
      <section class=\"section\">
        ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
      </section>";
            // line 55
            echo "    </div>";
            // line 56
            echo "  </div>";
            // line 57
            echo "  ";
        }
        // line 58
        echo "  <div class=\"site-footer\">
    <div class=\"container\">
      <section class=\"section\">
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      </section>";
        // line 63
        echo "    </div>";
        echo "  
  </div>";
        // line 65
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/moby2buy/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  153 => 63,  149 => 61,  144 => 58,  141 => 57,  139 => 56,  137 => 55,  133 => 53,  128 => 50,  125 => 49,  123 => 48,  120 => 46,  117 => 45,  111 => 43,  103 => 41,  101 => 40,  95 => 37,  92 => 36,  83 => 28,  80 => 27,  78 => 26,  76 => 25,  74 => 24,  64 => 16,  58 => 13,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/moby2buy/templates/page.html.twig", "/app/themes/moby2buy/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27);
        static $filters = array("escape" => 5);
        static $functions = array("path" => 5, "drupal_entity" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path', 'drupal_entity']
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
