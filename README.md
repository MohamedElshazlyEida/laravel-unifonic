# Laravel-Unifonic

Start send sms with Unifonic right away using your favorite PHP framework.

### Installation

`composer require MohamedElshazlyEida/laravel-unifonic`.

Add the service provider to your `config/app.php`:

```
'providers' => [

    MohamedElshazlyEida\Unifonic\UnifonicServiceProvider::class,

],
```

...run `php artisan vendor:publish` to copy the config file.

Edit the `config/unifonic.php` or add Unifonic app id in your `.env` file

```
UNIFONIC_APPS_ID={YOUR_DEFAULT_APP_ID}

```

Add the alias to your `config/app.php`:

```
'aliases' => [

    'Unifonic' => MohamedElshazlyEida\Unifonic\Unifonic::class,

],
```

### Usage

Please refer to the [Api Documentation](http://docs.unifonic.apiary.io/) for more info, or read the [docblocks](https://github.com/MohamedElshazlyEida/laravel-unifonic/blob/master/src/App.php) !

```
use MohamedElshazlyEida\Unifonic\Unifonic;

// messages API methods
Unifonic::send(int $recipient,string $message);
Unifonic::sendBulk(array $recipient, string $message);
Unifonic::getMessageIDStatus(int $messageId);
Unifonic::getBalance();

```

If you use many apps id, you can do this :

```
use MohamedElshazlyEida\Unifonic\Unifonic;

$sms = new App('second');
```

The key 'second' will be defined in your config/unifonic.php

```

'appsid' => [
    'default' => env('UNIFONIC_APPS_ID', ''),
    'second' => env('UNIFONIC_SECOND_APPS_ID', '')
],

```
