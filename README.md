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

MpesaController content

```php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MpesaController extends Controller
{
    // Generate access token

    public function generateAccessToken()
    {
        //LOAD ENVIRONMENT VARIABLES
        $consumer_key = env('MPESA_CONSUMER_KEY');
        $consumer_secret = env('MPESA_CONSUMER_SECRET');
        $env = env('MPESA_ENV');

        //GENERATING ACCESS TOKEN
        $url = $env == 'sandbox' ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials' : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($consumer_key . ':' . $consumer_secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        $data = $response->access_token;
        return redirect('/home')->with('accessToken', $data);
    }

    public function getAccessToken()
    {
        //LOAD ENVIRONMENT VARIABLES
        $consumer_key = env('MPESA_CONSUMER_KEY');
        $consumer_secret = env('MPESA_CONSUMER_SECRET');
        $env = env('MPESA_ENV');

        //GENERATING ACCESS TOKEN
        $url = $env == 'sandbox' ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials' : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($consumer_key . ':' . $consumer_secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        return  $response->access_token;
    }

    // Lipa na Mpesa Online Paymennt or STK Push

    public function initiateStkPush(Request $request)
    {
        $Amount = $request->input('amount');
        $phoneNumber = $request->input('phonenumber');
        $phoneNumber = '254' . (int)$phoneNumber;
        $AccountReference = $phoneNumber;
        $PartyA = $phoneNumber; // This is your phonenuber number,
        //LOAD ENVIRONMENT VARIABLES
        $env = env('MPESA_ENV');
        $access_token = $this->getAccessToken();
        $short_code = env('MPESA_SHORTCODE');
        $pass_key = env('MPESA_PASSKEY');
        $callback_url = env('MPESA_CALLBACK_URL');
        $TransactionDesc = 'Please insiate payment.';
        $Timestamp = date('YmdHis');
        $password = base64_encode($short_code . $pass_key . $Timestamp);

        //INITIATE STK PUSH
        $url = $env == 'sandbox' ? 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest' : 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        # header for stk push
        $stkheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];

        # initiating the transaction
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'BusinessShortCode' => $short_code,
            'Password' => $password,
            'Timestamp' => $Timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $Amount,
            'PartyA' => $PartyA,
            'PartyB' => $short_code,
            'PhoneNumber' => $PartyA,
            'CallBackURL' => $callback_url,
            'AccountReference' => $AccountReference,
            'TransactionDesc' => $TransactionDesc
        );

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        $data = json_decode($curl_response);
        if ($data->ResponseCode == 0) {
            return redirect('/stkpushpage')->with('success', 'Payment Initiated Successfully');
        } else {
            return redirect('/stkpushpage')->with('error', 'Payment Initiation Failed');
        }
    }
}

```

To be continued........

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

### iv. Launch the project

```bash
php artisan serve
```

.....................................................................................................................................................................................................................................

Do not forget to star the project,follow me on github and you can also donnate to me through mpesa if you find it useful.

## DONNATE TO ME THROUGH MPESA

<img width="150" height="100" src="https://scents.co.ke/wp-content/uploads/2019/05/lipa-na-mpesa.jpg" alt="mpesa logo">

LIPA NA MPESA TILL NUMBER: 5926541

## SUBSCRIBE TO MY YOUTUBE CHANNEL

[![SUBSCRIBE](https://i.pinimg.com/564x/50/03/96/500396d98fca9ccc704d88de6b639d3c.jpg)](https://www.youtube.com/@umeskiasoftwares8211)
