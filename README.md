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
MPESA_CONSUMER_KEY=
MPESA_CONSUMER_SECRET=
MPESA_SHORT_CODE=
MPESA_PASSKEY=
MPESA_CALLBACK_URL=
```

Rearrange the bootstrap files and add it into Public folder of the application from the node_modules folder.

## 3. Create a Route for the Mpesa Api

Generate Access Token

```php
Route::get('/generate-token', [MpesaController::class, 'generateAccessToken']);
```

Intiate mpesa stk push route

```php
Route::post('/stkpush', [MpesaController::class, 'initiateStkPush']);
```
