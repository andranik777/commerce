<?php

namespace Container1rxMnxx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderCancelControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrderCancelController' shared autowired service.
     *
     * @return \App\Controller\OrderCancelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OrderCancelController.php';

        $container->services['App\\Controller\\OrderCancelController'] = $instance = new \App\Controller\OrderCancelController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\OrderCancelController', $container));

        return $instance;
    }
}
