<?php

namespace LitePubl\Installer\Interfaces;

use Psr\Container\ContainerInterface;

interface InstallerManagerInterface extends ContainerInterface
{
    public function getInstaller(string $className): InstallerInterface;
}
