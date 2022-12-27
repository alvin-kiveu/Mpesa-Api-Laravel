# MPESA API WITH LARAVEL

INSTALL MPESA API WITH LARAVEL

## Installation

### Step 1: Install Package Via Composer

```bash
composer require safaricom/mpesa
```

### Step 2: Add the Service Provider

Open `config/app.php` and, to your `providers` array at the bottom, add:

```php
Safaricom\Mpesa\MpesaServiceProvider::class,
```

### Step 3: Publish the Package Configuration

```bash

php artisan vendor:publish --provider="Safaricom\Mpesa\MpesaServiceProvider"

```

### Step 4: Add the Facade

Open `config/app.php` and, to your `aliases` array at the bottom, add:

```php

'Mpesa' => Safaricom\Mpesa\Facades\Mpesa::class,

```
