# MPESA API WITH LARAVEL

INSTALL MPESA API WITH LARAVEL

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
Route::post('/stkpush', [AuthController::class, 'initiateStkPush']);
```
