<?php

namespace LitePubl\Container\Installer;

use LitePubl\Container\Interfaces\InstallerInterface;

class NullInstaller implements InstallerInterface
{
    public function install(object $instance): void
    {
    }

    public function uninstall(object $instance): void
    {
    }

    public function isInstalled(object $instance): bool
    {
        return false;
    }
}
