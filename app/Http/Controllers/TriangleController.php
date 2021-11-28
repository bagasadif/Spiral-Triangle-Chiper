<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TriangleController extends Controller
{
    public function encryptionPage()
    {
        return view('pages.triangle.encryption');
    }

    public function encrypt(Request $request)
    {
        $plaintext = $request->plaintext;
        $length = strlen($plaintext);
        $arrays = array();

        for ($i = 0; $i < sqrt($length); $i++) {
            ${"array$i"} = array();
            for ($j = $i * $i; $j < ($i + 1) * ($i + 1); $j++) {
                $char = substr($plaintext, $j, 1);
                if ($char == NULL)
                    array_push(${"array$i"}, 'X');
                else
                    array_push(${"array$i"}, $char);
            }
            array_push($arrays, ${"array$i"});
        }

        $ciphertext = "";

        for ($j = 1; $j <= (2 * $i) - 1; $j++) {
            for ($k = 0; $k < $j; $k++) {
                if (isset($arrays[$i - $j + $k][$k]))
                    $ciphertext .= $arrays[$i - $j + $k][$k];
            }
        }

        return view('pages.triangle.encryption', compact('plaintext', 'arrays', 'ciphertext'));
    }

    public function decryptionPage()
    {
        return view('pages.triangle.decryption');
    }

    public function decrypt(Request $request)
    {
        $ciphertext = $request->ciphertext;
        $length = strlen($ciphertext);
        $arrays = array();

        for ($i = 0; $i < sqrt($length); $i++) {
            ${"array$i"} = array_fill(0, 2 * ($i + 1) - 1, 'X');
            array_push($arrays, ${"array$i"});
        }

        $counter = 0;

        for ($j = 1; $j <= (2 * $i) - 1; $j++) {
            for ($k = 0; $k < $j; $k++) {
                if (isset($arrays[$i - $j + $k][$k])) {
                    $arrays[$i - $j + $k][$k] = substr($ciphertext, $counter, 1);
                    $counter++;
                }
                if ($counter >= $length)
                    break;
            }
            if ($counter >= $length)
                break;
        }

        $plaintext = "";

        foreach ($arrays as $array)
            foreach ($array as $char)
                $plaintext .= $char;

        return view('pages.triangle.decryption', compact('plaintext', 'arrays', 'ciphertext'));
    }
}
