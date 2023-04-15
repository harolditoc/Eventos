<?php

namespace ContainerJlXgLBt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['ux.twig_component.component_factory'])) {
            return $container->privates['ux.twig_component.component_factory'];
        }

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'promotor_form' => [false, 'App\\Twig\\Components\\PromotorFormComponent', 'getPromotorFormComponentService', true],
        ], [
            'promotor_form' => 'App\\Twig\\Components\\PromotorFormComponent',
        ]), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), $a, ['promotor_form' => ['key' => 'promotor_form', 'expose_public_props' => true, 'attributes_var' => 'attributes', 'live' => true, 'csrf' => true, 'route' => 'ux_live_component', 'service_id' => 'App\\Twig\\Components\\PromotorFormComponent', 'class' => 'App\\Twig\\Components\\PromotorFormComponent', 'template' => 'components/promotor_form.html.twig']]);
    }
}