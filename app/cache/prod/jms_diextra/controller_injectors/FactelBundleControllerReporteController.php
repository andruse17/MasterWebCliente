<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ReporteController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:\\xampp\\htdocs\\FactelWebCliente\\app\\cache\\prod/jms_diextra/proxies/FactelBundle-Controller-ReporteController.php';
        $l = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ReporteController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'notaCreditoAction' => array(0 => 'security.access.method_interceptor'), 'notaDebitoAction' => array(0 => 'security.access.method_interceptor'), 'retencionAction' => array(0 => 'security.access.method_interceptor'), 'guiaAction' => array(0 => 'security.access.method_interceptor'), 'facturasAction' => array(0 => 'security.access.method_interceptor'), 'descargarExcel' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyb8ed51cf_c5ff45c299c24cf4a5ac87726cee6c2dcc9dc882\__CG__\FactelBundle\Controller\ReporteController();
        $instance->__CGInterception__setLoader($l);
        return $instance;
    }
}
