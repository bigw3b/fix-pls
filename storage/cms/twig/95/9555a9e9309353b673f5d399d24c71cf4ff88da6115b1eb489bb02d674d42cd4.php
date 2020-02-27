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

/* C:\Users\deina\Desktop\Prostredie\htdocs\fixpls/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm */
class __TwigTemplate_0088881d70a5760079a7dc9c9670dddf36465bbca036705b31ab8e9aca711771 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put jumbotron %}
  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
{% endput %}

<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>", "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm", "");
    }
}
