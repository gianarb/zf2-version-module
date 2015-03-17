<?php
namespace VersionModule\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

class GetVersion extends AbstractHelper
{
    public function __construct($version)
    {
        $this->version = $version;
    }

    public function __invoke()
    {
        return $this->version;
    }
}
