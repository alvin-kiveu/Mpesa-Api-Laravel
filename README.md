# MPESA API WITH LARAVEL

Hello, this is a simple laravel application that uses the Mpesa Api to make payments. This application is a simple implementation of the Mpesa Api. It is not a full implementation of the Mpesa Api. It is just a simple implementation of the Mpesa Api.

You will need to create a laravel application and then add the Mpesa Api to it.follow the steps below to add the Mpesa Api to it.

## 1. Create a controler for the Mpesa Api

```php
php artisan make:controller MpesaController
```

If you are focusing on Backend you dont need to install the frontend part of the application. You can skip to the next step.

## Install the frontend part of the application (Optional)

install boostrap for the frontend

```bash
npm install bootstrap
```

## 2. Add Environment Variables

Add the following environment variables to your .env file

```bash
MPESA_ENV= <production # or sandbox >
MPESA_CONSUMER_KEY= <add your consumer key>
MPESA_CONSUMER_SECRET= <add your consumer secret>
MPESA_PASSKEY= <add your passkey>
MPESA_SHORTCODE= <add your shortcode>
MPESA_CALLBACK_URL= <add your callback url>
```

Rearrange the bootstrap files and add it into Public folder of the application from the node_modules folder.

## 3. Create a Route for the Mpesa Api

Add the following routes to your routes/web.php file

```php
use  App\Http\Controllers\MpesaController;
```

Generate Access Token

```php
Route::get('/generatetoken', [MpesaController::class, 'generateAccessToken']);
```

Intiate mpesa stk push route

```php
Route::post('/stkpush', [MpesaController::class, 'initiateStkPush']);
```

.....................................................................................................................................................................................................................................

IF YOU WANT INSTALL THIS PROJECT IN YOUR LOCAL MACHINE FOLLOW THE STEPS BELOW

Make sure you have composer and laravel installed in your local machine.

### i. Clone the project

```bash
git clone https://github.com/alvin-kiveu/Mpesa-Api-Laravel.git
```

### ii. Install dependencies

```bash

composer install

```

### iii. Create a copy of your .env file

```bash

cp .env.example .env

```

### iv. Lounch the project

```bash
php artisan serve
```
