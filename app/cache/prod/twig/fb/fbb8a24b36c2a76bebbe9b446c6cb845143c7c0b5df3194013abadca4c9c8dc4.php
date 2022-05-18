<?php

/* FactelBundle:Emisor:show.html.twig */
class __TwigTemplate_585c9f851b4cf869f6e58fd4d06458c1656da541cf856166efc80983b6c1d143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Emisor:show.html.twig", 1);
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
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor_new");
            echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            ";
        }
        // line 15
        echo "            <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\"><i class=\"fa fa-undo\"></i> Emisores</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
            ";
        }
        // line 21
        echo "        </ul>
    </div>

</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "<table class=\"table\">
    <tbody>
        <tr>
            <th>Estado</th>
            <td>";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "activo", array())) {
            echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
        } else {
            echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Ruc</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ruc", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Raz&oacute;n Social</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "razonSocial", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre Comercial</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreComercial", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Direcci&oacute;n Matriz</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccionMatriz", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ambiente</th>
            <td>";
        // line 51
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ambiente", array()) == "1")) {
            echo "Pruebas";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Tipo de Emisi&oacute;n</th>
            <td>";
        // line 55
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoEmision", array()) == "1")) {
            echo "Emisi&oacute;n Normal";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Contribuyente Especial</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contribuyenteEspecial", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Obligado Contabilidad</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obligadoContabilidad", array()), "html", null, true);
        echo "</td>
        </tr>

    </tbody>
</table>
";
        // line 68
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 69
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "
";
        }
        // line 71
        echo "
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Emisor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 71,  163 => 69,  161 => 68,  153 => 63,  146 => 59,  135 => 55,  124 => 51,  117 => 47,  110 => 43,  103 => 39,  96 => 35,  85 => 31,  79 => 27,  76 => 26,  68 => 21,  60 => 17,  58 => 16,  53 => 15,  47 => 13,  45 => 12,  32 => 3,  29 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i>{{entity.razonSocial}}
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{ path('emisor_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            {% endif %}
            <li><a href=\"{{ path('emisor_edit', { 'id': entity.id }) }}\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
            {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{ path('emisor') }}\"><i class=\"fa fa-undo\"></i> Emisores</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
            {% endif %}
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
            <th>Ruc</th>
            <td>{{ entity.ruc }}</td>
        </tr>
        <tr>
            <th>Raz&oacute;n Social</th>
            <td>{{ entity.razonSocial }}</td>
        </tr>
        <tr>
            <th>Nombre Comercial</th>
            <td>{{ entity.nombreComercial }}</td>
        </tr>
        <tr>
            <th>Direcci&oacute;n Matriz</th>
            <td>{{ entity.direccionMatriz }}</td>
        </tr>
        <tr>
            <th>Ambiente</th>
            <td>{%if entity.ambiente == '1'%}Pruebas{% else %} Producci&oacute;n {% endif %}</td>
        </tr>
        <tr>
            <th>Tipo de Emisi&oacute;n</th>
            <td>{%if entity.tipoEmision == '1'%}Emisi&oacute;n Normal{% else %} Emisi&oacute;n por Indisponibilidad del Sistema {% endif %}</td>
        </tr>
        <tr>
            <th>Contribuyente Especial</th>
            <td>{{ entity.contribuyenteEspecial }}</td>
        </tr>
        <tr>
            <th>Obligado Contabilidad</th>
            <td>{{ entity.obligadoContabilidad }}</td>
        </tr>

    </tbody>
</table>
{% if is_granted('ROLE_ADMIN') %}
{{ form(delete_form) }}
{% endif %}

{% endblock %}
", "FactelBundle:Emisor:show.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Emisor/show.html.twig");
    }
}
