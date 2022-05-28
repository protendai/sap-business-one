## SapBusinessOne Wrapper for Laravel


## Installation

### Laravel

    composer require protendai/sap-business-one

### Configuration

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
 
The defaults configuration settings are set in `config/sap.php`. You can modify the values.

You update config using this command:
```shell
    php artisan config:cache
```

## Using

Use SAPClient in your controller.
```php
    use Protendai\SapBusinessOne\SAPClient;
```

Create a new Service Layer session.

```php
    $sap = SAPClient::createSession('SAP UserName', 'SAP Password', 'Company DB');
```

Grab the SAP Business One session.

```php
    $session = $sap->getSession();
```

Example of pulling orders using session saved above:

```php
    $sap = new SAPClient(config('sap.sap') ,$session);
    $orders = $sap->getService('Orders');
    $result = $orders->queryBuilder()
    ->select('DocEntry,DocNum')
    ->orderBy('DocNum', 'asc')
    ->limit(5)
    ->findAll();
```
### License

This SapBusinessOne Wrapper for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)