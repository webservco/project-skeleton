# webservco/project-skeleton

A simple webservco/framework Project Skeleton.

This is a blank project with no code. For a Web Application starter project please see [webservco/webapp-skeleton](https://github.com/webservco/webapp-skeleton)

---

## Features
* PSR-4 autoload
* `webservco/framework` `@dev`

### Optional
* `pds/skeleton`
* `squizlabs/php_codesniffer`
* `phpstan/phpstan`


---

## Setup
```
git clone https://github.com/webservco/project-skeleton.git my-project && cd my-project
composer install
```

---

## Development

### Check code

#### phpcs
```
composer check

```

#### phpstan (level 7)
```
composer s:7
```

### Validate structure
```
php check:structure
```

### Run tests
```
php test
```
Testdox:
```
php test:d
```

### Run all checks
```
composer all
```
