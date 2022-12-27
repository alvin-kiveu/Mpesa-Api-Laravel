@extends('layout')

@section('content')
    {{-- ADD PARAGRAPHS --}}

    <div class="mt-2">
        @if (session('accessToken'))
            <div class="alert alert-success">
                Generate Access Token : {{ session('accessToken') }}
            </div>
        @endif
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
                        <a href="generatetoken" class="btn btn-success">Generate Access Tokens</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card h shadow">
                    <div class="card-body">
                        <p class="card-text">Mpesa Stk Push</p>
                        <a href="stkpushpage" class="btn btn-success">Access STK Api</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="mt-5">
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
    </div> --}}
@endsection
