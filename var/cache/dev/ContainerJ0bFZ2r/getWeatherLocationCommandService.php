<?php

namespace ContainerJ0bFZ2r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherLocationCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\WeatherLocationCommand' shared autowired service.
     *
     * @return \App\Command\WeatherLocationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'WeatherLocationCommand.php';

        $container->privates['App\\Command\\WeatherLocationCommand'] = $instance = new \App\Command\WeatherLocationCommand(($container->privates['App\\Repository\\LocationRepository'] ?? $container->load('getLocationRepositoryService')), ($container->privates['App\\Service\\WeatherUtil'] ?? $container->load('getWeatherUtilService')));

        $instance->setName('weather:location');
        $instance->setDescription('Displays measurements for location');

        return $instance;
    }
}