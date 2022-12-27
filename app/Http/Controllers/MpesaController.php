<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
    // Generate access token
    public  $consumerKey = 'EQIdeKTOgoJ8xLuyAlEM76XZoyfJmqpI';
    public $consumerSecret = '';
    public $passkey = '';


    public function generateAccessToken(Request $request)
    {
    }
}