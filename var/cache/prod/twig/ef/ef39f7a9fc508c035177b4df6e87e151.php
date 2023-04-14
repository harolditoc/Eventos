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

/* promotor/show2.html.twig */
class __TwigTemplate_5deadf871f086899041426d771d23b74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"user-scalable=no, width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"public/css/show2.css\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
</head>

";
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<style> 
div{
    font-family: Arial black;
}
.container {
    text-align: center;
}
.val {
    color: #0070c6;
}
.inv {
    color: #0070c6;
}
.piña {
    font-size:24px;
}
.nom {
    font-size:24px;
}
.img {
    border: 2px solid #dddddd;
    padding: 15px;
}
</style>

<div class=\"container\">
    <br>
    <img src=\"../../../../public/img/Bobs.png\" alt=\"\" width=\"340px\" height=\"320px\">
    <br>
    <br>
    <div class=\"piña\"><strong>ROMPE LA PIÑATA</strong></div>
    <div>Villa Santa - Santa Clara<div>
    <br>
    <div>Sábado 15 de Abril 2023</div>
    <div class=\"val\"><strong>Válido hasta las 11:00 pm</strong></div>
    <br>
    ";
        // line 48
        echo "    <img class=\"img\" src=\"../../../../public/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotor"] ?? null), "dni", [], "any", false, false, false, 48), "html", null, true);
        echo ".png\" alt=\"QR Code\" width=\"120px\" height=\"120px\">
    <br>
    <br>
    <div>SECTOR GENERAL</div>
    <div class=\"nom\"><strong>";
        // line 52
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotor"] ?? null), "nombre", [], "any", false, false, false, 52)), "html", null, true);
        echo "</strong></div> 
    <div class=\"inv\"><em>Invitación Válida para 10 personas</em><div>
</div>
    ";
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "promotor/show2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 69,  102 => 52,  94 => 48,  56 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "promotor/show2.html.twig", "C:\\xampp\\htdocs\\Eventos\\templates\\promotor\\show2.html.twig");
    }
}
