<?php

namespace EnhancedProxyb8ed51cf_f7480d37f903f3391a9dae777b860ca7e6ab4652\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class RetencionController extends \FactelBundle\Controller\RetencionController
{
    private $__CGInterception__loader;

    public function sendEmail(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RetencionController', 'sendEmail');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function retencionesAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RetencionController', 'retencionesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function procesarAccion($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RetencionController', 'procesarAccion');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RetencionController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function descargarAction($id, $type = 'zip')
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RetencionController', 'descargarAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id, $type), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}