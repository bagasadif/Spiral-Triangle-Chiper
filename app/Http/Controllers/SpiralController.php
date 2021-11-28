<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpiralController extends Controller
{
    public function encryptionPage(){
        return view('pages.spiral.encryption');
    }

    public function decryptionPage(){
        return view('pages.spiral.decryption');
    }
}
