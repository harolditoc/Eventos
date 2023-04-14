<?php

namespace ContainerQCx6pK7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_InterceptChildComponentRenderSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.live_component.intercept_child_component_render_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\InterceptChildComponentRenderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['ux.live_component.attribute_helper'] ?? $container->load('getUx_LiveComponent_AttributeHelperService'));

        if (isset($container->privates['ux.live_component.intercept_child_component_render_subscriber'])) {
            return $container->privates['ux.live_component.intercept_child_component_render_subscriber'];
        }
        $b = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['ux.live_component.intercept_child_component_render_subscriber'])) {
            return $container->privates['ux.live_component.intercept_child_component_render_subscriber'];
        }

        return $container->privates['ux.live_component.intercept_child_component_render_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\InterceptChildComponentRenderSubscriber(($container->privates['ux.twig_component.component_stack'] ??= new \Symfony\UX\TwigComponent\ComponentStack()), ($container->privates['ux.live_component.deterministic_id_calculator'] ??= new \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator()), ($container->privates['ux.live_component.fingerprint_calculator'] ??= new \Symfony\UX\LiveComponent\Util\FingerprintCalculator($container->getEnv('APP_SECRET'))), $a, $b, ($container->privates['ux.live_component.component_hydrator'] ?? $container->load('getUx_LiveComponent_ComponentHydratorService')));
    }
}
