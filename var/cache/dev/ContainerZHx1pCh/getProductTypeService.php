<?php

namespace ContainerZHx1pCh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\ProductType' shared autowired service.
     *
     * @return \App\Form\Type\ProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/ProductType.php';

        return $container->privates['App\\Form\\Type\\ProductType'] = new \App\Form\Type\ProductType();
    }
}
