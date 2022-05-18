<?php

/* FactelBundle:User:new.html.twig */
class __TwigTemplate_3a2c944936727254a36a3520f32bdbb4a32d19607edac916a263f62a770f65d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:User:new.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Nuevo Usuario
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
        </ul>
    </div>

</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button id=\"submit\" class=\"hidden\" type=\"submit\">
    </button>
  
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  64 => 22,  60 => 21,  57 => 20,  54 => 19,  44 => 13,  32 => 3,  29 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Nuevo Usuario
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            <li><a href=\"{{ path('usuario') }}\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
        </ul>
    </div>

</div>
{% endblock %}
{% block content %}

    {{ form_start(form) }}
    {{ form_widget(form) }}

    <button id=\"submit\" class=\"hidden\" type=\"submit\">
    </button>
  
{{ form_end(form) }}

{% endblock %}", "FactelBundle:User:new.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/User/new.html.twig");
    }
}
