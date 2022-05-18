<?php

/* FactelBundle:Emisor:new.html.twig */
class __TwigTemplate_3a98908c768594abbc9bfdf99988eeea1ef41d68cbc9d103c4089b1954a447c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Emisor:new.html.twig", 1);
        $this->blocks = array(
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FactelBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_panel_title($context, array $blocks = array())
    {
        // line 3
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Nuevo Emisor
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<div class=\"col-lg-offset-3 col-lg-6 botones\">
    <button class=\"btn btn-success\" type=\"submit\">
        <i class=\"fa fa-save\"></i>
        Crear
    </button>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
        echo "\">
        <button class=\"btn btn-warning\" type=\"button\">
            <i class=\"fa fa-list\"></i>
            Cancelar
        </button>
    </a>
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Emisor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  56 => 14,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FactelBundle::Layout.html.twig\" %}
{% block panel_title %}
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Nuevo Emisor
{% endblock %}
{% block content %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
<div class=\"col-lg-offset-3 col-lg-6 botones\">
    <button class=\"btn btn-success\" type=\"submit\">
        <i class=\"fa fa-save\"></i>
        Crear
    </button>
    <a href=\"{{ path('emisor') }}\">
        <button class=\"btn btn-warning\" type=\"button\">
            <i class=\"fa fa-list\"></i>
            Cancelar
        </button>
    </a>
{{ form_end(form) }}
</div>
{% endblock %}
", "FactelBundle:Emisor:new.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/Emisor/new.html.twig");
    }
}
