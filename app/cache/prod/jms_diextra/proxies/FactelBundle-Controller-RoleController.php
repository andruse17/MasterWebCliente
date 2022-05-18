<?php

namespace EnhancedProxyb8ed51cf_ebdc26b5f94f50af3f5d62d1211befeb4c4c7354\__CG__\FactelBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class RoleController extends \FactelBundle\Controller\RoleController
{
    private $__CGInterception__loader;

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('FactelBundle\\Controller\\RoleController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}