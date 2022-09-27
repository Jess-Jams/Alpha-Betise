<?php

namespace Container227ZcDx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2vrAr7LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2vrAr7L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2vrAr7L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
        ], [
            'bookRepository' => 'App\\Repository\\BookRepository',
        ]);
    }
}
