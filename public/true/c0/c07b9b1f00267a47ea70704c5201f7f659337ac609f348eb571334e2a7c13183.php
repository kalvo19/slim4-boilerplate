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

/* layouts/app.twig */
class __TwigTemplate_f69eef4c569ed69d485c85c511ad6ad1a45f2f11246ff4f82257584351c434e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Application</title>
</head>
<body>
    <div id=\"app\">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "    </div>
</body>
</html>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  53 => 14,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/app.twig", "E:\\Salva\\Proyectos\\XAMPP\\slim4-boilerplate\\views\\layouts\\app.twig");
    }
}
