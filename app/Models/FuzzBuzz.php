<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuzzBuzz extends Model
{
    use HasFactory;

    /**
     * @param  int  $number
     * @return int|string
     */
    public static function get_fizz_buzz_or_number(int $number)
    {
        if ($number % 3 == 0 and $number % 5 == 0) {
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        } else {
            return $number;
        }
    }
}
