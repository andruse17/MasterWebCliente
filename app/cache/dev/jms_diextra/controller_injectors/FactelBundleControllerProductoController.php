<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ProductoController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:\\xampp\\htdocs\\FactelWebCliente\\app\\cache\\dev/jms_diextra/proxies/FactelBundle-Controller-ProductoController.php';
        $k = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\ProductoController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'productosAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'cargarProductoAction' => array(0 => 'security.access.method_interceptor'), 'createProductoAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyb2cef46c_b1ca8112ac1bc1fdbf98de236ae357673dce644a\__CG__\FactelBundle\Controller\ProductoController();
        $instance->__CGInterception__setLoader($k);
        return $instance;
    }
}
