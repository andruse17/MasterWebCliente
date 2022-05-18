<?php

/* FactelBundle:Factura:show.html.twig */
class __TwigTemplate_ee1f3516013d2f27d6ab987ae6f4b82c255a9fa5e60ae5c60822a16ed25f5d81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Factura:show.html.twig", 1);
        $this->blocks = array(
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
    public function block_panel_title($context, array $blocks = array())
    {
        // line 3
        echo "
<i class=\"fa fa-bar-chart-o fa-fw\"></i>Factura <strong>Nro: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "establecimiento", array()), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ptoEmision", array()), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secuencial", array()), "html", null, true);
        echo "</strong>
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nueva</a></li>
                    ";
        // line 14
        if (((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "CREADA") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "DEVUELTA")) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "NO AUTORIZADO"))) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
                    ";
        }
        // line 17
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura");
        echo "\"><i class=\"fa fa-list\"></i> Facturas</a></li>
            <li class=\"divider\"></li>
                    ";
        // line 19
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) != "AUTORIZADO")) {
            // line 20
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_procesar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\"></i> Enviar SRI</a></li>
                    ";
        }
        // line 22
        echo "                    ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "AUTORIZADO")) {
            // line 23
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_descargar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "type" => "pdf")), "html", null, true);
            echo "\"><i class=\"fa fa-file-pdf-o\"></i> Descargar PDF</a></li>
            <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_descargar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "type" => "zip")), "html", null, true);
            echo "\"><i class=\"fa fa-file-archive-o\"></i> Descargar PDF y XML</a></li>
            <li><a href=\"#send-email\" data-toggle=\"modal\"><i class=\"fa fa-send\"></i> Reenviar Email</a></li>
                    ";
        }
        // line 27
        echo "        </ul>
    </div>

</div>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "<div class=\"container-fluid factura\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "    <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <h4><strong>Ha ocurrido un error!</strong></h4>
        <p>";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "    <div class=\"col-sm-12 alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <p>";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    <div class=\"modal fade\" id=\"send-email\" tabindex=\"-1\" role=\"dialog\" 
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" 
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Enviar Email
                    </h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-sm-12 alert alert-info\">
                        <p>Ingrese el email al cual desea enviar el documento. Para mas de un email separarlo por coma (,) ejemplo: email1@gmail.com,email2@gmail.com</p>
                    </div>
                    <form role=\"form\" method=\"POST\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_enviar_email", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" id=\"formEmail\">
                        <div class=\"form-group\">
                            <label for=\"Email\">Email</label>
                            <input type=\"text\" class=\"form-control\"
                                   name=\"email\" id=\"email\" placeholder=\"Email separados por coma\"/>
                        </div>
                        <button id=\"send\" type=\"submit\" class=\"btn btn-default\">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        ";
        // line 78
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mensajes", array())) > 0) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) != "AUTORIZADO"))) {
            // line 79
            echo "    <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <h5><strong>Errores ocurrido durante el proceso de envio al SRI!</strong></h5>
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mensajes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                echo "        <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mensaje", array()), "html", null, true);
                echo "</p>
        <p>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "informacionAdicional", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "    </div>
        ";
        }
        // line 88
        echo "    <fieldset class=\"border col-sm-12\">
        <legend class=\"border\">Emisor</legend>
        <div class=\"control-group\" id=\"emisor\">
            <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
            <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 93
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
        </div>
    </fieldset>

    <fieldset class=\"border  col-sm-12 \">
        <legend class=\"border\">Comprobante</legend>
        <div class=\"control-group\" id=\"comprobante\">
            <div class=\"col-sm-12 col-md-6\"><strong>Estado: </strong><strong><span class=\"";
        // line 104
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "CREADA")) {
            echo "creada";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()) == "AUTORIZADO")) {
            echo "autorizada";
        } else {
            echo " error ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "</span></strong></div>
            <div class=\"col-sm-12 col-md-9\"><strong>N&uacute;mero Autorizaci&oacute;n:</strong> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroAutorizacion", array()), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Ambiente:</strong> ";
        // line 106
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ambiente", array()) == 1)) {
            echo " Pruebas ";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Tipo Emisi&oacute;n:</strong> ";
        // line 107
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoEmision", array()) == 1)) {
            echo " Emisi&oacute;n Normal ";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Fecha Emisi&oacute;n:</strong>";
        // line 108
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaEmision", array()), "d/m/Y"), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-lg-12\">
                <p> <label class=\"control-label\">Forma Pago: </label> ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formaPagoStr", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
            <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" >";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "claveAcceso", array()), "html", null, true);
        echo "</p></div>

        </div>
    </fieldset>

    <fieldset class=\"border col-sm-12\">

        <legend class=\"border\">Cliente</legend>

        <div class=\"form-group\">
            <input type=\"text\" id=\"id\" class=\"form-control hidden\" name=\"id\">
            <div class=\"col-md-6\">
                <strong>Nombre: </strong>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <strong>Celular: </strong>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "celular", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <strong>Email: </strong>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "correoElectronico", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <strong>Identificaci&oacute;n: </strong>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "identificacion", array()), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-6\">
                <strong>Direcci&oacute;n: </strong>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "direccion", array()), "html", null, true);
        echo "
            </div>
        </div>
    </fieldset>
    <legend class=\"border\">Productos</legend>
    <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
        <table class=\"table table-striped table-bordered table-hover\" id=\"productos\">
            <thead>
            <thead>
                <tr>
                    <th >Cantidad</th>
                    <th>C&oacute;digo</th>
                    <th>Descripci&oacute;n</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Total</th>
                    <th>ICE</th>
                    <th>IRBPNR</th>
                </tr>
            </thead>
            <tbody>
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facturasHasProducto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 159
            echo "                <tr>
                    <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codigoProducto", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "precioUnitario", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descuento", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valorTotal", array()), "html", null, true);
            echo "</td>
                            ";
            // line 166
            $context["ice"] = "0.00";
            // line 167
            echo "                            ";
            $context["irbpnr"] = "0.00";
            // line 168
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "impuestos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["impuesto"]) {
                // line 169
                echo "                                ";
                if (($this->getAttribute($context["impuesto"], "codigo", array()) == "3")) {
                    // line 170
                    echo "                                    ";
                    $context["ice"] = $this->getAttribute($context["impuesto"], "valor", array());
                    // line 171
                    echo "                                ";
                }
                // line 172
                echo "
                                ";
                // line 173
                if (($this->getAttribute($context["impuesto"], "codigo", array()) == "5")) {
                    // line 174
                    echo "                                    ";
                    $context["irbpnr"] = $this->getAttribute($context["impuesto"], "valor", array());
                    // line 175
                    echo "                                ";
                }
                // line 176
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impuesto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                    <td>";
            echo twig_escape_filter($this->env, (isset($context["ice"]) ? $context["ice"] : $this->getContext($context, "ice")), "html", null, true);
            echo "</td>
                    <td>";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["irbpnr"]) ? $context["irbpnr"] : $this->getContext($context, "irbpnr")), "html", null, true);
            echo "</td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </tbody>
        </table>
    </div>  
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">
    <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" >";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalSinImpuestos", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotal12", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotal0", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total No Objeto IVA</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" >";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotalNoIVA", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Exento IVA</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotalExentoIVA", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalDescuento", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorICE", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Valor IRBPNR</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorIRBPNR", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva12", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Propina</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" id=\"propina\">";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "propina", array()), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" id=\"valorTotal\">";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorTotal", array()), "html", null, true);
        echo "</p>
    </div>
</div>

";
    }

    // line 234
    public function block_javascript($context, array $blocks = array())
    {
        // line 235
        echo "<script>
    \$('#send').click(function() {
        \$('#send-email').modal('toggle');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Factura:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 235,  525 => 234,  516 => 229,  509 => 225,  502 => 221,  495 => 217,  488 => 213,  481 => 209,  474 => 205,  467 => 201,  460 => 197,  453 => 193,  446 => 189,  436 => 181,  427 => 178,  422 => 177,  416 => 176,  413 => 175,  410 => 174,  408 => 173,  405 => 172,  402 => 171,  399 => 170,  396 => 169,  391 => 168,  388 => 167,  386 => 166,  382 => 165,  378 => 164,  374 => 163,  370 => 162,  366 => 161,  362 => 160,  359 => 159,  355 => 158,  331 => 137,  325 => 134,  319 => 131,  313 => 128,  307 => 125,  292 => 113,  286 => 110,  281 => 108,  273 => 107,  265 => 106,  261 => 105,  249 => 104,  239 => 97,  235 => 96,  231 => 95,  227 => 94,  219 => 93,  215 => 92,  211 => 91,  206 => 88,  202 => 86,  194 => 84,  189 => 83,  185 => 82,  180 => 79,  178 => 78,  163 => 66,  142 => 47,  133 => 44,  129 => 42,  124 => 41,  115 => 38,  110 => 35,  106 => 34,  103 => 33,  100 => 32,  92 => 27,  86 => 24,  81 => 23,  78 => 22,  72 => 20,  70 => 19,  64 => 17,  58 => 15,  56 => 14,  52 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
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

<i class=\"fa fa-bar-chart-o fa-fw\"></i>Factura <strong>Nro: {{entity.establecimiento.codigo}}-{{entity.ptoEmision.codigo}}-{{entity.secuencial}}</strong>
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"{{ path('factura_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nueva</a></li>
                    {% if entity.estado == 'CREADA' or entity.estado == 'DEVUELTA' or entity.estado == 'NO AUTORIZADO'%}
            <li><a href=\"{{ path('factura_edit',{ 'id': entity.id }) }}\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
                    {% endif %}
            <li><a href=\"{{ path('factura') }}\"><i class=\"fa fa-list\"></i> Facturas</a></li>
            <li class=\"divider\"></li>
                    {% if entity.estado != 'AUTORIZADO'%}
            <li><a href=\"{{ path('factura_procesar',{ 'id': entity.id }) }}\"><i class=\"fa fa-paper-plane\"></i> Enviar SRI</a></li>
                    {% endif %}
                    {% if entity.estado == 'AUTORIZADO'%}
            <li><a href=\"{{ path('factura_descargar',{ 'id': entity.id , 'type': \"pdf\"}) }}\"><i class=\"fa fa-file-pdf-o\"></i> Descargar PDF</a></li>
            <li><a href=\"{{ path('factura_descargar',{ 'id': entity.id , 'type': \"zip\"}) }}\"><i class=\"fa fa-file-archive-o\"></i> Descargar PDF y XML</a></li>
            <li><a href=\"#send-email\" data-toggle=\"modal\"><i class=\"fa fa-send\"></i> Reenviar Email</a></li>
                    {% endif %}
        </ul>
    </div>

</div>
{% endblock %}
{% block content %}
<div class=\"container-fluid factura\">
        {% for flashMessage in app.session.flashbag.get('notice') %}
    <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <h4><strong>Ha ocurrido un error!</strong></h4>
        <p>{{ flashMessage }}</p>
    </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('confirm') %}
    <div class=\"col-sm-12 alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <p>{{ flashMessage }}</p>
    </div>
        {% endfor %}
    <div class=\"modal fade\" id=\"send-email\" tabindex=\"-1\" role=\"dialog\" 
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" 
                            data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">&times;</span>
                        <span class=\"sr-only\">Close</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Enviar Email
                    </h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-sm-12 alert alert-info\">
                        <p>Ingrese el email al cual desea enviar el documento. Para mas de un email separarlo por coma (,) ejemplo: email1@gmail.com,email2@gmail.com</p>
                    </div>
                    <form role=\"form\" method=\"POST\" action=\"{{ path('factura_enviar_email',{ 'id': entity.id }) }}\" id=\"formEmail\">
                        <div class=\"form-group\">
                            <label for=\"Email\">Email</label>
                            <input type=\"text\" class=\"form-control\"
                                   name=\"email\" id=\"email\" placeholder=\"Email separados por coma\"/>
                        </div>
                        <button id=\"send\" type=\"submit\" class=\"btn btn-default\">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        {% if entity.mensajes | length >0  and entity.estado != \"AUTORIZADO\" %}
    <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <h5><strong>Errores ocurrido durante el proceso de envio al SRI!</strong></h5>
                {% for item in entity.mensajes %}
        <p>{{item.mensaje}}</p>
        <p>{{item.informacionAdicional}}</p>
                {% endfor %}
    </div>
        {% endif %}
    <fieldset class=\"border col-sm-12\">
        <legend class=\"border\">Emisor</legend>
        <div class=\"control-group\" id=\"emisor\">
            <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> {{entity.emisor.ruc}}</p></div>
            <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> {{entity.emisor.razonSocial}}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> {%if entity.establecimiento.nombreComercial%}{{entity.establecimiento.nombreComercial}}{%else%}{{entity.emisor.nombreComercial}}{%endif%}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> {{entity.emisor.contribuyenteEspecial}}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> {{entity.emisor.obligadoContabilidad}}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> {{entity.emisor.direccionMatriz}}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> {{entity.establecimiento.direccion}}</div>
        </div>
    </fieldset>

    <fieldset class=\"border  col-sm-12 \">
        <legend class=\"border\">Comprobante</legend>
        <div class=\"control-group\" id=\"comprobante\">
            <div class=\"col-sm-12 col-md-6\"><strong>Estado: </strong><strong><span class=\"{%if entity.estado == 'CREADA'%}creada{%elseif entity.estado == 'AUTORIZADO'%}autorizada{%else%} error {%endif%}\">{{entity.estado}}</span></strong></div>
            <div class=\"col-sm-12 col-md-9\"><strong>N&uacute;mero Autorizaci&oacute;n:</strong> {{entity.numeroAutorizacion}}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Ambiente:</strong> {% if entity.ambiente == 1%} Pruebas {% else %} Producci&oacute;n {% endif %}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Tipo Emisi&oacute;n:</strong> {% if entity.tipoEmision == 1%} Emisi&oacute;n Normal {% else %} Emisi&oacute;n por Indisponibilidad del Sistema {% endif %}</div>
            <div class=\"col-sm-12 col-md-6\"><strong>Fecha Emisi&oacute;n:</strong>{{entity.fechaEmision |date('d/m/Y')}}</div>
            <div class=\"col-sm-12 col-lg-12\">
                <p> <label class=\"control-label\">Forma Pago: </label> {{entity.formaPagoStr}}</p>
            </div>
            <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
            <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" >{{entity.claveAcceso}}</p></div>

        </div>
    </fieldset>

    <fieldset class=\"border col-sm-12\">

        <legend class=\"border\">Cliente</legend>

        <div class=\"form-group\">
            <input type=\"text\" id=\"id\" class=\"form-control hidden\" name=\"id\">
            <div class=\"col-md-6\">
                <strong>Nombre: </strong>{{entity.cliente.nombre}}
            </div>
            <div class=\"col-md-6\">
                <strong>Celular: </strong>{{entity.cliente.celular}}
            </div>
            <div class=\"col-md-6\">
                <strong>Email: </strong>{{entity.cliente.correoElectronico}}
            </div>
            <div class=\"col-md-6\">
                <strong>Identificaci&oacute;n: </strong>{{entity.cliente.identificacion}}
            </div>
            <div class=\"col-md-6\">
                <strong>Direcci&oacute;n: </strong>{{entity.cliente.direccion}}
            </div>
        </div>
    </fieldset>
    <legend class=\"border\">Productos</legend>
    <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
        <table class=\"table table-striped table-bordered table-hover\" id=\"productos\">
            <thead>
            <thead>
                <tr>
                    <th >Cantidad</th>
                    <th>C&oacute;digo</th>
                    <th>Descripci&oacute;n</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Total</th>
                    <th>ICE</th>
                    <th>IRBPNR</th>
                </tr>
            </thead>
            <tbody>
                    {% for item in entity.facturasHasProducto%}
                <tr>
                    <td>{{item.cantidad}}</td>
                    <td>{{item.codigoProducto}}</td>
                    <td>{{item.nombre}}</td>
                    <td>{{item.precioUnitario}}</td>
                    <td>{{item.descuento}}</td>
                    <td>{{item.valorTotal}}</td>
                            {% set ice = \"0.00\" %}
                            {% set irbpnr = \"0.00\" %}
                            {% for impuesto in item.impuestos %}
                                {% if impuesto.codigo == \"3\" %}
                                    {% set ice = impuesto.valor %}
                                {% endif %}

                                {% if impuesto.codigo == \"5\" %}
                                    {% set irbpnr = impuesto.valor %}
                                {% endif %}
                            {% endfor %}
                    <td>{{ ice }}</td>
                    <td>{{ irbpnr }}</td>
                </tr>
                    {% endfor %}
            </tbody>
        </table>
    </div>  
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">
    <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" >{{entity.totalSinImpuestos}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.subtotal12}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.subtotal0}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total No Objeto IVA</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" >{{entity.subtotalNoIVA}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Sub Exento IVA</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.subtotalExentoIVA}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.totalDescuento}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.valorICE}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Valor IRBPNR</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.valorIRBPNR}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\">{{entity.iva12}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">Propina</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" id=\"propina\">{{entity.propina}}</p>
    </div>
    <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
    <div class=\"col-xs-2 col-sm-4\">
        <p class=\"text-left\" id=\"valorTotal\">{{entity.valorTotal}}</p>
    </div>
</div>

{% endblock %}
{% block javascript %}
<script>
    \$('#send').click(function() {
        \$('#send-email').modal('toggle');
    });
</script>
{% endblock %}", "FactelBundle:Factura:show.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Factura/show.html.twig");
    }
}
