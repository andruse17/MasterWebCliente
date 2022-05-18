<?php

/* FactelBundle:Cliente:index.html.twig */
class __TwigTemplate_aefe615d793381d8e6c9f793b3676332dd9ba9db172017515e19bef36ad7893f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Cliente:index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "<!-- DataTables CSS -->
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- DataTables Responsive CSS -->
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_panel_title($context, array $blocks = array())
    {
        // line 9
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Clientes
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
        echo "\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nuevo
        </button>
    </a>
</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "<div class=\"col-sm-12 alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <h4><strong>Carga Exitosa</strong></h4>
    <p>";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo Identificaci&oacute;n</th>
                <th>Identificaci&oacute;n</th>
                <th>Celular</th>
                <th>Correo Electr&oacute;nico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>
                <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>
                    ";
            // line 45
            if (($this->getAttribute($context["entity"], "tipoIdentificacion", array()) == "04")) {
                // line 46
                echo "                    RUC
                    ";
            } elseif (($this->getAttribute(            // line 47
$context["entity"], "tipoIdentificacion", array()) == "05")) {
                // line 48
                echo "                    CEDULA
                    ";
            } elseif (($this->getAttribute(            // line 49
$context["entity"], "tipoIdentificacion", array()) == "06")) {
                // line 50
                echo "                    PASAPORTE
                    ";
            } elseif (($this->getAttribute(            // line 51
$context["entity"], "tipoIdentificacion", array()) == "07")) {
                // line 52
                echo "                    CONSUMIDOR FINAL
                    ";
            } elseif (($this->getAttribute(            // line 53
$context["entity"], "tipoIdentificacion", array()) == "08")) {
                // line 54
                echo "                    DEL EXTERIOR
                    ";
            } elseif (($this->getAttribute(            // line 55
$context["entity"], "tipoIdentificacion", array()) == "09")) {
                // line 56
                echo "                    PLACA
                    ";
            }
            // line 58
            echo "                </td>
                <td>
                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "identificacion", array()), "html", null, true);
            echo "
                </td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>
                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 73
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($context["entity"], "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        // line 82
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 84,  205 => 83,  200 => 82,  197 => 81,  190 => 77,  180 => 73,  174 => 70,  166 => 65,  161 => 63,  157 => 62,  152 => 60,  148 => 58,  144 => 56,  142 => 55,  139 => 54,  137 => 53,  134 => 52,  132 => 51,  129 => 50,  127 => 49,  124 => 48,  122 => 47,  119 => 46,  117 => 45,  110 => 43,  107 => 42,  103 => 41,  88 => 28,  79 => 25,  74 => 22,  70 => 21,  67 => 20,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
{% block css %}
<!-- DataTables CSS -->
<link href=\"{{asset('recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}\" rel=\"stylesheet\">
<!-- DataTables Responsive CSS -->
<link href=\"{{asset('recursos/bower_components/datatables-responsive/css/dataTables.responsive.css')}}\" rel=\"stylesheet\">
{% endblock %}
{% block panel_title %}
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Clientes
<div class=\"pull-right\">
    <a href=\"{{ path('cliente_new') }}\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nuevo
        </button>
    </a>
</div>
{% endblock %}

{% block content %}
{% for flashMessage in app.session.flashbag.get('notice') %}
<div class=\"col-sm-12 alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <h4><strong>Carga Exitosa</strong></h4>
    <p>{{ flashMessage }}</p>
</div>
        {% endfor %}
<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo Identificaci&oacute;n</th>
                <th>Identificaci&oacute;n</th>
                <th>Celular</th>
                <th>Correo Electr&oacute;nico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('cliente_show', { 'id': entity.id }) }}\">{{ entity.nombre }}</a></td>
                <td>
                    {% if  entity.tipoIdentificacion == '04' %}
                    RUC
                    {% elseif entity.tipoIdentificacion == '05' %}
                    CEDULA
                    {% elseif entity.tipoIdentificacion == '06' %}
                    PASAPORTE
                    {% elseif entity.tipoIdentificacion == '07' %}
                    CONSUMIDOR FINAL
                    {% elseif entity.tipoIdentificacion == '08' %}
                    DEL EXTERIOR
                    {% elseif entity.tipoIdentificacion == '09' %}
                    PLACA
                    {% endif %}
                </td>
                <td>
                    {{entity.identificacion}}
                </td>
                <td>{{ entity.celular }}</td>
                <td>{{ entity.correoElectronico }}</td>
                <td>
                    <a href=\"{{ path('cliente_edit', { 'id': entity.id }) }}\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>
                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"{{entity.id}}\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     {{ form(deleteForms[entity.id], { 'attr': {'id': entity.id } })}}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
{% block javascript %}
<script src=\"{{asset('recursos/bower_components/datatables/media/js/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{asset('recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}\"></script>
<script src=\"{{asset('recursos/js/script.js')}}\"></script>

    {% endblock %}", "FactelBundle:Cliente:index.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Cliente/index.html.twig");
    }
}
