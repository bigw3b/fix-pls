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

/* C:\Users\deina\Desktop\Prostredie\htdocs\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm */
class __TwigTemplate_4a833d6c6ff7d2841783bf8b00676f8eebae51a7ec8dcfdb2eb4f4a3250ebfe9 extends \Twig\Template
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
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">Bootstrap 4</h1>
\t\t\t<p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 13
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  52 => 4,  43 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Bootstrap 4</h1>
\t\t\t<p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "C:\\Users\\deina\\Desktop\\Prostredie\\htdocs\\fixpls/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm", "");
    }
}
