# Laravel Boost Trae Extension

A Laravel Composer package that provides Trae IDE integration for Laravel Boost 2.x.

## Requirements

- PHP ^7.4
- Laravel Boost ^2.0
- Illuminate Support ^12.28.1

## Installation

```bash
composer require luffyzhao/laravel-boost-trae-extension
```

The service provider will be automatically discovered by Laravel.

## Features

This extension registers the Trae code environment with three core capabilities:

### Guidelines Support

Loads project guidelines from the configured path. The default path is:

```
./trae/rules/TRAAE.md
```

### MCP (Model Context Protocol) Support

Provides MCP configuration via file-based strategy. The default MCP config path is:

```
./trae/.mcp.json
```

### Skills Support

Loads custom skills from the configured directory. The default path is:

```
.trae/skills
```

## Configuration

You can override the default paths by publishing the Laravel Boost configuration and updating the following keys:

- `boost.agents.trae.mcp_config_path` - MCP configuration file path
- `boost.agents.trae.guidelines_path` - Guidelines file path
- `boost.agents.trae.skills_path` - Skills directory path

## Detection

The Trae agent automatically detects:

- **System detection**: Checks if `trae` command is available in PATH across macOS, Linux, and Windows
- **Project detection**: Looks for `.trae` directory and `rules/TRAAE.md` file in the project root

## License

MIT