<?php

namespace ContainerWZYvmMV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nm2noI0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nm2noI0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nm2noI0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BookCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\BookCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\BookCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\BookCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\BookCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\BookCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\BookCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\BookCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BookCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BookCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\BookController::delete' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController::edit' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController::index' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController::new' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController::show' => ['privates', '.service_locator.qkm.aLw', 'get_ServiceLocator_Qkm_ALwService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\BookCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\BookCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\BookCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\BookCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\BookCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\BookCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\BookCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\BookCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BookCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BookCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BookCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BookCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\BookController:delete' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController:edit' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController:index' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController:new' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController:show' => ['privates', '.service_locator.qkm.aLw', 'get_ServiceLocator_Qkm_ALwService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\BookCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\BookCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\BookCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\BookCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\BookCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\BookCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\BookCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BookCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\BookCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\BookCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController::delete' => '?',
            'App\\Controller\\Admin\\BookCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\BookCrudController::detail' => '?',
            'App\\Controller\\Admin\\BookCrudController::edit' => '?',
            'App\\Controller\\Admin\\BookCrudController::index' => '?',
            'App\\Controller\\Admin\\BookCrudController::new' => '?',
            'App\\Controller\\Admin\\BookCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\BookCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\BookCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\BookController::delete' => '?',
            'App\\Controller\\BookController::edit' => '?',
            'App\\Controller\\BookController::index' => '?',
            'App\\Controller\\BookController::new' => '?',
            'App\\Controller\\BookController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\BookCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\BookCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\BookCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\BookCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\BookCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\BookCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\BookCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BookCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\BookCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\BookCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BookCrudController:delete' => '?',
            'App\\Controller\\Admin\\BookCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\BookCrudController:detail' => '?',
            'App\\Controller\\Admin\\BookCrudController:edit' => '?',
            'App\\Controller\\Admin\\BookCrudController:index' => '?',
            'App\\Controller\\Admin\\BookCrudController:new' => '?',
            'App\\Controller\\Admin\\BookCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\BookCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\BookCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\BookController:delete' => '?',
            'App\\Controller\\BookController:edit' => '?',
            'App\\Controller\\BookController:index' => '?',
            'App\\Controller\\BookController:new' => '?',
            'App\\Controller\\BookController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
