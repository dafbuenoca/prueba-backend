<?php

namespace ContainerZHx1pCh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_QtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $container->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
}
