<?php

/* FactelBundle:User:show.html.twig */
class __TwigTemplate_2c9f798467ebe2d81f96830f3e170dd4f614e9aff6e22a9a6392a046fbf7980c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:User:show.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i>";
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
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
        echo "\"><i class=\"fa fa-undo\"></i> Usuarios</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
        </ul>
    </div>

</div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<table class=\"table\">
    <tbody>
        <tr>
            <th>Estado</th>
            <td>";
        // line 27
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array())) {
            echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
        } else {
            echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  106 => 43,  99 => 39,  92 => 35,  85 => 31,  74 => 27,  68 => 23,  65 => 22,  53 => 14,  49 => 13,  45 => 12,  32 => 3,  29 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i>{{entity.nombre}}
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"{{ path('usuario_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"{{ path('usuario_edit', { 'id': entity.id }) }}\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            <li><a href=\"{{ path('usuario') }}\"><i class=\"fa fa-undo\"></i> Usuarios</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
        </ul>
    </div>

</div>
{% endblock %}
{% block content %}
<table class=\"table\">
    <tbody>
        <tr>
            <th>Estado</th>
            <td>{%if entity.isActive %}<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>{%else%}<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>{% endif%}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ entity.username }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ entity.nombre }}</td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td>{{ entity.apellidos }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ entity.email }}</td>
        </tr>
    </tbody>
</table>

{{ form(delete_form) }}

{% endblock %}
", "FactelBundle:User:show.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/User/show.html.twig");
    }
}
