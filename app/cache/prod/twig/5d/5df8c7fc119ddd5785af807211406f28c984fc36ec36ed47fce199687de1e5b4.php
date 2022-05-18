<?php

/* FactelBundle:Role:index.html.twig */
class __TwigTemplate_dafd89eb21be13b5e8eaddcbd8b7742c8bee9d98fc716e193cbcc05142374ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Role:index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Roles
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_new");
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
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                        <button class=\"btn btn-primary link-boton\">
                            <i class=\"fa fa-pencil-square-o\"></i>
                        </button>
                    </a>

                    <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                    </button>
                     ";
            // line 43
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($context["entity"], "id", array()))));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Role:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  107 => 43,  101 => 40,  92 => 34,  87 => 32,  84 => 31,  80 => 30,  69 => 21,  66 => 20,  54 => 11,  50 => 9,  47 => 8,  41 => 6,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Roles
<div class=\"pull-right\">
    <a href=\"{{ path('rol_new') }}\">
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
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td>{{ entity.name }}</td>
                <td>
                    <a href=\"{{ path('rol_edit', { 'id': entity.id }) }}\" title=\"Editar\">
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
", "FactelBundle:Role:index.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Role/index.html.twig");
    }
}
