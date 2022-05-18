<?php

/* FactelBundle:Emisor:edit.html.twig */
class __TwigTemplate_210a4fa8891662ac7fb63cf2ef16b332fb94116267c5a430ef0fb234557d68b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Emisor:edit.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "razonSocial", array()), "html", null, true);
        echo "
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor_new");
            echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            ";
        }
        // line 16
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            
            ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
            ";
        }
        // line 22
        echo "        </ul>
    </div>

</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
   ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <button id=\"submit\" class=\"hidden\" type=\"submit\">    </button>

";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Emisor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  91 => 33,  85 => 30,  81 => 29,  78 => 28,  75 => 27,  67 => 22,  62 => 19,  60 => 18,  54 => 16,  48 => 14,  46 => 13,  32 => 3,  29 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> {{entity.razonSocial}}
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{ path('emisor_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            {% endif %}
            <li><a href=\"{{ path('emisor') }}\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
            {% endif %}
        </ul>
    </div>

</div>
{% endblock %}
{% block content %}

{{ form_start(edit_form) }}
   {{ form_widget(edit_form) }}
    <button id=\"submit\" class=\"hidden\" type=\"submit\">    </button>

{{ form_end(edit_form) }}
{{ form(delete_form) }}

{% endblock %}
", "FactelBundle:Emisor:edit.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Emisor/edit.html.twig");
    }
}
