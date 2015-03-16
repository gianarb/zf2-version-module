<?php

namespace VersionModule;

use Zend\ModuleManager\ModuleEvent;
use Zend\ModuleManager\ModuleManager;

class Module
{
    public function init(ModuleManager $moduleManager)
    {
        $events = $moduleManager->getEventManager();
        $events->attach(ModuleEvent::EVENT_MERGE_CONFIG, array($this, 'onMergeConfig'));
    }

    public function onMergeConfig(ModuleEvent $e)
    {
        $configListener = $e->getConfigListener();
        $config         = $configListener->getMergedConfig(false);

        $sebastionVersion = new \SebastianBergmann\Version("0.0.0", __DIR__);
        $config['version'] = $sebastionVersion->getVersion();

        $configListener->setMergedConfig($config);
    }
}
