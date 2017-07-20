<?php

/* base.html.twig */
class __TwigTemplate_257ab960a4bcfc40f10c3c507ec6b39a60f5a139eaf78874c053edda09c042b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7618a249277461c8fbe35054594588c4586649af524cccdac267548934982d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7618a249277461c8fbe35054594588c4586649af524cccdac267548934982d92->enter($__internal_7618a249277461c8fbe35054594588c4586649af524cccdac267548934982d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_7618a249277461c8fbe35054594588c4586649af524cccdac267548934982d92->leave($__internal_7618a249277461c8fbe35054594588c4586649af524cccdac267548934982d92_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_a460bde60cdc59a2d9a89bf98d0cf915dd2011d6835758176fd4a5989c435a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a460bde60cdc59a2d9a89bf98d0cf915dd2011d6835758176fd4a5989c435a7b->enter($__internal_a460bde60cdc59a2d9a89bf98d0cf915dd2011d6835758176fd4a5989c435a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_a460bde60cdc59a2d9a89bf98d0cf915dd2011d6835758176fd4a5989c435a7b->leave($__internal_a460bde60cdc59a2d9a89bf98d0cf915dd2011d6835758176fd4a5989c435a7b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddf0073b16a38c182fcacf686d0f9fae10b5f73f66db74b61ff16248514f0e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf0073b16a38c182fcacf686d0f9fae10b5f73f66db74b61ff16248514f0e49->enter($__internal_ddf0073b16a38c182fcacf686d0f9fae10b5f73f66db74b61ff16248514f0e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_ddf0073b16a38c182fcacf686d0f9fae10b5f73f66db74b61ff16248514f0e49->leave($__internal_ddf0073b16a38c182fcacf686d0f9fae10b5f73f66db74b61ff16248514f0e49_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_53019d03c45a1e58fb5fde75897ea8a846b24d79122b8ae119eff21a87cb4985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53019d03c45a1e58fb5fde75897ea8a846b24d79122b8ae119eff21a87cb4985->enter($__internal_53019d03c45a1e58fb5fde75897ea8a846b24d79122b8ae119eff21a87cb4985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_53019d03c45a1e58fb5fde75897ea8a846b24d79122b8ae119eff21a87cb4985->leave($__internal_53019d03c45a1e58fb5fde75897ea8a846b24d79122b8ae119eff21a87cb4985_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_92484853ac359558d324a6b5a9b1b95e06c2c589ff3824dd2e9924ceb413562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92484853ac359558d324a6b5a9b1b95e06c2c589ff3824dd2e9924ceb413562b->enter($__internal_92484853ac359558d324a6b5a9b1b95e06c2c589ff3824dd2e9924ceb413562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_92484853ac359558d324a6b5a9b1b95e06c2c589ff3824dd2e9924ceb413562b->leave($__internal_92484853ac359558d324a6b5a9b1b95e06c2c589ff3824dd2e9924ceb413562b_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_b86c1503f1da40174a2c2bbe4ee2da1cb3869fe015803a423616b3b1146e2517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86c1503f1da40174a2c2bbe4ee2da1cb3869fe015803a423616b3b1146e2517->enter($__internal_b86c1503f1da40174a2c2bbe4ee2da1cb3869fe015803a423616b3b1146e2517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_b86c1503f1da40174a2c2bbe4ee2da1cb3869fe015803a423616b3b1146e2517->leave($__internal_b86c1503f1da40174a2c2bbe4ee2da1cb3869fe015803a423616b3b1146e2517_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_478e6ae7d8b4cf2885f95b8c5b77278b7f1f77af6b236af232aa5157b7a6c9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478e6ae7d8b4cf2885f95b8c5b77278b7f1f77af6b236af232aa5157b7a6c9e6->enter($__internal_478e6ae7d8b4cf2885f95b8c5b77278b7f1f77af6b236af232aa5157b7a6c9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_478e6ae7d8b4cf2885f95b8c5b77278b7f1f77af6b236af232aa5157b7a6c9e6->leave($__internal_478e6ae7d8b4cf2885f95b8c5b77278b7f1f77af6b236af232aa5157b7a6c9e6_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7712e05d661fed422c506ae705d60a5f4f16c15ddf25d9656aa297098bac16a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7712e05d661fed422c506ae705d60a5f4f16c15ddf25d9656aa297098bac16a7->enter($__internal_7712e05d661fed422c506ae705d60a5f4f16c15ddf25d9656aa297098bac16a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7712e05d661fed422c506ae705d60a5f4f16c15ddf25d9656aa297098bac16a7->leave($__internal_7712e05d661fed422c506ae705d60a5f4f16c15ddf25d9656aa297098bac16a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
