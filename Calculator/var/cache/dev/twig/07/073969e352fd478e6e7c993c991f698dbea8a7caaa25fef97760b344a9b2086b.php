<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b98ee1b3ebfd484ebd109db95f66109f42868ae9282a91590a6de46215a15d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5c7b315292f4e49d77c004499265bf10813065acecef701e5d2e6bce1ef49ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c7b315292f4e49d77c004499265bf10813065acecef701e5d2e6bce1ef49ad->enter($__internal_b5c7b315292f4e49d77c004499265bf10813065acecef701e5d2e6bce1ef49ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c7b315292f4e49d77c004499265bf10813065acecef701e5d2e6bce1ef49ad->leave($__internal_b5c7b315292f4e49d77c004499265bf10813065acecef701e5d2e6bce1ef49ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c62d19b39fbe2d53434114768548b2c86ed85452a63b6fe419cfe745a2336e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62d19b39fbe2d53434114768548b2c86ed85452a63b6fe419cfe745a2336e45->enter($__internal_c62d19b39fbe2d53434114768548b2c86ed85452a63b6fe419cfe745a2336e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c62d19b39fbe2d53434114768548b2c86ed85452a63b6fe419cfe745a2336e45->leave($__internal_c62d19b39fbe2d53434114768548b2c86ed85452a63b6fe419cfe745a2336e45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f6965a339b0481ed095fc06fc0a48baf28e2579450ed9f0d67edc92b9213279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6965a339b0481ed095fc06fc0a48baf28e2579450ed9f0d67edc92b9213279->enter($__internal_1f6965a339b0481ed095fc06fc0a48baf28e2579450ed9f0d67edc92b9213279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f6965a339b0481ed095fc06fc0a48baf28e2579450ed9f0d67edc92b9213279->leave($__internal_1f6965a339b0481ed095fc06fc0a48baf28e2579450ed9f0d67edc92b9213279_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62f2557d1d78d814415b523cffa5ed6f13f5fd49deca66e0a75284ed97f10067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f2557d1d78d814415b523cffa5ed6f13f5fd49deca66e0a75284ed97f10067->enter($__internal_62f2557d1d78d814415b523cffa5ed6f13f5fd49deca66e0a75284ed97f10067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62f2557d1d78d814415b523cffa5ed6f13f5fd49deca66e0a75284ed97f10067->leave($__internal_62f2557d1d78d814415b523cffa5ed6f13f5fd49deca66e0a75284ed97f10067_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
