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
class __TwigTemplate_296c0bf4f10802b52c89252939349a7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show2.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        // line 45
        echo "    <img class=\"img\" src=\"../../../../public/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 45, $this->source); })()), "dni", [], "any", false, false, false, 45), "html", null, true);
        echo ".png\" alt=\"QR Code\" width=\"120px\" height=\"120px\">
    <br>
    <br>
    <div>SECTOR GENERAL</div>
    <div class=\"nom\"><strong>";
        // line 49
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49)), "html", null, true);
        echo "</strong></div> 
    <div class=\"val\"><em>Invitación Válida para 10 personas</em><div>
</div>
    ";
        // line 66
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "promotor/show2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 66,  117 => 49,  109 => 45,  74 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"user-scalable=no, width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"public/css/show2.css\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
</head>

{% block body %}
<style> 
div{
    font-family: Arial black;
}
.container {
    text-align: center;
}
.val {
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
    {# <img class=\"img\" src=\"C:/xampp/htdocs/Eventos/public/img/{{promotor.dni}}.png\" alt=\"QR Code\" width=\"120px\" height=\"120px\"> #}
    <img class=\"img\" src=\"../../../../public/img/{{promotor.dni}}.png\" alt=\"QR Code\" width=\"120px\" height=\"120px\">
    <br>
    <br>
    <div>SECTOR GENERAL</div>
    <div class=\"nom\"><strong>{{promotor.nombre | upper}}</strong></div> 
    <div class=\"val\"><em>Invitación Válida para 10 personas</em><div>
</div>
    {# <table class=\"table\">
        <tbody>
            <tr>
                <th>Grupo</th>
                <td>{{ promotor.grupo }}</td>
                <th>Promotor</th>
                <td>{{ promotor.nombre }}</td>
                <th>QR</th>
                <td><img src=\"{{ asset('img/'~ promotor.dni ~ '.png') }}\" alt=\"QR Code\"></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_promotor_index') }}\">back to list</a> #}

{% endblock %}
", "promotor/show2.html.twig", "C:\\xampp\\htdocs\\Eventos\\templates\\promotor\\show2.html.twig");
    }
}
