<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 27-3-2015
 * Time: 17:31
 */
namespace Debug\Service\Factory;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TimerAbstractFactory implements AbstractFactoryInterface
{
    /**
     * Configuration key holding timer configuration
     * @var string
     */
    protected $configKey = 'timers';

    public function canCreateServiceWithName(ServiceLocatorInterface $services, $name, $requestedName)
    {
        $config = $services->get('config');
        if (empty($config)) {
            return false;
        }
        return isset($config[$this->configKey][$requestedName]);
    }

    public function createServiceWithName(ServiceLocatorInterface $services, $name, $requestedName)
    {
        $config = $services->get('config');
        $timer = new Timer($config);
        return $timer;
	}
}
