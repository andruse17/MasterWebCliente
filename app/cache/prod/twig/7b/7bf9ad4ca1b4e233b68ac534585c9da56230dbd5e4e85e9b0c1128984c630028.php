<?php

/* FactelBundle:Producto:cargarProducto.html.twig */
class __TwigTemplate_f87a191cc539e783ec081895772741456cc50972f485c3857a9fea272cd2d387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Producto:cargarProducto.html.twig", 1);
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

    // line 3
    public function block_panel_title($context, array $blocks = array())
    {
        // line 4
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Carga Masiva Producto
<div class=\"pull-right\">
    
</div>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"col-md-12\">
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Producto:cargarProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  46 => 12,  43 => 11,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Carga Masiva Producto
<div class=\"pull-right\">
    
</div>
{% endblock %}

{% block content %}
<div class=\"col-md-12\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</div>
{% endblock %}
", "FactelBundle:Producto:cargarProducto.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/Producto/cargarProducto.html.twig");
    }
}
