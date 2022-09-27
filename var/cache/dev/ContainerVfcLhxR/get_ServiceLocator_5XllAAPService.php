<?php

namespace ContainerVfcLhxR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5XllAAPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5XllAAP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5XllAAP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'book' => ['privates', '.errored..service_locator.5XllAAP.App\\Entity\\Book', NULL, 'Cannot autowire service ".service_locator.5XllAAP": it references class "App\\Entity\\Book" but no such service exists.'],
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
        ], [
            'book' => 'App\\Entity\\Book',
            'bookRepository' => 'App\\Repository\\BookRepository',
        ]);
    }
}
