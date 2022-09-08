<?php

namespace Models;

use App\Models\FuzzBuzz;
use PHPUnit\Framework\TestCase;

class FuzzBuzzTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_fix_buzz_module_function()
    {
        foreach (range(1, 100) as $number) {
            $result_number = FuzzBuzz::get_fizz_buzz_or_number($number);
            if ($number % 3 == 0 and $number % 5 == 0 and $result_number == "FizzBuzz") {
                $this->assertTrue(true);
            } elseif ($number % 3 == 0 and $result_number == "Fizz") {
                $this->assertTrue(true);
            } elseif ($number % 5 == 0 and $result_number == "Buzz") {
                $this->assertTrue(true);
            } else {
                if ($number == $result_number) {
                    $this->assertTrue(true);
                }else{
                    $this->fail("Test Failed");
                }
            }
        }
        $this->assertTrue(true);
    }
}
