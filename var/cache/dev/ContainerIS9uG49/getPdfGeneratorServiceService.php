<?php

namespace ContainerIS9uG49;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfGeneratorServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\PdfGeneratorService' shared autowired service.
     *
     * @return \App\Service\PdfGeneratorService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/PdfGeneratorService.php';

        return $container->privates['App\\Service\\PdfGeneratorService'] = new \App\Service\PdfGeneratorService();
    }
}
