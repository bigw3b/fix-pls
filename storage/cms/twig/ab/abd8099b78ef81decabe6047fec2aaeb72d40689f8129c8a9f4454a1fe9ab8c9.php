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

/* C:\Users\deina\Desktop\Prostredie\htdocs\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_28b3a741812b1c28a6ed45f5b7be91eaccb3ce1e028e38c81b42a99c091c7df9 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Bootstrap 4</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "baseFileName", [], "any", false, false, false, 6) == "features")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "baseFileName", [], "any", false, false, false, 9) == "author")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("author");
        echo "\">Author</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'features'|page }}\">Bootstrap 4</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'features' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'features'|page }}\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'author' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'author'|page }}\">Author</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
