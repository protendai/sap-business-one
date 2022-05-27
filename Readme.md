## SapBusinessOne Wrapper for Laravel


## Installation

### Laravel

    composer require protendai/sap-business-one

### Configuration
The defaults configuration settings are set in `config/sap.php`. You can modify the values.

Add the following line to your Config/app.php  Providers:
```php
    Protendai\SapBusinessOne\SapBusinessOneServiceProvider::class
```

Add the following line to your Config/app.php Aliases:
```php
    'SAPClient' => Protendai\SapBusinessOne\SAPClient::class,
```

You can publish the config using this command:
```shell
    php artisan vendor:publish --provider="Protendai\SapBusinessOne\SapBusinessOneServiceProvider"
```

### Tip: UTF-8 support
In your templates, set the UTF-8 Metatag:

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

### Tip: Page breaks
You can use the CSS `page-break-before`/`page-break-after` properties to create a new page.

    <style>
    .page-break {
        page-break-after: always;
    }
    </style>
    <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1>
    
### License

This SapBusinessOne Wrapper for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)