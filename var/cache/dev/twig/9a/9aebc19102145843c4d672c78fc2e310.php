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
<div class=\"container text-center\">
    <div class=\"row\">
        <div class=\"col\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Bobs.png"), "html", null, true);
        echo "\" width=\"340px\" height=\"320px\"> 
        <strong>
            <br>
            <br>
            <div class=\"piña\">ROMPE LA PIÑATA</div>
            <div>Villa Santa - Santa Clara</div>
            <br>
            <div>Sábado 15 de Abril 2023</div>
            <div class=\"val\"><strong>Válido hasta las 11:00 pm</strong></div>
            <br>
            <img class=\"img\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 22, $this->source); })()), "dni", [], "any", false, false, false, 22)) . ".png")), "html", null, true);
        echo "\" width=\"120px\" height=\"120px\">
            <br>
            <br>
            <div>SECTOR GENERAL</div>
            <div class=\"nom\"><strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26)), "html", null, true);
        echo "</strong></div> 
            <div class=\"val\"><em>Invitación Válida para 10 personas</em></div>
            </strong>
        </div>
    </div>
</div>

 ";
        // line 270
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
        return array (  128 => 270,  118 => 26,  111 => 22,  98 => 12,  92 => 8,  82 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{# {% block title %}Promotor{% endblock %} #}
{% block CSS%}
    <link rel=\"stylesheet\" href=\"{{ asset('css/show3.css') }}\" />
{% endblock %}
{% block body %}

<div class=\"container text-center\">
    <div class=\"row\">
        <div class=\"col\">
        <img src=\"{{ asset('img/Bobs.png') }}\" width=\"340px\" height=\"320px\"> 
        <strong>
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
            </strong>
        </div>
    </div>
</div>

 {# <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </styl>


  <body>
<main>

  <section class=\"py-5 text-center container\">
    <div class=\"row py-lg-5\">
      <div class=\"col-lg-6 col-md-8 mx-auto\">
        <h1 class=\"fw-light\">Album example</h1>
        <p class=\"lead text-body-secondary\">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href=\"#\" class=\"btn btn-primary my-2\">Main call to action</a>
          <a href=\"#\" class=\"btn btn-secondary my-2\">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class=\"album py-5 bg-body-tertiary\">
    <div class=\"container\">

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>
            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-body-secondary\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main> #}

{% endblock %}", "promotor/show3.html.twig", "C:\\xampp\\htdocs\\Eventos\\templates\\promotor\\show3.html.twig");
    }
}
