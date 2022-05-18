<?php

/* FactelBundle:Factura:index.html.twig */
class __TwigTemplate_da856d9f1dd99922205379e86ee50c79bc6867cbe09d5a29d02857e1dc412aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Factura:index.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Facturas
<div class=\"pull-right\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_new");
        echo "\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nueva
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
    <table class=\"table table-striped table-bordered table-hover\" id=\"factura-table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>No.</th>
                <th>Cliente</th>
                <th>Fecha Emisi&oacute;n</th>
                <th>Fecha Autorizaci&oacute;n</th>
                <th>Valor Total</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

    ";
    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        // line 41
        echo "<!-- DataTables JavaScript -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
<script>
    var oTable = \$(\"#factura-table\").dataTable({
        columnDefs: [
            {
                targets: 1,
                render: function(data, type, row) {
                    return \"<a href='\"+row[0]+\"'>\" + data + \"</a>\";
                }
            },
            {\"visible\": false, \"targets\": [0]}
        ],
        responsive: true,
        bAutoWidth: false,
        sAjaxSource: \"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_factura");
        echo "\",
        bProcessing: true,
        bServerSide: true,
        bSort: false,
        aLengthMenu: [[5, 10, 15], [5, 10, 15]],
        language: {
            sProcessing: \"Procesando...\",
            sLengthMenu: \"Mostrar _MENU_\",
            sZeroRecords: \"No se encontraron resultados\",
            sEmptyTable: \"Ningún dato disponible en esta tabla\",
            sInfo: \"Mostrando del _START_ al _END_ de _TOTAL_ registros\",
            sInfoEmpty: \"Mostrando del 0 al 0 de un total de 0 registros\",
            sInfoFiltered: \"(filtrado de un total de _MAX_ registros)\",
            sInfoPostFix: \"\",
            sSearch: \"Buscar:\",
            sUrl: \"\",
            sInfoThousands: \",\",
            sLoadingRecords: \"Cargando...\",
            oPaginate: {
                sFirst: \"Primero\",
                sLast: \"Último\",
                sNext: \"Siguiente\",
                sPrevious: \"Anterior\"
            },
            oAria: {
                sSortAscending: \": Activar para ordenar la columna de manera ascendente\",
                sSortDescending: \": Activar para ordenar la columna de manera descendente\"
            },
        },
    });
    \$('#factura-table_filter input').unbind();
    \$('#factura-table_filter input').bind('keyup', function(e) {
        if (e.keyCode == 13) {
            oTable.fnFilter(\$(this).val());
        }
    });
</script>

    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Factura:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  107 => 44,  103 => 43,  99 => 42,  96 => 41,  93 => 40,  70 => 20,  67 => 19,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i> Facturas
<div class=\"pull-right\">
    <a href=\"{{ path('factura_new') }}\">
        <button class=\"btn btn-primary link-boton\">
            <i class=\"fa fa-plus-circle\"></i>
            Nueva
        </button>
    </a>
</div>
{% endblock %}
{% block content %}
<div class=\"dataTable_wrapper table-responsive col-lg-12\">  
    <table class=\"table table-striped table-bordered table-hover\" id=\"factura-table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>No.</th>
                <th>Cliente</th>
                <th>Fecha Emisi&oacute;n</th>
                <th>Fecha Autorizaci&oacute;n</th>
                <th>Valor Total</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

    {% endblock %}
{% block javascript %}
<!-- DataTables JavaScript -->
<script src=\"{{asset('recursos/bower_components/datatables/media/js/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{asset('recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}\"></script>
<script src=\"{{asset('recursos/js/script.js')}}\"></script>
<script>
    var oTable = \$(\"#factura-table\").dataTable({
        columnDefs: [
            {
                targets: 1,
                render: function(data, type, row) {
                    return \"<a href='\"+row[0]+\"'>\" + data + \"</a>\";
                }
            },
            {\"visible\": false, \"targets\": [0]}
        ],
        responsive: true,
        bAutoWidth: false,
        sAjaxSource: \"{{ path('all_factura')}}\",
        bProcessing: true,
        bServerSide: true,
        bSort: false,
        aLengthMenu: [[5, 10, 15], [5, 10, 15]],
        language: {
            sProcessing: \"Procesando...\",
            sLengthMenu: \"Mostrar _MENU_\",
            sZeroRecords: \"No se encontraron resultados\",
            sEmptyTable: \"Ningún dato disponible en esta tabla\",
            sInfo: \"Mostrando del _START_ al _END_ de _TOTAL_ registros\",
            sInfoEmpty: \"Mostrando del 0 al 0 de un total de 0 registros\",
            sInfoFiltered: \"(filtrado de un total de _MAX_ registros)\",
            sInfoPostFix: \"\",
            sSearch: \"Buscar:\",
            sUrl: \"\",
            sInfoThousands: \",\",
            sLoadingRecords: \"Cargando...\",
            oPaginate: {
                sFirst: \"Primero\",
                sLast: \"Último\",
                sNext: \"Siguiente\",
                sPrevious: \"Anterior\"
            },
            oAria: {
                sSortAscending: \": Activar para ordenar la columna de manera ascendente\",
                sSortDescending: \": Activar para ordenar la columna de manera descendente\"
            },
        },
    });
    \$('#factura-table_filter input').unbind();
    \$('#factura-table_filter input').bind('keyup', function(e) {
        if (e.keyCode == 13) {
            oTable.fnFilter(\$(this).val());
        }
    });
</script>

    {% endblock %}", "FactelBundle:Factura:index.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/Factura/index.html.twig");
    }
}
