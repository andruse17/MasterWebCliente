<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // enviar
        if ($pathinfo === '/enviar') {
            return array (  '_controller' => 'InicioBundle\\Controller\\EmailController::indexAction',  '_route' => 'enviar',);
        }

        // inicio_inicio_index
        if ($pathinfo === '/portal') {
            return array (  '_controller' => 'InicioBundle\\Controller\\InicioController::indexAction',  '_route' => 'inicio_inicio_index',);
        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // cliente
            if (rtrim($pathinfo, '/') === '/cliente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cliente');
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
            }
            not_cliente:

            // all_client
            if ($pathinfo === '/cliente/clientes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_all_client;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::clientesAction',  '_route' => 'all_client',);
            }
            not_all_client:

            // cliente_create
            if ($pathinfo === '/cliente/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cliente_create;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
            }
            not_cliente_create:

            // cliente_new
            if ($pathinfo === '/cliente/nuevo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_new;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
            }
            not_cliente_new:

            if (0 === strpos($pathinfo, '/cliente/cargar')) {
                // cliente_load
                if ($pathinfo === '/cliente/cargar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_load;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::cargarClienteAction',  '_route' => 'cliente_load',);
                }
                not_cliente_load:

                // cliente_create_masiva
                if ($pathinfo === '/cliente/cargar') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cliente_create_masiva;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::createClienteAction',  '_route' => 'cliente_create_masiva',);
                }
                not_cliente_create_masiva:

            }

            // cliente_show
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::showAction',));
            }
            not_cliente_show:

            // cliente_edit
            if (preg_match('#^/cliente/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::editAction',));
            }
            not_cliente_edit:

            // cliente_update
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::updateAction',));
            }
            not_cliente_update:

            // cliente_delete
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'FactelBundle\\Controller\\ClienteController::deleteAction',));
            }
            not_cliente_delete:

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/emisor')) {
                // emisor
                if (rtrim($pathinfo, '/') === '/emisor') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emisor;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'emisor');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::indexAction',  '_route' => 'emisor',);
                }
                not_emisor:

                // emisor_create
                if ($pathinfo === '/emisor/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_emisor_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::createAction',  '_route' => 'emisor_create',);
                }
                not_emisor_create:

                // emisor_new
                if ($pathinfo === '/emisor/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emisor_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::newAction',  '_route' => 'emisor_new',);
                }
                not_emisor_new:

                // emisor_show
                if (preg_match('#^/emisor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emisor_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emisor_show')), array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::showAction',));
                }
                not_emisor_show:

                // emisor_edit
                if (preg_match('#^/emisor/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emisor_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emisor_edit')), array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::editAction',));
                }
                not_emisor_edit:

                // emisor_update
                if (preg_match('#^/emisor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_emisor_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emisor_update')), array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::updateAction',));
                }
                not_emisor_update:

                // emisor_delete
                if (preg_match('#^/emisor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_emisor_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emisor_delete')), array (  '_controller' => 'FactelBundle\\Controller\\EmisorController::deleteAction',));
                }
                not_emisor_delete:

            }

            if (0 === strpos($pathinfo, '/establecimiento')) {
                // establecimiento
                if (rtrim($pathinfo, '/') === '/establecimiento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_establecimiento;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'establecimiento');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::indexAction',  '_route' => 'establecimiento',);
                }
                not_establecimiento:

                // establecimiento_create
                if ($pathinfo === '/establecimiento/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_establecimiento_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::createAction',  '_route' => 'establecimiento_create',);
                }
                not_establecimiento_create:

                // establecimiento_new
                if ($pathinfo === '/establecimiento/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_establecimiento_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::newAction',  '_route' => 'establecimiento_new',);
                }
                not_establecimiento_new:

                // establecimiento_show
                if (preg_match('#^/establecimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_establecimiento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'establecimiento_show')), array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::showAction',));
                }
                not_establecimiento_show:

                // establecimiento_edit
                if (preg_match('#^/establecimiento/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_establecimiento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'establecimiento_edit')), array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::editAction',));
                }
                not_establecimiento_edit:

                // establecimiento_update
                if (preg_match('#^/establecimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_establecimiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'establecimiento_update')), array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::updateAction',));
                }
                not_establecimiento_update:

                // establecimiento_delete
                if (preg_match('#^/establecimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_establecimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'establecimiento_delete')), array (  '_controller' => 'FactelBundle\\Controller\\EstablecimientoController::deleteAction',));
                }
                not_establecimiento_delete:

            }

        }

        if (0 === strpos($pathinfo, '/comprobantes')) {
            if (0 === strpos($pathinfo, '/comprobantes/factura')) {
                // factura
                if (rtrim($pathinfo, '/') === '/comprobantes/factura') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'factura');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::indexAction',  '_route' => 'factura',);
                }
                not_factura:

                // all_factura
                if ($pathinfo === '/comprobantes/factura/facturas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_factura;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::facturasAction',  '_route' => 'all_factura',);
                }
                not_all_factura:

                // factura_procesar
                if (0 === strpos($pathinfo, '/comprobantes/factura/procesar') && preg_match('#^/comprobantes/factura/procesar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura_procesar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_procesar')), array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::procesarAccion',));
                }
                not_factura_procesar:

                // factura_enviar_email
                if (0 === strpos($pathinfo, '/comprobantes/factura/enviarEmail') && preg_match('#^/comprobantes/factura/enviarEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_factura_enviar_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_enviar_email')), array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::sendEmail',));
                }
                not_factura_enviar_email:

                // factura_create
                if ($pathinfo === '/comprobantes/factura/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_factura_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::createAction',  '_route' => 'factura_create',);
                }
                not_factura_create:

                // factura_descargar
                if (0 === strpos($pathinfo, '/comprobantes/factura/descargar') && preg_match('#^/comprobantes/factura/descargar/(?P<id>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura_descargar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_descargar')), array (  'type' => 'zip',  '_controller' => 'FactelBundle\\Controller\\FacturaController::descargarAction',));
                }
                not_factura_descargar:

                // factura_new
                if ($pathinfo === '/comprobantes/factura/nueva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::newAction',  '_route' => 'factura_new',);
                }
                not_factura_new:

                // factura_show
                if (preg_match('#^/comprobantes/factura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_show')), array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::showAction',));
                }
                not_factura_show:

                // factura_edit
                if (preg_match('#^/comprobantes/factura/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_factura_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_edit')), array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::editAction',));
                }
                not_factura_edit:

                // factura_delete
                if (preg_match('#^/comprobantes/factura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_factura_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'factura_delete')), array (  '_controller' => 'FactelBundle\\Controller\\FacturaController::deleteAction',));
                }
                not_factura_delete:

            }

            if (0 === strpos($pathinfo, '/comprobantes/guia')) {
                // guia
                if (rtrim($pathinfo, '/') === '/comprobantes/guia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'guia');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::indexAction',  '_route' => 'guia',);
                }
                not_guia:

                // all_guia
                if ($pathinfo === '/comprobantes/guia/guias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_guia;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::guiasAction',  '_route' => 'all_guia',);
                }
                not_all_guia:

                // guia_procesar
                if (0 === strpos($pathinfo, '/comprobantes/guia/procesar') && preg_match('#^/comprobantes/guia/procesar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia_procesar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'guia_procesar')), array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::procesarAccion',));
                }
                not_guia_procesar:

                // guia_enviar_email
                if (0 === strpos($pathinfo, '/comprobantes/guia/enviarEmail') && preg_match('#^/comprobantes/guia/enviarEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_guia_enviar_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'guia_enviar_email')), array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::sendEmail',));
                }
                not_guia_enviar_email:

                // guia_create
                if ($pathinfo === '/comprobantes/guia/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_guia_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::createAction',  '_route' => 'guia_create',);
                }
                not_guia_create:

                // guia_descargar
                if (0 === strpos($pathinfo, '/comprobantes/guia/descargar') && preg_match('#^/comprobantes/guia/descargar/(?P<id>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia_descargar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'guia_descargar')), array (  'type' => 'zip',  '_controller' => 'FactelBundle\\Controller\\GuiaController::descargarAction',));
                }
                not_guia_descargar:

                // guia_new
                if ($pathinfo === '/comprobantes/guia/nueva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::newAction',  '_route' => 'guia_new',);
                }
                not_guia_new:

                // guia_show
                if (preg_match('#^/comprobantes/guia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'guia_show')), array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::showAction',));
                }
                not_guia_show:

                // guia_edit
                if (preg_match('#^/comprobantes/guia/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_guia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'guia_edit')), array (  '_controller' => 'FactelBundle\\Controller\\GuiaController::editAction',));
                }
                not_guia_edit:

            }

        }

        if (0 === strpos($pathinfo, '/impuesto/i')) {
            if (0 === strpos($pathinfo, '/impuesto/ice')) {
                // impuesto_ice
                if (rtrim($pathinfo, '/') === '/impuesto/ice') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_ice;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'impuesto_ice');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::indexAction',  '_route' => 'impuesto_ice',);
                }
                not_impuesto_ice:

                // impuesto_ice_create
                if ($pathinfo === '/impuesto/ice/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_impuesto_ice_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::createAction',  '_route' => 'impuesto_ice_create',);
                }
                not_impuesto_ice_create:

                // impuesto_ice_new
                if ($pathinfo === '/impuesto/ice/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_ice_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::newAction',  '_route' => 'impuesto_ice_new',);
                }
                not_impuesto_ice_new:

                // impuesto_ice_edit
                if (preg_match('#^/impuesto/ice/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_ice_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_ice_edit')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::editAction',));
                }
                not_impuesto_ice_edit:

                // impuesto_ice_update
                if (preg_match('#^/impuesto/ice/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_impuesto_ice_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_ice_update')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::updateAction',));
                }
                not_impuesto_ice_update:

                // impuesto_ice_delete
                if (preg_match('#^/impuesto/ice/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_impuesto_ice_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_ice_delete')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoICEController::deleteAction',));
                }
                not_impuesto_ice_delete:

            }

            if (0 === strpos($pathinfo, '/impuesto/irbpnr')) {
                // impuesto_irbpnr
                if (rtrim($pathinfo, '/') === '/impuesto/irbpnr') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_irbpnr;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'impuesto_irbpnr');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::indexAction',  '_route' => 'impuesto_irbpnr',);
                }
                not_impuesto_irbpnr:

                // impuesto_irbpnr_create
                if ($pathinfo === '/impuesto/irbpnr/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_impuesto_irbpnr_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::createAction',  '_route' => 'impuesto_irbpnr_create',);
                }
                not_impuesto_irbpnr_create:

                // impuesto_irbpnr_new
                if ($pathinfo === '/impuesto/irbpnr/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_irbpnr_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::newAction',  '_route' => 'impuesto_irbpnr_new',);
                }
                not_impuesto_irbpnr_new:

                // impuesto_irbpnr_edit
                if (preg_match('#^/impuesto/irbpnr/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_irbpnr_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_irbpnr_edit')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::editAction',));
                }
                not_impuesto_irbpnr_edit:

                // impuesto_irbpnr_update
                if (preg_match('#^/impuesto/irbpnr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_impuesto_irbpnr_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_irbpnr_update')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::updateAction',));
                }
                not_impuesto_irbpnr_update:

                // impuesto_irbpnr_delete
                if (preg_match('#^/impuesto/irbpnr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_impuesto_irbpnr_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_irbpnr_delete')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIRBPNRController::deleteAction',));
                }
                not_impuesto_irbpnr_delete:

            }

            if (0 === strpos($pathinfo, '/impuesto/iva')) {
                // impuesto_iva
                if (rtrim($pathinfo, '/') === '/impuesto/iva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_iva;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'impuesto_iva');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::indexAction',  '_route' => 'impuesto_iva',);
                }
                not_impuesto_iva:

                // impuesto_iva_create
                if ($pathinfo === '/impuesto/iva/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_impuesto_iva_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::createAction',  '_route' => 'impuesto_iva_create',);
                }
                not_impuesto_iva_create:

                // impuesto_iva_new
                if ($pathinfo === '/impuesto/iva/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_iva_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::newAction',  '_route' => 'impuesto_iva_new',);
                }
                not_impuesto_iva_new:

                // impuesto_iva_edit
                if (preg_match('#^/impuesto/iva/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_impuesto_iva_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_iva_edit')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::editAction',));
                }
                not_impuesto_iva_edit:

                // impuesto_iva_update
                if (preg_match('#^/impuesto/iva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_impuesto_iva_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_iva_update')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::updateAction',));
                }
                not_impuesto_iva_update:

                // impuesto_iva_delete
                if (preg_match('#^/impuesto/iva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_impuesto_iva_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impuesto_iva_delete')), array (  '_controller' => 'FactelBundle\\Controller\\ImpuestoIVAController::deleteAction',));
                }
                not_impuesto_iva_delete:

            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'FactelBundle\\Controller\\InicioController::inicioAction',  '_route' => 'home',);
        }

        // login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_login;
            }

            return array (  '_controller' => 'FactelBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }
        not_login:

        // no_script
        if (rtrim($pathinfo, '/') === '/noscript') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_no_script;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'no_script');
            }

            return array (  '_controller' => 'FactelBundle\\Controller\\NoScriptController::indexAction',  '_route' => 'no_script',);
        }
        not_no_script:

        if (0 === strpos($pathinfo, '/comprobantes/nota-')) {
            if (0 === strpos($pathinfo, '/comprobantes/nota-credito')) {
                // notacredito
                if (rtrim($pathinfo, '/') === '/comprobantes/nota-credito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notacredito');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::indexAction',  '_route' => 'notacredito',);
                }
                not_notacredito:

                // all_notasCredito
                if ($pathinfo === '/comprobantes/nota-credito/notasCredito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_notasCredito;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::notasCreditoAction',  '_route' => 'all_notasCredito',);
                }
                not_all_notasCredito:

                // notacredito_procesar
                if (0 === strpos($pathinfo, '/comprobantes/nota-credito/procesar') && preg_match('#^/comprobantes/nota\\-credito/procesar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito_procesar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_procesar')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::procesarAccion',));
                }
                not_notacredito_procesar:

                // notacredito_enviar_email
                if (0 === strpos($pathinfo, '/comprobantes/nota-credito/enviarEmail') && preg_match('#^/comprobantes/nota\\-credito/enviarEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notacredito_enviar_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_enviar_email')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::sendEmail',));
                }
                not_notacredito_enviar_email:

                // notacredito_create
                if ($pathinfo === '/comprobantes/nota-credito/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notacredito_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::createAction',  '_route' => 'notacredito_create',);
                }
                not_notacredito_create:

                // notacredito_new
                if ($pathinfo === '/comprobantes/nota-credito/nueva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::newAction',  '_route' => 'notacredito_new',);
                }
                not_notacredito_new:

                // notacredito_descargar
                if (0 === strpos($pathinfo, '/comprobantes/nota-credito/descargar') && preg_match('#^/comprobantes/nota\\-credito/descargar/(?P<id>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito_descargar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_descargar')), array (  'type' => 'zip',  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::descargarAction',));
                }
                not_notacredito_descargar:

                // notacredito_show
                if (preg_match('#^/comprobantes/nota\\-credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_show')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::showAction',));
                }
                not_notacredito_show:

                // notacredito_edit
                if (preg_match('#^/comprobantes/nota\\-credito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notacredito_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_edit')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::editAction',));
                }
                not_notacredito_edit:

                // notacredito_update
                if (preg_match('#^/comprobantes/nota\\-credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_notacredito_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_update')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::updateAction',));
                }
                not_notacredito_update:

                // notacredito_delete
                if (preg_match('#^/comprobantes/nota\\-credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_notacredito_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notacredito_delete')), array (  '_controller' => 'FactelBundle\\Controller\\NotaCreditoController::deleteAction',));
                }
                not_notacredito_delete:

            }

            if (0 === strpos($pathinfo, '/comprobantes/nota-debito')) {
                // notadebito
                if (rtrim($pathinfo, '/') === '/comprobantes/nota-debito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notadebito');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::indexAction',  '_route' => 'notadebito',);
                }
                not_notadebito:

                // all_notasDebito
                if ($pathinfo === '/comprobantes/nota-debito/notasDebito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_notasDebito;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::notasDebitoAction',  '_route' => 'all_notasDebito',);
                }
                not_all_notasDebito:

                // notadebito_create
                if ($pathinfo === '/comprobantes/nota-debito/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notadebito_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::createAction',  '_route' => 'notadebito_create',);
                }
                not_notadebito_create:

                // notadebito_enviar_email
                if (0 === strpos($pathinfo, '/comprobantes/nota-debito/enviarEmail') && preg_match('#^/comprobantes/nota\\-debito/enviarEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notadebito_enviar_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_enviar_email')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::sendEmail',));
                }
                not_notadebito_enviar_email:

                // notadebito_procesar
                if (0 === strpos($pathinfo, '/comprobantes/nota-debito/procesar') && preg_match('#^/comprobantes/nota\\-debito/procesar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito_procesar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_procesar')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::procesarAccion',));
                }
                not_notadebito_procesar:

                // notadebito_descargar
                if (0 === strpos($pathinfo, '/comprobantes/nota-debito/descargar') && preg_match('#^/comprobantes/nota\\-debito/descargar/(?P<id>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito_descargar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_descargar')), array (  'type' => 'zip',  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::descargarAction',));
                }
                not_notadebito_descargar:

                // notadebito_new
                if ($pathinfo === '/comprobantes/nota-debito/nueva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::newAction',  '_route' => 'notadebito_new',);
                }
                not_notadebito_new:

                // notadebito_show
                if (preg_match('#^/comprobantes/nota\\-debito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_show')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::showAction',));
                }
                not_notadebito_show:

                // notadebito_edit
                if (preg_match('#^/comprobantes/nota\\-debito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notadebito_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_edit')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::editAction',));
                }
                not_notadebito_edit:

                // notadebito_update
                if (preg_match('#^/comprobantes/nota\\-debito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_notadebito_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_update')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::updateAction',));
                }
                not_notadebito_update:

                // notadebito_delete
                if (preg_match('#^/comprobantes/nota\\-debito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_notadebito_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notadebito_delete')), array (  '_controller' => 'FactelBundle\\Controller\\NotaDebitoController::deleteAction',));
                }
                not_notadebito_delete:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/producto')) {
                // producto
                if (rtrim($pathinfo, '/') === '/producto') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'producto');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto',);
                }
                not_producto:

                // all_product
                if ($pathinfo === '/producto/productos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_product;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::productosAction',  '_route' => 'all_product',);
                }
                not_all_product:

                // producto_create
                if ($pathinfo === '/producto/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_producto_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::createAction',  '_route' => 'producto_create',);
                }
                not_producto_create:

                // producto_new
                if ($pathinfo === '/producto/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
                }
                not_producto_new:

                if (0 === strpos($pathinfo, '/producto/cargar')) {
                    // producto_load
                    if ($pathinfo === '/producto/cargar') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_producto_load;
                        }

                        return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::cargarProductoAction',  '_route' => 'producto_load',);
                    }
                    not_producto_load:

                    // producto_create_masivo
                    if ($pathinfo === '/producto/cargar') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_producto_create_masivo;
                        }

                        return array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::createProductoAction',  '_route' => 'producto_create_masivo',);
                    }
                    not_producto_create_masivo:

                }

                // producto_show
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::showAction',));
                }
                not_producto_show:

                // producto_edit
                if (preg_match('#^/producto/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::editAction',));
                }
                not_producto_edit:

                // producto_update
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_producto_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_update')), array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::updateAction',));
                }
                not_producto_update:

                // producto_delete
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_producto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'FactelBundle\\Controller\\ProductoController::deleteAction',));
                }
                not_producto_delete:

            }

            if (0 === strpos($pathinfo, '/ptoemision')) {
                // ptoemision
                if (rtrim($pathinfo, '/') === '/ptoemision') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ptoemision;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ptoemision');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::indexAction',  '_route' => 'ptoemision',);
                }
                not_ptoemision:

                // ptoemision_create
                if ($pathinfo === '/ptoemision/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ptoemision_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::createAction',  '_route' => 'ptoemision_create',);
                }
                not_ptoemision_create:

                // ptoemision_new
                if ($pathinfo === '/ptoemision/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ptoemision_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::newAction',  '_route' => 'ptoemision_new',);
                }
                not_ptoemision_new:

                // ptoemision_show
                if (preg_match('#^/ptoemision/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ptoemision_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptoemision_show')), array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::showAction',));
                }
                not_ptoemision_show:

                // ptoemision_edit
                if (preg_match('#^/ptoemision/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ptoemision_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptoemision_edit')), array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::editAction',));
                }
                not_ptoemision_edit:

                // ptoemision_update
                if (preg_match('#^/ptoemision/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_ptoemision_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptoemision_update')), array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::updateAction',));
                }
                not_ptoemision_update:

                // ptoemision_delete
                if (preg_match('#^/ptoemision/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ptoemision_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptoemision_delete')), array (  '_controller' => 'FactelBundle\\Controller\\PtoEmisionController::deleteAction',));
                }
                not_ptoemision_delete:

            }

        }

        if (0 === strpos($pathinfo, '/comprobantes/re')) {
            if (0 === strpos($pathinfo, '/comprobantes/reporte')) {
                // reporte
                if (rtrim($pathinfo, '/') === '/comprobantes/reporte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reporte;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reporte');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::indexAction',  '_route' => 'reporte',);
                }
                not_reporte:

                if (0 === strpos($pathinfo, '/comprobantes/reporte/n')) {
                    // all_nc
                    if ($pathinfo === '/comprobantes/reporte/nc') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_all_nc;
                        }

                        return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::notaCreditoAction',  '_route' => 'all_nc',);
                    }
                    not_all_nc:

                    // all_nd
                    if ($pathinfo === '/comprobantes/reporte/nd') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_all_nd;
                        }

                        return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::notaDebitoAction',  '_route' => 'all_nd',);
                    }
                    not_all_nd:

                }

                // all_cr
                if ($pathinfo === '/comprobantes/reporte/cr') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_cr;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::retencionAction',  '_route' => 'all_cr',);
                }
                not_all_cr:

                // all_gr
                if ($pathinfo === '/comprobantes/reporte/gr') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_gr;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::guiaAction',  '_route' => 'all_gr',);
                }
                not_all_gr:

                // all_reporte
                if ($pathinfo === '/comprobantes/reporte/todo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_reporte;
                    }

                    return array (  'comprobante' => NULL,  'sSearch' => '',  'excel' => false,  '_controller' => 'FactelBundle\\Controller\\ReporteController::facturasAction',  '_route' => 'all_reporte',);
                }
                not_all_reporte:

                // comprobante_excel
                if ($pathinfo === '/comprobantes/reporte/excel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comprobante_excel;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\ReporteController::descargarExcel',  '_route' => 'comprobante_excel',);
                }
                not_comprobante_excel:

            }

            if (0 === strpos($pathinfo, '/comprobantes/retencion')) {
                // retencion
                if (rtrim($pathinfo, '/') === '/comprobantes/retencion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'retencion');
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::indexAction',  '_route' => 'retencion',);
                }
                not_retencion:

                // all_retenciones
                if ($pathinfo === '/comprobantes/retencion/retenciones') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_all_retenciones;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::retencionesAction',  '_route' => 'all_retenciones',);
                }
                not_all_retenciones:

                // retencion_create
                if ($pathinfo === '/comprobantes/retencion/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_retencion_create;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::createAction',  '_route' => 'retencion_create',);
                }
                not_retencion_create:

                // retencion_procesar
                if (0 === strpos($pathinfo, '/comprobantes/retencion/procesar') && preg_match('#^/comprobantes/retencion/procesar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion_procesar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_procesar')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::procesarAccion',));
                }
                not_retencion_procesar:

                // retencion_enviar_email
                if (0 === strpos($pathinfo, '/comprobantes/retencion/enviarEmail') && preg_match('#^/comprobantes/retencion/enviarEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_retencion_enviar_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_enviar_email')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::sendEmail',));
                }
                not_retencion_enviar_email:

                // retencion_descargar
                if (0 === strpos($pathinfo, '/comprobantes/retencion/descargar') && preg_match('#^/comprobantes/retencion/descargar/(?P<id>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion_descargar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_descargar')), array (  'type' => 'zip',  '_controller' => 'FactelBundle\\Controller\\RetencionController::descargarAction',));
                }
                not_retencion_descargar:

                // retencion_new
                if ($pathinfo === '/comprobantes/retencion/nueva') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion_new;
                    }

                    return array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::newAction',  '_route' => 'retencion_new',);
                }
                not_retencion_new:

                // retencion_show
                if (preg_match('#^/comprobantes/retencion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_show')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::showAction',));
                }
                not_retencion_show:

                // retencion_edit
                if (preg_match('#^/comprobantes/retencion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_retencion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_edit')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::editAction',));
                }
                not_retencion_edit:

                // retencion_update
                if (preg_match('#^/comprobantes/retencion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_retencion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_update')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::updateAction',));
                }
                not_retencion_update:

                // retencion_help
                if ($pathinfo === '/comprobantes/retencion/descarga/ayuda') {
                    return array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::downloadAction',  '_route' => 'retencion_help',);
                }

                // retencion_delete
                if (preg_match('#^/comprobantes/retencion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_retencion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retencion_delete')), array (  '_controller' => 'FactelBundle\\Controller\\RetencionController::deleteAction',));
                }
                not_retencion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/rol')) {
            // rol
            if (rtrim($pathinfo, '/') === '/rol') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rol;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol');
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\RoleController::indexAction',  '_route' => 'rol',);
            }
            not_rol:

            // rol_create
            if ($pathinfo === '/rol/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\RoleController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_new
            if ($pathinfo === '/rol/nuevo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rol_new;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\RoleController::newAction',  '_route' => 'rol_new',);
            }
            not_rol_new:

            // rol_edit
            if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rol_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'FactelBundle\\Controller\\RoleController::editAction',));
            }
            not_rol_edit:

            // rol_update
            if (preg_match('#^/rol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'FactelBundle\\Controller\\RoleController::updateAction',));
            }
            not_rol_update:

            // rol_delete
            if (preg_match('#^/rol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rol_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'FactelBundle\\Controller\\RoleController::deleteAction',));
            }
            not_rol_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\UserController::indexAction',  '_route' => 'usuario',);
            }
            not_usuario:

            // usuario_create
            if ($pathinfo === '/usuario/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\UserController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_new
            if ($pathinfo === '/usuario/nuevo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'FactelBundle\\Controller\\UserController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'FactelBundle\\Controller\\UserController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'FactelBundle\\Controller\\UserController::editAction',));
            }
            not_usuario_edit:

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'FactelBundle\\Controller\\UserController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'FactelBundle\\Controller\\UserController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
