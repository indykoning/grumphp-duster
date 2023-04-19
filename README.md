# GrumPHP Duster

A [Duster](https://github.com/tighten/duster) task for [GrumPHP](https://github.com/phpro/grumphp).

## Installation

	composer require indykoning/grumphp-duster

## Usage

In your grumphp.yml : 

```yaml
grumphp:
  extensions:
    - Indykoning\GrumPHPDuster\ExtensionLoader
  tasks:
    duster:
      # These are all optional and have been set to sensible defaults.
      triggered_by:
        - php
      ignore_patterns:
        - /^a-patten-to-ignore-files-or-folders\/.*/
```
