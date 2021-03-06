# webservco/project-skeleton

A simple webservco/framework Project Skeleton.

This is a blank project with no initial functionality.  
For a working Web Application starter project please see [webservco/webapp-skeleton](https://github.com/webservco/webapp-skeleton)

---

## Features
* PSR-4 autoload
* `webservco/framework` `@dev`

## Code examples
* [Form](/docs/Examples/Form.md)
* [Database](/docs/Examples/Database.md)

## Optional utilities
* `pds/skeleton`
* `squizlabs/php_codesniffer`
* `phpstan/phpstan`



---

## Setup
```
PROJECT='my-project'; git clone https://github.com/webservco/project-skeleton.git $PROJECT && cd $PROJECT
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
