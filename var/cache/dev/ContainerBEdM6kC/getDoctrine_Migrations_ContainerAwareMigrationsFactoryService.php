<?php

namespace ContainerBEdM6kC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ContainerAwareMigrationsFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Version'.\DIRECTORY_SEPARATOR.'MigrationFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle'.\DIRECTORY_SEPARATOR.'MigrationsFactory'.\DIRECTORY_SEPARATOR.'ContainerAwareMigrationFactory.php';

        return $container->privates['doctrine.migrations.container_aware_migrations_factory'] = new \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService'))->getMigrationFactory(), $container);
    }
}
