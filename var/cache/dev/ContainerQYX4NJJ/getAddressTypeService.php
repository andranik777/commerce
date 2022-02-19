<?php

namespace ContainerQYX4NJJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddressTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AddressType' shared autowired service.
     *
     * @return \App\Form\AddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AddressType.php';

        return $container->privates['App\\Form\\AddressType'] = new \App\Form\AddressType();
    }
}
