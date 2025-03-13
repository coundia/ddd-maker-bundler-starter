### 1. Require the Bundle

If you're developing locally, add a path repository in your project's `composer.json`:

```

composer require cnd/ddd-maker-bundle --dev
```
or if exist
```
composer update cnd/ddd-maker-bundle --dev

json
{
    "repositories": [
        {
            "type": "path",
            "url": "../ddd-maker-bundle"
        }
    ],
    "require": {
        "cnd/ddd-maker-bundle": "*"
    }
}
```