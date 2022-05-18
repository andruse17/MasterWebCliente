<?php

namespace EnhancedProxyb8ed51cf_18a53ef5491c778a5a5049cdb7db7fd638e8f30d\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class FacturaController extends \FactelBundle\Controller\FacturaController
{
    private $__CGInterception__loader;

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function sendEmail(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'sendEmail');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function procesarAccion($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'procesarAccion');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function facturasAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'facturasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function descargarAction($id, $type = 'zip')
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'descargarAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id, $type), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\FacturaController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}