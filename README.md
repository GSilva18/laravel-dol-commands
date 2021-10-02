# Artisan commands to Laravel apps that utilizes Domain Oriented Laravel.

It is heavily inspired by the DDD approach mentioned in [this great article](https://stitcher.io/blog/organise-by-domain) by Brent from Spatie.
And with review code from (signifly/laravel-domain-commands)

## Basic Usage

The package comes with a handful of commands out of the box.

**Actions**

Generate a new Action using the `dol:action` command:

```bash
php artisan dol:action CreateUserAction -d User
```

**Controller**

Generate a new Controller using the `dol:controller` command:

```bash
php artisan dol:controller UserController -d User -a Api (application dentro de exp: src/App/Api)
```

Publish config
artisan vendor:publish --tag="dol-commands-config"
