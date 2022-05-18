<?php

/* FactelBundle:Producto:index.html.twig */
class __TwigTemplate_4aaabcb05ccca459e0d681c9da416bd319d12d8587067406770c8742463e1038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Producto:index.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Productos
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_new");
        echo "\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nuevo
        </button>
    </a>
</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "<div class=\"col-sm-12 alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <h4><strong>Carga Exitosa</strong></h4>
    <p>";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>
                <th>Nombre</th>
                ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "                <th>Emisor</th>
                ";
        }
        // line 35
        echo "                <th>C&oacute;digo Principal</th>
                <th>C&oacute;digo Auxiliar</th>
                <th>Precio Unitario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "            <tr>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                ";
            // line 45
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "razonSocial", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 48
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigoPrincipal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigoAuxiliar", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "precioUnitario", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_edit", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>

                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 62
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "<!-- DataTables JavaScript -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 74,  188 => 73,  184 => 72,  181 => 71,  178 => 70,  171 => 66,  161 => 62,  155 => 59,  146 => 53,  141 => 51,  136 => 49,  131 => 48,  125 => 46,  123 => 45,  117 => 44,  114 => 43,  110 => 42,  101 => 35,  97 => 33,  95 => 32,  88 => 27,  79 => 24,  74 => 21,  70 => 20,  67 => 19,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Productos
<div class=\"pull-right\">
    <a href=\"{{ path('producto_new') }}\">
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
                {% if is_granted('ROLE_ADMIN') %}
                <th>Emisor</th>
                {% endif %}
                <th>C&oacute;digo Principal</th>
                <th>C&oacute;digo Auxiliar</th>
                <th>Precio Unitario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('producto_show', { 'id': entity[0].id }) }}\">{{ entity[0].nombre }}</a></td>
                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ entity.razonSocial }}</td>
                {% endif %}
                <td>{{ entity[0].codigoPrincipal }}</td>
                <td>{{ entity[0].codigoAuxiliar }}</td>

                <td>{{ entity[0].precioUnitario }}</td>
                <td>
                    <a href=\"{{ path('producto_edit', { 'id': entity[0].id }) }}\" title=\"Editar\">
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
<!-- DataTables JavaScript -->
<script src=\"{{asset('recursos/bower_components/datatables/media/js/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{asset('recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}\"></script>
<script src=\"{{asset('recursos/js/script.js')}}\"></script>
    {% endblock %}", "FactelBundle:Producto:index.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/Producto/index.html.twig");
    }
}
