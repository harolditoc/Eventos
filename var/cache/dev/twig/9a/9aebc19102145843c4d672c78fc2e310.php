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

/* promotor/show3.html.twig */
class __TwigTemplate_129732da6929aa5b38033273fe3cfc1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'CSS' => [$this, 'block_CSS'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotor/show3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/show3.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container text-center\" style=\"width: 500px\">
    <div class=\"row\">
        <div class=\"col\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Bobs.png"), "html", null, true);
        echo "\" width=\"340px\" height=\"320px\"> 
            <br>
            <br>
            <div class=\"piña\">ROMPE LA PIÑATA</div>
            <div>Villa Santa - Santa Clara</div>
            <br>
            <div>Sábado 15 de Abril 2023</div>
            <div class=\"val\"><strong>Válido hasta las 11:00 pm</strong></div>
            <br>
            <img class=\"img\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 21, $this->source); })()), "dni", [], "any", false, false, false, 21)) . ".png")), "html", null, true);
        echo "\" width=\"120px\" height=\"120px\">
            <br>
            <br>
            <div>SECTOR GENERAL</div>
            <div class=\"nom\"><strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 25, $this->source); })()), "nombre", [], "any", false, false, false, 25)), "html", null, true);
        echo "</strong></div> 
            <div class=\"val\"><em>Invitación Válida para 10 personas</em></div>
        </div>
    </div>
</div>
    ";
        // line 44
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "promotor/show3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  117 => 25,  110 => 21,  98 => 12,  92 => 8,  82 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{# {% block title %}Promotor{% endblock %} #}
{% block CSS%}
    <link rel=\"stylesheet\" href=\"{{ asset('css/show3.css') }}\" />
{% endblock %}
{% block body %}

<div class=\"container text-center\" style=\"width: 500px\">
    <div class=\"row\">
        <div class=\"col\">
        <img src=\"{{ asset('img/Bobs.png') }}\" width=\"340px\" height=\"320px\"> 
            <br>
            <br>
            <div class=\"piña\">ROMPE LA PIÑATA</div>
            <div>Villa Santa - Santa Clara</div>
            <br>
            <div>Sábado 15 de Abril 2023</div>
            <div class=\"val\"><strong>Válido hasta las 11:00 pm</strong></div>
            <br>
            <img class=\"img\" src=\"{{ asset('img/'~ promotor.dni ~ '.png') }}\" width=\"120px\" height=\"120px\">
            <br>
            <br>
            <div>SECTOR GENERAL</div>
            <div class=\"nom\"><strong>{{promotor.nombre | upper}}</strong></div> 
            <div class=\"val\"><em>Invitación Válida para 10 personas</em></div>
        </div>
    </div>
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

{% endblock %}", "promotor/show3.html.twig", "C:\\xampp\\htdocs\\Eventos\\templates\\promotor\\show3.html.twig");
    }
}
