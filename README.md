# webservco/project-skeleton

A blank project template for [webservco/framework](https://github.com/webservco/framework).

Empty PDS directory layout with Composer autoloading, plus an example form and an example database class.

> **Note:** This project is deprecated and kept for reference only. It still targets `webservco/framework` v11 and PHP 7.4. For a working web application starter, see [webservco/webapp-skeleton](https://github.com/webservco/webapp-skeleton).

- Requires: PHP 7.4, `webservco/framework` ^11

---

## Installation

```shell
PROJECT='my-project'; git clone https://github.com/webservco/project-skeleton.git $PROJECT && cd $PROJECT
composer install
```

Code goes in `src/` (namespace `Project\`).

---

## Usage

### Form

`Project\Forms\AbstractForm` adds three settings on top of the framework form: `required`, `trim` and `filterNumeric`. [ExampleForm](src/Forms/ExampleForm.php) shows how to declare them.

```php
use Project\Forms\ExampleForm;

$form = new ExampleForm(['name1' => 'value1', 'name2' => 'value2']);

if ($form->isSent() && $form->isValid()) {
    // All required fields are filled in.
}
```

### Database

```php
use Project\Database\ExampleDatabase;
use WebServCo\Framework\Libraries\MysqlPdoDatabase;

$db = new MysqlPdoDatabase([
    'connection' => [
        'host' => 'localhost',
        'username' => 'user',
        'passwd' => 'password',
        'dbname' => 'example',
        'port' => '3306',
    ],
]);
$example = new ExampleDatabase($db);
```

`ExampleDatabase` is an empty `AbstractObject` subclass. Add your query methods there.

---

## Documentation

- [Form](docs/Examples/Form.md): Form example.
- [Database](docs/Examples/Database.md): Database example.

---

## Development

```shell
# Code style.
composer check
# Static analysis, level 8.
composer s:8
# Validate the PDS directory structure.
composer check:structure
# Lint, code style and static analysis.
composer all
```

---

## License

[MIT](LICENSE)
