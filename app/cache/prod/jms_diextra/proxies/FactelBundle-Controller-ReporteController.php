<?php

namespace EnhancedProxyb8ed51cf_c5ff45c299c24cf4a5ac87726cee6c2dcc9dc882\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ReporteController extends \FactelBundle\Controller\ReporteController
{
    private $__CGInterception__loader;

    public function retencionAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'retencionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function notaDebitoAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'notaDebitoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function notaCreditoAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'notaCreditoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function guiaAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'guiaAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function facturasAction($comprobante = NULL, $sSearch = '', $excel = false)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'facturasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($comprobante, $sSearch, $excel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($comprobante, $sSearch, $excel), $interceptors);

        return $invocation->proceed();
    }

    public function descargarExcel()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\ReporteController', 'descargarExcel');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}