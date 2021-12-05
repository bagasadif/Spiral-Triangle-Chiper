<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpiralController extends Controller
{
    public function encryptionPage()
    {
        return view('pages.spiral.encryption');
    }

    public function encrypt(Request $request)
    {
        $plaintext = $request->plaintext;
        $row = $request->row;
        $column = $request->column;
        $length = strlen($plaintext);
        $counter = 0;

        $k = 0;
        $m = $row;
        $l = 0;
        $n = $column;
        $arrays = array_fill(0, $row, array_fill(0, $column, 'X'));;

        /* k - starting row index
            m - ending row index
            l - starting column index
            n - ending column index
            i - iterator
        */

        while ($k < $m && $l < $n) {
            /* Traverse the first row from
                the remaining rows */
            for ($i = $l; $i < $n; ++$i) {
                if ($counter >= $length)
                    break;

                $arrays[$k][$i] = substr($plaintext, $counter, 1);
                $counter++;
            }
            $k++;
            if ($counter >= $length)
                break;

            /* Traverse the last column
            from the remaining columns */
            for ($i = $k; $i < $m; ++$i) {
                if ($counter >= $length)
                    break;

                $arrays[$i][$n - 1] = substr($plaintext, $counter, 1);
                $counter++;
            }
            $n--;
            /* Traverse the last row from
                    the remaining rows */
            if ($k < $m) {
                for ($i = $n - 1; $i >= $l; --$i) {
                    if ($counter >= $length)
                        break;

                    $arrays[$m - 1][$i] = substr($plaintext, $counter, 1);
                    $counter++;
                }
                $m--;
            }
            if ($counter >= $length)
                break;

            /* Traverse the first column from
                    the remaining columns */
            if ($l < $n) {
                for ($i = $m - 1; $i >= $k; --$i) {
                    if ($counter >= $length)
                        break;

                    $arrays[$i][$l] = substr($plaintext, $counter, 1);
                    $counter++;
                }
                $l++;
            }
        }

        $ciphertext = "";

        for ($i = 0; $i < $column; $i++)
            for ($j = 0; $j < $row; $j++)
                $ciphertext .= $arrays[$j][$i];

        return view('pages.spiral.encryption', compact('plaintext', 'arrays', 'ciphertext', 'row', 'column'));
    }

    public function decryptionPage()
    {
        return view('pages.spiral.decryption');
    }

    public function decrypt(Request $request)
    {
        $ciphertext = $request->ciphertext;
        $row = $request->row;
        $column = $request->column;
        $length = strlen($ciphertext);
        $arrays = array_fill(0, $row, array_fill(0, $column, 'X'));;
        $counter = 0;

        for ($i = 0; $i < $column; $i++) {
            for ($j = 0; $j < $row; $j++) {
                if ($counter > $length)
                    break;
                $arrays[$j][$i] = substr($ciphertext, $counter, 1);
                $counter++;
            }
        }

        $k = 0;
        $m = $row;
        $l = 0;
        $n = $column;

        /* k - starting row index
            m - ending row index
            l - starting column index
            n - ending column index
            i - iterator
        */

        $plaintext = "";

        while ($k < $m && $l < $n) {
            /* Traverse the first row from
                the remaining rows */
            for ($i = $l; $i < $n; ++$i) {
                $plaintext .= $arrays[$k][$i];
            }
            $k++;

            /* Traverse the last column
            from the remaining columns */
            for ($i = $k; $i < $m; ++$i) {
                $plaintext .= $arrays[$i][$n - 1];
            }
            $n--;
            /* Traverse the last row from
                    the remaining rows */
            if ($k < $m) {
                for ($i = $n - 1; $i >= $l; --$i) {
                    $plaintext .= $arrays[$m - 1][$i];
                }
                $m--;
            }

            /* Traverse the first column from
                    the remaining columns */
            if ($l < $n) {
                for ($i = $m - 1; $i >= $k; --$i) {
                    $plaintext .= $arrays[$i][$l];
                }
                $l++;
            }
        }

        return view('pages.spiral.decryption', compact('plaintext', 'arrays', 'ciphertext', 'row', 'column'));
    }
}
