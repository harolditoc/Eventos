<?php

namespace ContainerAcK8RXn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotorFormComponent2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CshazM0.App\Twig\Components\PromotorFormComponent' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'));

        if (isset($container->privates['.service_locator.CshazM0.App\\Twig\\Components\\PromotorFormComponent'])) {
            return $container->privates['.service_locator.CshazM0.App\\Twig\\Components\\PromotorFormComponent'];
        }

        return $container->privates['.service_locator.CshazM0.App\\Twig\\Components\\PromotorFormComponent'] = $a->withContext('App\\Twig\\Components\\PromotorFormComponent', $container);
    }
}
