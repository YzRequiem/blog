<?php

namespace ContainerA0h7qeP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\CommentaireCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CommentaireCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CommentaireCrudController.php';

        $container->services['App\\Controller\\Admin\\CommentaireCrudController'] = $instance = new \App\Controller\Admin\CommentaireCrudController();

        $instance->setContainer(($container->privates['.service_locator.wcyNGhy'] ?? $container->load('get_ServiceLocator_WcyNGhyService'))->withContext('App\\Controller\\Admin\\CommentaireCrudController', $container));

        return $instance;
    }
}