<?php
namespace VersionModule\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use VersionModule\View\Helper\GetVersion;
use Zend\ServiceManager\ServiceLocatorInterface;

class GetVersionFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator->getServiceLocator();
        $conf = $sl->get('Config');
        $version = $conf['version'];
        $helper = new GetVersion($version);
        return $helper;
    }
}
