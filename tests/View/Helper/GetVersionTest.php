<?php
namespace VersionModuleTest\View\Helper;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;
use VersionModule\View\Helper\GetVersion;

class GetVersionTest extends AbstractControllerTestCase
{
    public function testReturnConrrectVersion()
    {
        $view = new GetVersion("1.0.0");
        $this->assertEquals("1.0.0", $view());
    }
}
