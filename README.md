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

### Download manually

Download and copy this repository to `site/plugins/kirby-tidy-html`.

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
       'drop-empty-paras'    => 0,
       'indent'              => 2,
       'indent'              => 2,
       'indent-spaces'       => 2,
       'indent-spaces'       => 2,
       'output-html'         => 1,
       'preserve-entities'   => 1,
       'priority-attributes' => 'id, class, name, src, alt',
       'quote-ampersand'     => 0,
       'sort-attributes'     => 0,
       'vertical-space'      => 1,
       'wrap'                => 0,
    ],
];
````
