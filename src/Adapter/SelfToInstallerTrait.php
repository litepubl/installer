<?php

namespace LitePubl\Installer\Adapter;

use LitePubl\Installer\Interfaces\InstallerInterface;

class SelfInstaller
{
    abstract public function getInstaller(): InstallerInterface;

    public function install(): void
    {
        $this->getInstaller()->install($this);
    }

    public function uninstall(): void
    {
        $this->getInstaller()->uninstall($this);
    }

    public function isInstalled(): bool
    {
        return $this->getInstalller()->isInstalled($this);
    }
}
