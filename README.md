# VersionModule
[Sebastion\Version](https://github.com/sebastianbergmann/version) integration in ZF2

## Sebastian\Version
Version is a library that helps with managing the version number of Git-hosted PHP projects.

## Getting Started
Do you use git release in your project?! Awesome!

Now you can resume this information with `$this->getServiceLocator()->get("Config")['version']`

## ViewHelper
Would you manage version of your static assets? Would you print application's version in the footer of your site?

You can use the view helper
```php
$this->getVersion();
```

## Install
` composer require gianarb/version-module`

## Tests
`vendor/bin/phpunit`
