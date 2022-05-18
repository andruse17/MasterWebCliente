<?php

namespace EnhancedProxyb8ed51cf_1bc03a562aaf644cf5cedafc425843e0509df8f9\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class EstablecimientoController extends \FactelBundle\Controller\EstablecimientoController
{
    private $__CGInterception__loader;

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\EstablecimientoController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}