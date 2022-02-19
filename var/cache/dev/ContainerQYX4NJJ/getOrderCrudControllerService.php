<?php

namespace ContainerQYX4NJJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\OrderCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\OrderCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/OrderCrudController.php';

        $container->services['App\\Controller\\Admin\\OrderCrudController'] = $instance = new \App\Controller\Admin\OrderCrudController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $container->load('getCrudUrlGeneratorService')));

        $instance->setContainer(($container->privates['.service_locator.Jaz8VFM'] ?? $container->load('get_ServiceLocator_Jaz8VFMService'))->withContext('App\\Controller\\Admin\\OrderCrudController', $container));

        return $instance;
    }
}