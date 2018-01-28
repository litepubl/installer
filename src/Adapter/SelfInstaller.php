<?php

namespace LitePubl\Installer\Adapter;

use LitePubl\Installer\Interfaces\InstallerInterface;
use LitePubl\Installer\Interfaces\SelfInstallerInterface;

class SelfInstaller implements InstallerInterface
{
    public function install(object $instance): void
    {
        $instance->install();
    }

    public function uninstall(object $instance): void
    {
        $instance->uninstall();
    }

    public function isInstalled(object $instance): bool
    {
        return $instance->isInstalled();
    }
}
