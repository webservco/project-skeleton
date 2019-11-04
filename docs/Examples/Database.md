# Database

## `\Project\Database\ExampleDatabase`

### Usage

```php
require __DIR__ . '/../vendor/autoload.php';

$db = new \WebServCo\Framework\Libraries\MysqlPdoDatabase(
    [
        'connection' => [
            'host' => '',
            'username' => '',
            'passwd' => '',
            'dbname' => '',
            'port' => '',
        ],
    ]
);
$myObject = new \Project\Database\ExampleDatabase($db);
```

---

See also the Framework database documentation.
