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
 
### License

This SapBusinessOne Wrapper for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)