---
title: Extending Saaze
---

Under the hood, Saaze uses what's known as a "container" to manage all of the class dependencies of the application. This is a common practice in modern PHP development and allows us to do some nifty things. Most importantly, it allows us to bind interfaces to implementations which makes it very easy to extend Saaze to add your own implementations if you need to.

To swap out one of the [default implementations](https://github.com/Saaze/core/blob/master/src/Container/Container.php), create a `definitions.php` file in the root of your Saaze project that returns an array. This file will be auto-loaded by Saaze if it exists. Add your custom implementation class to the array, using the [relevant interface](https://github.com/Saaze/core/tree/master/src/Interfaces) as the key.

## Custom Tags Example

As an example, let's say you want to add a custom content parser that converts `[alert][/alert]` tags in your markdown to HTML `<div class="alert"></div>` tags. First, create a new PHP class at `src/CustomContentParser.php` that extends the default `Saaze\Content\MarkdownContentParser` class:

```php
<?php

use Saaze\Content\MarkdownContentParser;

class CustomContentParser extends MarkdownContentParser
{
    /**
     * Parse raw content and return HTML
     *
     * @param string $content
     * @return string
     */
    public function toHtml($content)
    {
        return parent::toHtml($content);
    }
}
```

Note: The `MarkdownContentParser` class implements the `Saaze\Interfaces\ContentParserInterface` interface.

Next, create the `definitions.php` file in the root of your Saaze project. Then `require` your custom class and return it in the array:

```php
<?php

require_once 'src/CustomContentParser.php';

return [
    \Saaze\Interfaces\ContentParserInterface::class => \CustomContentParser::class,
];
```

Finally, update the `toHtml()` method of your `CustomContentParser` class to process the content:

```php
/**
 * Parse raw content and return HTML
 *
 * @param string $content
 * @return string
 */
public function toHtml($content)
{
    $content = parent::toHtml($content);

    $content = preg_replace('/\[alert\]/', '<div class="alert">', $content);
    $content = preg_replace('/\[\/alert\]/', '</div>', $content);

    return $content;
}
```
