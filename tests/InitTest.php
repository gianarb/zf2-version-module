<?php
namespace VersionModuleTest;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

class InitTest extends AbstractControllerTestCase
{
    public function testOnMerged()
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
        $config = $sm->get("Config");
        $this->assertTrue(array_key_exists("version", $config));
    }

}
