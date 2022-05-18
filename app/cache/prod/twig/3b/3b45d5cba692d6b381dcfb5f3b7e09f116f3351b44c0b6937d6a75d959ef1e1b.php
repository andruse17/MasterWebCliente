<?php

/* FactelBundle:User:index.html.twig */
class __TwigTemplate_e5f6e926a9d8fcbbacd9274402721d19ea0650f8a3bbf526755762c114abc093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:User:index.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Usuarios
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
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
        echo "<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
        <thead>
            <tr>

                <th>Username</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                ";
        // line 28
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                <th>Email</th>
                ";
        }
        // line 31
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "                <th>Emisor</th>
                ";
        }
        // line 34
        echo "                <th>Rol</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "            <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                
                ";
            // line 46
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 49
            echo "                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "                <td>
                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "emisor", array()), "razonSocial", array()), "html", null, true);
                echo "
                </td>

                ";
            }
            // line 55
            echo "                <td class=\"rol\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getRolesString", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            if ($this->getAttribute($context["entity"], "isActive", array())) {
                echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
            } else {
                echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>

                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 67
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($context["entity"], "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
</div>
    ";
    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
        // line 76
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  198 => 77,  193 => 76,  190 => 75,  183 => 71,  173 => 67,  167 => 64,  158 => 58,  149 => 56,  144 => 55,  137 => 51,  134 => 50,  131 => 49,  125 => 47,  123 => 46,  118 => 44,  114 => 43,  108 => 42,  105 => 41,  101 => 40,  93 => 34,  89 => 32,  86 => 31,  82 => 29,  80 => 28,  70 => 20,  67 => 19,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Usuarios
<div class=\"pull-right\">
    <a href=\"{{ path('usuario_new') }}\">
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

                <th>Username</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                {% if not is_granted('ROLE_ADMIN') %}
                <th>Email</th>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                <th>Emisor</th>
                {% endif %}
                <th>Rol</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('usuario_show', { 'id': entity.id }) }}\">{{ entity.username }}</a></td>
                <td>{{ entity.nombre }}</td>
                <td>{{ entity.apellidos }}</td>
                
                {% if not is_granted('ROLE_ADMIN') %}
                <td>{{ entity.email }}</td>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                <td>
                    {{entity.emisor.razonSocial}}
                </td>

                {% endif %}
                <td class=\"rol\">{{ entity.getRolesString }}</td>
                <td>{%if entity.isActive %}<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>{%else%}<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>{% endif%}</td>
                <td>
                    <a href=\"{{ path('usuario_edit', { 'id': entity.id }) }}\" title=\"Editar\">
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
    {% endblock %}", "FactelBundle:User:index.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/User/index.html.twig");
    }
}
