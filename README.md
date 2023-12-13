# Kirby Tidy HTML

Tidy HTML output for Kirby

## Installation

### Requirements

You’ll need the [PHP tidy](https://www.php.net/manual/en/book.tidy.php) extension installed and loaded. You can check whether this is the case with the following command:

```
php -r "var_dump(extension_loaded('tidy'));"
```

### Installation with composer

```ssh
composer require dgsiegel/kirby-tidy-html
```

### Add as git submodule

```ssh
git submodule add https://github.com/dgsiegel/kirby-tidy-html.git site/plugins/kirby-tidy-html
```

## Options

The default values of the package are:

| Option | Default | Description |
|:--|:--|:--|
| dgsiegel.kirby-tidy-html.enabled | false | Enable/disable tidy |
| dgsiegel.kirby-tidy-html.options | [] | Tidy options |

Find all available Tidy options here: https://api.html-tidy.org/tidy/quickref_next.html

## Usage

````php
return [
    'dgsiegel.kirby-tidy-html.enabled' => true,
    'dgsiegel.kirby-tidy-html.options' => [
      [your options...]
    ],
];
````
