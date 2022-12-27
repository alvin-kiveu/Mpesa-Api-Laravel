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

Rearrange the bootstrap files and add it into Public folder of the application

## 2. Create a Route for the Mpesa Api

Intiate mpesa stk push route

```php
Route::post('/stkpush', [MpesaController::class, 'initiateStkPush']);
```
