<?php

use Kirby\Cms\App as Kirby;
use Kirby\Cms\Template;

class TidyHTML extends Template {

  public function render(array $data = []): string {
    $kirby = Kirby::instance();
    $html = parent::render($data);

    if ($kirby->option('dgsiegel.kirby-tidy-html.enabled') === true && $this->hasDefaultType() === true) {

      $options = $kirby->option('dgsiegel.kirby-tidy-html.options', []);

      $tidy = new tidy();
      $tidy->parseString($html, $options);
      $tidy->cleanRepair();

      return $tidy;
    }

    return $html;
  }
}

Kirby::plugin('dgsiegel/kirby-tidy-html', [
  'options' => [
    'enabled' => false,
    'options' => []
  ],
  'components' => [
    'template' => function (Kirby $kirby, string $name, string $type = 'html', string $defaultType = 'html') {
      return new TidyHTML($name, $type, $defaultType);
    }
  ]
]);
