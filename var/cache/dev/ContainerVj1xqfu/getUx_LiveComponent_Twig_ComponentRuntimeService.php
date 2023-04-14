<?php

namespace ContainerVj1xqfu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_Twig_ComponentRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.twig.component_runtime' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Twig\LiveComponentRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'LiveComponentRuntime.php';

        $a = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['ux.live_component.twig.component_runtime'])) {
            return $container->privates['ux.live_component.twig.component_runtime'];
        }

        return $container->privates['ux.live_component.twig.component_runtime'] = new \Symfony\UX\LiveComponent\Twig\LiveComponentRuntime(($container->privates['ux.live_component.component_hydrator'] ?? $container->load('getUx_LiveComponent_ComponentHydratorService')), $a, ($container->services['router'] ?? $container->getRouterService()));
    }
}
