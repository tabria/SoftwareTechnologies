<?php

/* calculator/index.html.twig */
class __TwigTemplate_6d6f3a87a448744e85736ad14da18b86251934b22d1262bd88a880866c434788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculator/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f53d9f2d4d3352eaed1d2f9b81196b4f886165fe24cd409ae2e07a22f52872a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f53d9f2d4d3352eaed1d2f9b81196b4f886165fe24cd409ae2e07a22f52872a->enter($__internal_4f53d9f2d4d3352eaed1d2f9b81196b4f886165fe24cd409ae2e07a22f52872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f53d9f2d4d3352eaed1d2f9b81196b4f886165fe24cd409ae2e07a22f52872a->leave($__internal_4f53d9f2d4d3352eaed1d2f9b81196b4f886165fe24cd409ae2e07a22f52872a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_90c70972a4ce297f479b8fb57bc218d477b91ba7aa400062c02f2dc42edcb10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c70972a4ce297f479b8fb57bc218d477b91ba7aa400062c02f2dc42edcb10d->enter($__internal_90c70972a4ce297f479b8fb57bc218d477b91ba7aa400062c02f2dc42edcb10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" ";
        // line 18
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "+"))) ? ("selected") : (""));
        echo ">+</option>
                                <option value=\"-\" ";
        // line 19
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "-"))) ? ("selected") : (""));
        echo ">-</option>
                                <option value=\"*\" ";
        // line 20
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "*"))) ? ("selected") : (""));
        echo ">*</option>
                                <option value=\"/\" ";
        // line 21
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "/"))) ? ("selected") : (""));
        echo ">/</option>
                                <option value=\"^\" ";
        // line 22
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "^"))) ? ("selected") : (""));
        echo ">^</option>
                                <option value=\"%\" ";
        // line 23
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "%"))) ? ("selected") : (""));
        echo ">%</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[equalOperator]\">
                                <option value=\"=\" ";
        // line 38
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "equalOperator", array()) == "="))) ? ("selected") : (""));
        echo ">=</option>
                                <option value=\"=b\" ";
        // line 39
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "equalOperator", array()) == "=b"))) ? ("selected") : (""));
        echo ">= (binary)</option>
                                <option value=\"=o\" ";
        // line 40
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "equalOperator", array()) == "=o"))) ? ("selected") : (""));
        echo ">= (octa)</option>
                                <option value=\"=h\" ";
        // line 41
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "equalOperator", array()) == "=h"))) ? ("selected") : (""));
        echo ">= (hexa)</option>
                            </select>
                        </div>
                    </div>

                    ";
        // line 46
        if (array_key_exists("form", $context)) {
            // line 47
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                    ";
        }
        // line 49
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (((array_key_exists("result", $context) &&  !(null === (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) ? ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_90c70972a4ce297f479b8fb57bc218d477b91ba7aa400062c02f2dc42edcb10d->leave($__internal_90c70972a4ce297f479b8fb57bc218d477b91ba7aa400062c02f2dc42edcb10d_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  131 => 49,  125 => 47,  123 => 46,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  93 => 31,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"{{ path('index') }}\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"{{ calculator.leftOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" {{ calculator is defined and calculator.operator == '+' ? 'selected' : '' }}>+</option>
                                <option value=\"-\" {{ calculator is defined and calculator.operator == '-' ? 'selected' : '' }}>-</option>
                                <option value=\"*\" {{ calculator is defined and calculator.operator == '*' ? 'selected' : '' }}>*</option>
                                <option value=\"/\" {{ calculator is defined and calculator.operator == '/' ? 'selected' : '' }}>/</option>
                                <option value=\"^\" {{ calculator is defined and calculator.operator == '^' ? 'selected' : '' }}>^</option>
                                <option value=\"%\" {{ calculator is defined and calculator.operator == '%' ? 'selected' : '' }}>%</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"{{ calculator.rightOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[equalOperator]\">
                                <option value=\"=\" {{ calculator is defined and calculator.equalOperator == '=' ? 'selected' : '' }}>=</option>
                                <option value=\"=b\" {{ calculator is defined and calculator.equalOperator == '=b' ? 'selected' : '' }}>= (binary)</option>
                                <option value=\"=o\" {{ calculator is defined and calculator.equalOperator == '=o' ? 'selected' : '' }}>= (octa)</option>
                                <option value=\"=h\" {{ calculator is defined and calculator.equalOperator == '=h' ? 'selected' : '' }}>= (hexa)</option>
                            </select>
                        </div>
                    </div>

                    {% if form is defined %}
                        {{ form_row(form._token) }}
                    {% endif %}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"{{ result ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
