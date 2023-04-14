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

/* @LiveComponent/form_theme.html.twig */
class __TwigTemplate_f464ef2152d8ff401cb82c5cc7b87924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'live_collection_widget' => [$this, 'block_live_collection_widget'],
            'live_collection_entry_row' => [$this, 'block_live_collection_entry_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('live_collection_widget', $context, $blocks);
        // line 8
        $this->displayBlock('live_collection_entry_row', $context, $blocks);
    }

    // line 1
    public function block_live_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock("form_widget", $context, $blocks);
        // line 3
        if ((((((array_key_exists("skip_add_button", $context)) ? (_twig_default_filter(($context["skip_add_button"] ?? null), false)) : (false)) === false) && array_key_exists("button_add", $context)) &&  !twig_get_attribute($this->env, $this->source, ($context["button_add"] ?? null), "rendered", [], "any", false, false, false, 3))) {
            // line 4
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["button_add"] ?? null), 'row');
        }
    }

    // line 8
    public function block_live_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $this->displayBlock("form_row", $context, $blocks);
        // line 10
        if ((array_key_exists("button_delete", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["button_delete"] ?? null), "rendered", [], "any", false, false, false, 10))) {
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["button_delete"] ?? null), 'row');
        }
    }

    public function getTemplateName()
    {
        return "@LiveComponent/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  64 => 10,  62 => 9,  58 => 8,  53 => 4,  51 => 3,  49 => 2,  45 => 1,  41 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@LiveComponent/form_theme.html.twig", "C:\\xampp\\htdocs\\Eventos\\vendor\\symfony\\ux-live-component\\templates\\form_theme.html.twig");
    }
}
