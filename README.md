# Tabenguyen SimpleHtmlDOM
Install
-------

 composer.phar
```json
"require": {
    "tabenguyen/simplehtmldom": "1.0"
    }
```
 composer require
```json
  composer require tabenguyen/simplehtmldom
```

Usage
-----

```php
use Tabenguyen\Simplehtmldom\;

...
$dom = HtmlDomParser::str_get_html( $str );
or 
$dom = HtmlDomParser::file_get_html( $file_name );

$elems = $dom->find($elem_name);
...

```
