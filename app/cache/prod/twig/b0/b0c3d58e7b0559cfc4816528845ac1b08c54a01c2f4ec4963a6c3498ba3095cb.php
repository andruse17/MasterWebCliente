<?php

/* FactelBundle::Layout.html.twig */
class __TwigTemplate_acd16be8d961a32a3af36514cfedfefb19d513322ed044609764e3acd18aebcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Sistema de Facturaci&oacute;n Electr&oacute;nica</title>



        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Font Awesome -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "        <!-- Style CSS -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <noscript>
        <meta http-equiv=\"refresh\" content=\"0; URL=";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("no_script");
        echo "\"/>     
        </noscript>
        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">NOMBRE</a>
                </div>
                <!-- /.navbar-header -->

                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            ";
        // line 57
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 58
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
            echo "</a>
                                ";
        }
        // line 60
        echo "                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            ";
        // line 74
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 75
            echo "                            <li>
                                <a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Mi Oficina</a>
                            </li>
                            ";
        }
        // line 78
        echo "    

                            ";
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 81
            echo "                            <li>
                                <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Facturaci&oacute;n<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura");
            echo "\">Factura</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notacredito");
            echo "\">Nota Cr&eacute;dito</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notadebito");
            echo "\">Nota D&eacute;bito</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retencion");
            echo "\">Retenci&oacute;n</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guia");
            echo "\">Guias</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Reporte<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reporte");
            echo "\">Comprobantes</a>
                                    </li>
                                </ul>
                            </li>
                            ";
        }
        // line 110
        echo "                            <li>
                                <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Administrar<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    ";
        // line 113
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 114
            echo "                                    <li>
                                        <a href=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\">Emisores</a>
                                    </li>

                                    ";
        }
        // line 119
        echo "
                                    ";
        // line 120
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
            // line 121
            echo "                                    <li>
                                        <a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\">Emisor</a>
                                    </li>
                                    ";
        }
        // line 125
        echo "                                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN"))) {
            // line 126
            echo "                                    <li>
                                        <a href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento");
            echo "\">Establecimientos</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision");
            echo "\">Puntos de Emision</a>
                                    </li>
                                    ";
        }
        // line 133
        echo "
                                    ";
        // line 134
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 135
            echo "                                    <li>
                                        <a href=\"#\">Impuestos<span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_iva");
            echo "\">IVA</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_ice");
            echo "\">ICE</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_irbpnr");
            echo "\">IRBPNR</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    ";
        }
        // line 151
        echo "                                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN"))) {
            // line 152
            echo "                                    <li>
                                        <a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto");
            echo "\">Productos</a>
                                    </li>
                                    ";
        }
        // line 156
        echo "                                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
            // line 157
            echo "                                    <li>
                                        <a href=\"";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_load");
            echo "\">Cargar Productos</a>
                                    </li>
                                    ";
        }
        // line 161
        echo "                                    <li>
                                        <a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente");
        echo "\">Clientes</a>

                                    </li>
                                    ";
        // line 165
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
            // line 166
            echo "                                    <li>
                                        <a href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_load");
            echo "\">Cargar Cliente</a>
                                    </li>
                                    ";
        }
        // line 170
        echo "                                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 171
            echo "                                    <li>
                                        <a href=\"";
            // line 172
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol");
            echo "\">Roles</a>
                                    </li>
                                    ";
        }
        // line 175
        echo "                                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN"))) {
            // line 176
            echo "
                                    <li>
                                        <a href=\"";
            // line 178
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
            echo "\">Usuarios</a>
                                    </li>
                                    ";
        }
        // line 181
        echo "

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">

                <!-- /.row -->
                <br />
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        ";
        // line 199
        $this->displayBlock('panel_title', $context, $blocks);
        // line 202
        echo "                    </div>
                    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">

                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar</h4>
                                </div>

                                <div class=\"modal-body\">
                                    <p>Una vez eliminado el registro no se recuperar&aacute;</p>
                                    <p>Desea continuar?</p>
                                </div>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                    <button type=\"button\" class=\"btn btn-danger danger confirm\" data-dismiss=\"modal\">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 225
        $this->displayBlock('content', $context, $blocks);
        // line 228
        echo "                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /#page-wrapper -->

            </div>

            <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/localization/messages_es.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 249
        $this->displayBlock('javascript', $context, $blocks);
        // line 252
        echo "    </body>

</html>
";
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    // line 199
    public function block_panel_title($context, array $blocks = array())
    {
        // line 200
        echo "                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Comprobantes Electronicos
                        ";
    }

    // line 225
    public function block_content($context, array $blocks = array())
    {
        // line 226
        echo "
                    ";
    }

    // line 249
    public function block_javascript($context, array $blocks = array())
    {
        // line 250
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "FactelBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 250,  485 => 249,  480 => 226,  477 => 225,  472 => 200,  469 => 199,  465 => 27,  462 => 26,  455 => 252,  453 => 249,  448 => 247,  444 => 246,  440 => 245,  436 => 244,  430 => 241,  424 => 238,  420 => 237,  416 => 236,  406 => 228,  404 => 225,  379 => 202,  377 => 199,  357 => 181,  351 => 178,  347 => 176,  344 => 175,  338 => 172,  335 => 171,  332 => 170,  326 => 167,  323 => 166,  321 => 165,  315 => 162,  312 => 161,  306 => 158,  303 => 157,  300 => 156,  294 => 153,  291 => 152,  288 => 151,  279 => 145,  273 => 142,  267 => 139,  261 => 135,  259 => 134,  256 => 133,  250 => 130,  244 => 127,  241 => 126,  238 => 125,  232 => 122,  229 => 121,  227 => 120,  224 => 119,  217 => 115,  214 => 114,  212 => 113,  207 => 110,  199 => 105,  188 => 97,  182 => 94,  176 => 91,  170 => 88,  164 => 85,  158 => 81,  156 => 80,  152 => 78,  146 => 76,  143 => 75,  141 => 74,  126 => 62,  122 => 60,  112 => 58,  110 => 57,  97 => 47,  81 => 34,  74 => 30,  70 => 29,  67 => 28,  65 => 26,  61 => 25,  55 => 22,  48 => 18,  42 => 15,  38 => 14,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Sistema de Facturaci&oacute;n Electr&oacute;nica</title>



        <!-- Bootstrap core CSS -->
        <link href=\"{{asset('recursos/framework/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('recursos/framework/jquery-ui/jquery-ui.min.css')}}\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"{{asset('recursos/bower_components/metisMenu/dist/metisMenu.min.css')}}\" rel=\"stylesheet\">


        <!-- Morris Charts CSS -->
        <link href=\"{{asset('recursos/bower_components/morrisjs/morris.css')}}\" rel=\"stylesheet\">

        <!-- Font Awesome -->
        <link href=\"{{asset('recursos/framework/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        {% block css %}
        {% endblock %}
        <!-- Style CSS -->
        <link href=\"{{asset('recursos/css/timeline.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('recursos/css/sb-admin-2.css')}}\" rel=\"stylesheet\">
    </head>
    <body>
        <noscript>
        <meta http-equiv=\"refresh\" content=\"0; URL={{path('no_script')}}\"/>     
        </noscript>
        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{path(\"home\")}}\">NOMBRE</a>
                </div>
                <!-- /.navbar-header -->

                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            {% if app.user.id is defined %}
                            <li><a href=\"{{ path('usuario_show', { 'id': app.user.id }) }}\"><i class=\"fa fa-user fa-fw\"></i> {{ app.user.nombre}} {{ app.user.apellidos}}</a>
                                {% endif %}
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"{{path(\"logout\")}}\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            {% if is_granted('ROLE_EMISOR') %}
                            <li>
                                <a href=\"{{path(\"home\")}}\"><i class=\"fa fa-dashboard fa-fw\"></i> Mi Oficina</a>
                            </li>
                            {% endif %}    

                            {% if is_granted('ROLE_EMISOR') %}
                            <li>
                                <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Facturaci&oacute;n<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"{{path(\"factura\")}}\">Factura</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"notacredito\")}}\">Nota Cr&eacute;dito</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"notadebito\")}}\">Nota D&eacute;bito</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"retencion\")}}\">Retenci&oacute;n</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"guia\")}}\">Guias</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Reporte<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"{{path(\"reporte\")}}\">Comprobantes</a>
                                    </li>
                                </ul>
                            </li>
                            {% endif %}
                            <li>
                                <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Administrar<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"emisor\")}}\">Emisores</a>
                                    </li>

                                    {% endif %}

                                    {% if is_granted('ROLE_EMISOR_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"emisor\")}}\">Emisor</a>
                                    </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMISOR_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"establecimiento\")}}\">Establecimientos</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"ptoemision\")}}\">Puntos de Emision</a>
                                    </li>
                                    {% endif %}

                                    {% if is_granted('ROLE_ADMIN') %}
                                    <li>
                                        <a href=\"#\">Impuestos<span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"{{path(\"impuesto_iva\")}}\">IVA</a>
                                            </li>
                                            <li>
                                                <a href=\"{{path(\"impuesto_ice\")}}\">ICE</a>
                                            </li>
                                            <li>
                                                <a href=\"{{path(\"impuesto_irbpnr\")}}\">IRBPNR</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMISOR_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"producto\")}}\">Productos</a>
                                    </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_EMISOR_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"producto_load\")}}\">Cargar Productos</a>
                                    </li>
                                    {% endif %}
                                    <li>
                                        <a href=\"{{path(\"cliente\")}}\">Clientes</a>

                                    </li>
                                    {% if is_granted('ROLE_EMISOR_ADMIN') %}
                                    <li>
                                        <a href=\"{{path(\"cliente_load\")}}\">Cargar Cliente</a>
                                    </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN')%}
                                    <li>
                                        <a href=\"{{path(\"rol\")}}\">Roles</a>
                                    </li>
                                    {%endif %}
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMISOR_ADMIN') %}

                                    <li>
                                        <a href=\"{{path(\"usuario\")}}\">Usuarios</a>
                                    </li>
                                    {%endif %}


                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">

                <!-- /.row -->
                <br />
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        {% block panel_title %}
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Comprobantes Electronicos
                        {% endblock %}
                    </div>
                    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">

                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar</h4>
                                </div>

                                <div class=\"modal-body\">
                                    <p>Una vez eliminado el registro no se recuperar&aacute;</p>
                                    <p>Desea continuar?</p>
                                </div>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                    <button type=\"button\" class=\"btn btn-danger danger confirm\" data-dismiss=\"modal\">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        {% block content %}

                    {% endblock %}
                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /#page-wrapper -->

            </div>

            <script src=\"{{asset('recursos/js/jquery-1.11.2.min.js')}}\"></script>
            <script src=\"{{asset('recursos/framework/jquery-ui/jquery-ui.min.js')}}\"></script>
            <script src=\"{{asset('recursos/framework/bootstrap/js/bootstrap.min.js')}}\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"{{asset('recursos/bower_components/metisMenu/dist/metisMenu.min.js')}}\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"{{asset('recursos/js/sb-admin-2.js')}}\"></script>
            <script src=\"{{asset('recursos/framework/jquery-validation/dist/jquery.validate.min.js')}}\"></script>
            <script src=\"{{asset('recursos/framework/jquery-validation/dist/additional-methods.min.js')}}\"></script>
            <script src=\"{{asset('recursos/framework/jquery-validation/dist/localization/messages_es.min.js')}}\"></script>

        {% block javascript %}

        {% endblock %}
    </body>

</html>
", "FactelBundle::Layout.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Layout.html.twig");
    }
}
