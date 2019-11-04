# Form Example

## `\Project\Forms\ExampleForm`

### Usage

```php
require __DIR__ . '/../vendor/autoload.php';

$defaultData = [
    'name1' => 'value1',
    'name2' => 'value2',
];
$form = new \Project\Forms\ExampleForm($defaultData);

if ($form->isSent() && $form->isValid()) {
    // all ok
}
```

---

See also the Framework forms documentation.
