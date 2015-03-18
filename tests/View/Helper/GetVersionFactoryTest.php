<?php

namespace VersionModuleTest;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

class GetVersionFactoryTest extends AbstractControllerTestCase
{
    public function testFactoryReturnGetVersion()
    {
        $this->setApplicationConfig([
            "modules" => [
                "VersionModule",
            ],
            'module_listener_options' => [
                "module_paths" => [
                    "VersionModule" => dirname(__DIR__),
                ],
                'config_glob_paths' => array(
                    __DIR__  . '/config/autoload/{,*.}{global,local}.php',
                ),
            ],
        ]);
        $sm = $this->getApplication()->getServiceManager();
        $helper = $sm->get('viewhelpermanager')->get('getVersion');
        $this->assertInstanceOf("VersionModule\\View\\Helper\\GetVersion", $helper);
    }

}
