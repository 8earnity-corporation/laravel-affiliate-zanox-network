# Laravel Affiliate Zanox Network

[![Latest Version](http://img.shields.io/packagist/v/soluzione-software/laravel-affiliate-zanox-network.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/soluzione-software/laravel-affiliate-zanox-network)
[![MIT License](https://img.shields.io/github/license/soluzione-software/laravel-affiliate-zanox-network.svg?label=License&color=blue&style=for-the-badge)](https://github.com/soluzione-software/laravel-affiliate-zanox-network/blob/master/LICENSE.md)

> Note the package is currently in beta. During the beta period things can and probably will change. Don't use it in production until a stable version has been released. We appreciate you helping out with testing and reporting any bugs.

[Zanox](https://www.zanox.com) network integration
for [soluzione-software/laravel-affiliate](https://github.com/soluzione-software/laravel-affiliate).

## Installation & Configuration

```bash
composer require soluzione-software/laravel-affiliate-zanox-network
```

Edit `config/affiliate.php`:

```php
<?php

return [

    //...

    /*
    |--------------------------------------------------------------------------
    | Networks Configuration
    |--------------------------------------------------------------------------
    */
    'networks' => [
        //...
        
        'zanox' => [
            'connect_id' => env('ZANOX_CONNECT_ID'),
            'secret_key' => env('ZANOX_SECRET_KEY'),
        ],
    ],

    //...
];

```

Edit `.env`:

```dotenv
ZANOX_CONNECT_ID=
ZANOX_SECRET_KEY=
```
