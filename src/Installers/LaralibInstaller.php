<?php

namespace Lada\Mixer\Installers;

class LaralibInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected array $locations = [
        'joint' => 'joint/{$name}/',
        'lams' => 'lams/{$name}/',
        'layer' => 'layer/{$name}/',
    ];
}
