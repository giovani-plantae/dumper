# 🐘📦 Dumper
It's a PHP library that provides helpful debugging tools inspired by the `dd` function from Laravel, with the addition of SQL formatting, which is a common need during development.

# 🔧 Installation

To install the library, follow these steps:

1. Add the repository to your project's composer.json file:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/giovani-plantae/dumper"
    }
]
```

2. Add the library to the require-dev section of your composer.json file:
```json
"require-dev": {
    "plantae/dumper": "dev-master"
}
```

# 🚀 Usage

Once installed, all four global functions will be available for you to use.

## `dump()`
The dump() function is used to debug variables, objects, arrays, and more. It takes one or multiple parameters and outputs a beautifully formatted debug dump, even for objects.

```php
$var1 = 'Hello';
$var2 = ['foo', 'bar'];
$var3 = new stdClass();

dump($var1, $var2, $var3);
```

## `dd()`
The `dd()` function is the same as `dump()`, but it also stops the application after the debug dump is displayed.

```php
$var = 'Hello';

dd($var);
echo 'This line of code will never be executed.';
```

## `ds()`
The `ds()` function is used to debug SQL statements. It takes a SQL string or an array of SQL statements as a parameter and outputs a beautifully formatted debug dump, with syntax highlighting for SQL.

```php
$sql = "SELECT * FROM users WHERE id = 1";

ds($sql);
```

## `dds()`
The `dds()` function is the same as `ds()`, but it also stops the application after the debug dump is displayed.

```php
$sql = "SELECT * FROM users WHERE id = 1";

dds($sql);
echo 'This line of code will never be executed.';
```