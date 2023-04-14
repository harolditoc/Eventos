<?php

namespace ContainerQCx6pK7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Endroid\QrCode\Builder\BuilderRegistry' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\BuilderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] = $instance = new \Endroid\QrCode\Builder\BuilderRegistry();

        $a = new \Endroid\QrCode\Builder\Builder();
        $a->writer(($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ??= new \Endroid\QrCode\Writer\PngWriter()));
        $a->size(300);
        $a->margin(10);
        $a->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $a->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $a->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $a->validateResult(false);

        $instance->addBuilder('default', $a);

        return $instance;
    }
}
