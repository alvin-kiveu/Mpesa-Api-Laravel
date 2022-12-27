<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mpesa API with Laravel</title>
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-12 text-center shadow">
            <h1>MPESA API WITH LARAVEL</h1>
        </div>

        {{-- ADD PARAGRAPHS --}}

        <div class="mt-2">
            <div class="row">
                <div class="card shadow">
                    <p>Bellow are .env variable for the application</p>
                    <p>MPESA_ENV : {{ env('MPESA_ENV') }}</p>
                    <p>MPESA_CONSUMER_KEY : {{ env('MPESA_CONSUMER_KEY') }}</p>
                    <p>MPESA_CONSUMER_SECRET : {{ env('MPESA_CONSUMER_SECRET') }}</p>
                    <p>MPESA_SHORTCODE : {{ env('MPESA_SHORTCODE') }}</p>
                    <p>MPESA_PASSKEY : {{ env('MPESA_PASSKEY') }}</p>
                    <p>MPESA_CALLBACK_URL : {{ env('MPESA_CALLBACK_URL') }}</p>
                </div>
            </div>
        </div>


        <div class="mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-text">Generate Access Tokens</p>
                            <a href="otherpage.html" class="btn btn-success">Generate Access Tokens</a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card h shadow">
                        <div class="card-body">
                            <p class="card-text">Mpesa Stk Push</p>
                            <a href="otherpage.html" class="btn btn-success">Access STK Api</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-text">Mpesa B2C</p>
                            <a href="otherpage.html" class="btn btn-success">Access B2C Api</a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-text">Mpesa B2B</p>
                            <a href="otherpage.html" class="btn btn-success">Access B2B Api</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>
