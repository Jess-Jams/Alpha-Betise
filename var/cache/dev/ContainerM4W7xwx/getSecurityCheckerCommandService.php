<?php

namespace ContainerM4W7xwx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityCheckerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SensioLabs\Security\Command\SecurityCheckerCommand' shared autowired service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensiolabs'.\DIRECTORY_SEPARATOR.'security-checker'.\DIRECTORY_SEPARATOR.'SensioLabs'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SecurityCheckerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensiolabs'.\DIRECTORY_SEPARATOR.'security-checker'.\DIRECTORY_SEPARATOR.'SensioLabs'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'SecurityChecker.php';

        $container->privates['SensioLabs\\Security\\Command\\SecurityCheckerCommand'] = $instance = new \SensioLabs\Security\Command\SecurityCheckerCommand(new \SensioLabs\Security\SecurityChecker());

        $instance->setName('security:check');

        return $instance;
    }
}
