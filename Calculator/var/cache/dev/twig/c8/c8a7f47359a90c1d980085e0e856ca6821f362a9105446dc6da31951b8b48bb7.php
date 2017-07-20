<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9697b9c061d4fc57943ffc436540a502ebdd42c86f59c88ef29f1c31537a4776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b952b6561f9c61154d280f87669a1523f43902cc5819302e07b1e0df498b594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b952b6561f9c61154d280f87669a1523f43902cc5819302e07b1e0df498b594->enter($__internal_0b952b6561f9c61154d280f87669a1523f43902cc5819302e07b1e0df498b594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b952b6561f9c61154d280f87669a1523f43902cc5819302e07b1e0df498b594->leave($__internal_0b952b6561f9c61154d280f87669a1523f43902cc5819302e07b1e0df498b594_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e64cd3adab483e1b62c009ec6f69f2bd079e4bed364b7ff15f0b7f7958e6e81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64cd3adab483e1b62c009ec6f69f2bd079e4bed364b7ff15f0b7f7958e6e81f->enter($__internal_e64cd3adab483e1b62c009ec6f69f2bd079e4bed364b7ff15f0b7f7958e6e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e64cd3adab483e1b62c009ec6f69f2bd079e4bed364b7ff15f0b7f7958e6e81f->leave($__internal_e64cd3adab483e1b62c009ec6f69f2bd079e4bed364b7ff15f0b7f7958e6e81f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba2ec923279c13ae714b915d0c0d7fb618878dc35a64ee3676dc96ba9275b56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2ec923279c13ae714b915d0c0d7fb618878dc35a64ee3676dc96ba9275b56a->enter($__internal_ba2ec923279c13ae714b915d0c0d7fb618878dc35a64ee3676dc96ba9275b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ba2ec923279c13ae714b915d0c0d7fb618878dc35a64ee3676dc96ba9275b56a->leave($__internal_ba2ec923279c13ae714b915d0c0d7fb618878dc35a64ee3676dc96ba9275b56a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ff987ca42578e35894dcb73b7a4c53987fb90da6bf9bd4a8255197003f8d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ff987ca42578e35894dcb73b7a4c53987fb90da6bf9bd4a8255197003f8d50->enter($__internal_f9ff987ca42578e35894dcb73b7a4c53987fb90da6bf9bd4a8255197003f8d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f9ff987ca42578e35894dcb73b7a4c53987fb90da6bf9bd4a8255197003f8d50->leave($__internal_f9ff987ca42578e35894dcb73b7a4c53987fb90da6bf9bd4a8255197003f8d50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
