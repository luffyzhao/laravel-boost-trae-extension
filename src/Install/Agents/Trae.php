<?php

declare(strict_types=1);

namespace Luffyzhao\LaravelBoostTraeExtension\Install\Agents;

use Laravel\Boost\Contracts\SupportsGuidelines;
use Laravel\Boost\Contracts\SupportsMcp;
use Laravel\Boost\Contracts\SupportsSkills;
use Laravel\Boost\Install\Enums\McpInstallationStrategy;
use Laravel\Boost\Install\Enums\Platform;

class Trae extends Agent implements SupportsGuidelines, SupportsMcp, SupportsSkills
{
    public function name(): string
    {
        return 'trae';
    }

    public function displayName(): string
    {
        return 'Trae';
    }

    public function systemDetectionConfig(Platform $platform): array
    {
        return match ($platform) {
            Platform::Darwin, Platform::Linux => [
                'command' => 'command -v trae',
            ],
            Platform::Windows => [
                'command' => 'cmd /c where trae 2>nul',
            ],
        };
    }

    public function projectDetectionConfig(): array
    {
        return [
            'paths' => ['.trae'],
            'files' => ['rules/TRAAE.md'],
        ];
    }

    public function mcpInstallationStrategy(): McpInstallationStrategy
    {
        return McpInstallationStrategy::FILE;
    }

    public function mcpConfigPath(): string
    {
        return config('boost.agents.trae.mcp_config_path', './trae/.mcp.json');
    }

    public function guidelinesPath(): string
    {
        return config('boost.agents.trae.guidelines_path', './trae/rules/TRAAE.md');
    }

    public function skillsPath(): string
    {
        return config('boost.agents.trae.skills_path', '.trae/skills'); 
    }
}