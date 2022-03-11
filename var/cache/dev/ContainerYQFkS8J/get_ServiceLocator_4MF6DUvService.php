<?php

namespace ContainerYQFkS8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4MF6DUvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4MF6DUv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4MF6DUv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.4MF6DUv.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.4MF6DUv": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
