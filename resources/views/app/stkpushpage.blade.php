@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5 shadow">

                <h1>STK Push</h1>
                <hr class="my-4">
                <a href="/" class="btn btn-primary">Back</a>
                {{-- Error Handling --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/stkpush" method="POST">
                    @csrf
                    <fieldset>
                        <legend>Intiate mpesa STK</legend>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" name="phonenumber" class="form-control" id="exampleInputEmail1"
                                placeholder="0768xxx60" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">Enter phone number that you want to pay with.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" placeholder="10"
                                id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">Enter amount you want to pay.</div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">PROCESS PAYMENT</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
