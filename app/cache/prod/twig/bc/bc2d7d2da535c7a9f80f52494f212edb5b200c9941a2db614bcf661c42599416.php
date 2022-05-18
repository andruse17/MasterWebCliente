<?php

/* FactelBundle:Establecimiento:index.html.twig */
class __TwigTemplate_86ddc44b551a594f0cd9a2b039594b16337899d71373372d2799fe37b39f56bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Establecimiento:index.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Establecimientos
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento_new");
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
        echo "
<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>C&oacute;digo</th>
                <th>Direcci&oacute;n</th>
                ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                <th>Emisor</th>
                ";
        }
        // line 32
        echo "                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "direccion", array()), "html", null, true);
            echo "</td>
                ";
            // line 42
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "razonSocial", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 45
            echo "                <td>";
            if ($this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "activo", array())) {
                echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
            } else {
                echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento_edit", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>
                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 55
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>
    ";
    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        // line 64
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Establecimiento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  171 => 65,  166 => 64,  163 => 63,  156 => 59,  146 => 55,  140 => 52,  132 => 47,  122 => 45,  116 => 43,  114 => 42,  110 => 41,  106 => 40,  100 => 39,  97 => 38,  93 => 37,  86 => 32,  82 => 30,  80 => 29,  70 => 21,  67 => 20,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Establecimientos
<div class=\"pull-right\">
    <a href=\"{{ path('establecimiento_new') }}\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nuevo
        </button>
    </a>
</div>
{% endblock %}

{% block content %}

<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>C&oacute;digo</th>
                <th>Direcci&oacute;n</th>
                {% if is_granted('ROLE_ADMIN') %}
                <th>Emisor</th>
                {% endif %}
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('establecimiento_show', { 'id': entity[0].id }) }}\">{{ entity[0].nombre }}</a></td>
                <td>{{ entity[0].codigo }}</td>
                <td>{{ entity[0].direccion }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ entity.razonSocial }}</td>
                {% endif %}
                <td>{%if entity[0].activo %}<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>{%else%}<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>{% endif%}</td>
                <td>
                    <a href=\"{{ path('establecimiento_edit', { 'id': entity[0].id }) }}\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>
                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"{{entity[0].id}}\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     {{ form(deleteForms[entity[0].id], { 'attr': {'id': entity[0].id } })}}
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
    {% endblock %}", "FactelBundle:Establecimiento:index.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Establecimiento/index.html.twig");
    }
}
