<?php

/* FactelBundle:PtoEmision:edit.html.twig */
class __TwigTemplate_bab86a62761024ecbfe855d21fb6d90c07f18b7b1dd9287fe192d54a9b212472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:PtoEmision:edit.html.twig", 2);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();
                    return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
        </ul>
    </div>

</div>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
   ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

<button id=\"submit\" class=\"hidden\" type=\"submit\">
    </button>

";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:PtoEmision:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 32,  73 => 27,  69 => 26,  66 => 25,  63 => 24,  51 => 16,  47 => 15,  32 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"FactelBundle::Layout.html.twig\" %}
{% block panel_title %}
<i class=\"fa fa-bar-chart-o fa-fw\"></i> {{entity.nombre}}
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();
                    return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            <li><a href=\"{{ path('ptoemision_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"{{ path('ptoemision') }}\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
        </ul>
    </div>

</div>
{% endblock %}
{% block content %}

{{ form_start(edit_form) }}
   {{ form_widget(edit_form) }}

<button id=\"submit\" class=\"hidden\" type=\"submit\">
    </button>

{{ form_end(edit_form) }}
{{ form(delete_form) }}

{% endblock %}
", "FactelBundle:PtoEmision:edit.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/PtoEmision/edit.html.twig");
    }
}
