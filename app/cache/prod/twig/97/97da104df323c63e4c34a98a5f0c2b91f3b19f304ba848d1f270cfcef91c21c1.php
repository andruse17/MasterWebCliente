<?php

/* FactelBundle:PtoEmision:index.html.twig */
class __TwigTemplate_0b66ff0b874a690065467d0d3946d2c37cc17e6ddd33241e17b744cdc6bd4208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:PtoEmision:index.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Puntos de Emisi&oacute;n
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_new");
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
        echo "<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                <th>Emisor</th>
                ";
        }
        // line 30
        echo "                <th>Establecimiento</th>
                <th>Asignado a</th>
                <th>Estado</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigo", array()), "html", null, true);
            echo "</td>
                ";
            // line 41
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "razonSocial", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 44
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 46
            $context["usuario"] = $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "usuario", array());
            // line 47
            echo "                    ";
            if (((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getNombreCompleto", array(), "method"), "html", null, true);
                echo " ";
            } else {
                echo " NO ASIGNADO ";
            }
            // line 48
            echo "                </td>
                <td>";
            // line 49
            if ($this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "activo", array())) {
                echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
            } else {
                echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision_edit", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>
                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 59
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
</div>

";
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
        // line 69
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:PtoEmision:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 71,  187 => 70,  182 => 69,  179 => 68,  171 => 63,  161 => 59,  155 => 56,  147 => 51,  138 => 49,  135 => 48,  126 => 47,  124 => 46,  118 => 44,  112 => 42,  110 => 41,  106 => 40,  100 => 39,  97 => 38,  93 => 37,  84 => 30,  80 => 28,  78 => 27,  70 => 21,  67 => 20,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Puntos de Emisi&oacute;n
<div class=\"pull-right\">
    <a href=\"{{ path('ptoemision_new') }}\">
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
                <th>Codigo</th>
                {% if is_granted('ROLE_ADMIN') %}
                <th>Emisor</th>
                {% endif %}
                <th>Establecimiento</th>
                <th>Asignado a</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('ptoemision_show', { 'id': entity[0].id }) }}\">{{ entity[0].nombre }}</a></td>
                <td>{{ entity[0].codigo }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ entity.razonSocial }}</td>
                {% endif %}
                <td>{{ entity.nombre }}</td>
                <td>
                    {% set usuario =entity[0].usuario  %}
                    {% if usuario != null %} {{usuario.getNombreCompleto()}} {%else%} NO ASIGNADO {%endif %}
                </td>
                <td>{%if entity[0].activo %}<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>{%else%}<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>{% endif%}</td>
                <td>
                    <a href=\"{{ path('ptoemision_edit', { 'id': entity[0].id }) }}\" title=\"Editar\">
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
    {% endblock %}", "FactelBundle:PtoEmision:index.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/PtoEmision/index.html.twig");
    }
}
