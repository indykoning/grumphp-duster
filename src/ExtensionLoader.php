<?php

declare(strict_types=1);

namespace Indykoning\GrumPHPDuster;

use GrumPHP\Extension\ExtensionInterface;

class ExtensionLoader implements ExtensionInterface
{
    public function imports(): iterable
    {
        yield __DIR__ . '/../services.yaml';
    }
}