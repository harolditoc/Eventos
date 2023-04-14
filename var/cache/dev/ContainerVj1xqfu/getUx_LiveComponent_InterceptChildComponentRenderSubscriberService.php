<?php

namespace ContainerVj1xqfu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_InterceptChildComponentRenderSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.intercept_child_component_render_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\InterceptChildComponentRenderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'InterceptChildComponentRenderSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DeterministicTwigIdCalculator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'FingerprintCalculator.php';

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
