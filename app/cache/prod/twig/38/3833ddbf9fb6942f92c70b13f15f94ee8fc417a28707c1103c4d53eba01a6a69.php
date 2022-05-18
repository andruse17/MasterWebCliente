<?php

/* FactelBundle:PtoEmision:show.html.twig */
class __TwigTemplate_3f79fe7ec7dbe8fc4df0fa59b5720df4bbbaa49069e5afe7afb9d337ae0d4f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:PtoEmision:show.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision");
        echo "\"><i class=\"fa fa-undo\"></i> Puntos Emisi&oacute;n</a></li>
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
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo", array())) {
            echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
        } else {
            echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Codigo</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Secuencial Factura</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencialFactura", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Secuencial Nota Cr&eacute;dito</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencialNotaCredito", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Secuencial Nota D&eacute;bito</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencialNotaDebito", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Secuencial Guia Remisi&oacute;n</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencialGuiaRemision", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Secuencial Retenci&oacute;n</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencialRetencion", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
<button id=\"submit\" class=\"hidden\" >
</button> 
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:PtoEmision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  127 => 55,  120 => 51,  113 => 47,  106 => 43,  99 => 39,  92 => 35,  85 => 31,  74 => 27,  68 => 23,  65 => 22,  53 => 14,  49 => 13,  45 => 12,  32 => 3,  29 => 2,  11 => 1,);
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
            <li><a href=\"{{ path('ptoemision_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"{{ path('ptoemision_edit', { 'id': entity.id }) }}\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            <li><a href=\"{{ path('ptoemision') }}\"><i class=\"fa fa-undo\"></i> Puntos Emisi&oacute;n</a></li>
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
            <td>{%if entity.activo %}<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>{%else%}<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>{% endif%}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ entity.nombre }}</td>
        </tr>
        <tr>
            <th>Codigo</th>
            <td>{{ entity.codigo }}</td>
        </tr>
        <tr>
            <th>Secuencial Factura</th>
            <td>{{ entity.secuencialFactura }}</td>
        </tr>
        <tr>
            <th>Secuencial Nota Cr&eacute;dito</th>
            <td>{{ entity.secuencialNotaCredito }}</td>
        </tr>
        <tr>
            <th>Secuencial Nota D&eacute;bito</th>
            <td>{{ entity.secuencialNotaDebito }}</td>
        </tr>
        <tr>
            <th>Secuencial Guia Remisi&oacute;n</th>
            <td>{{ entity.secuencialGuiaRemision }}</td>
        </tr>
        <tr>
            <th>Secuencial Retenci&oacute;n</th>
            <td>{{ entity.secuencialRetencion }}</td>
        </tr>
    </tbody>
</table>
{{ form(delete_form) }}
<button id=\"submit\" class=\"hidden\" >
</button> 
{% endblock %}
", "FactelBundle:PtoEmision:show.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/PtoEmision/show.html.twig");
    }
}
