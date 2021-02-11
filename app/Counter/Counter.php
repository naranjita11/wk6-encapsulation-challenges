<?php

// Create a class App\Counter\Counter which has an increment and count method. When you call count it should return the number of times that increment has been called.

// Uncomment line 16 of app/Challenges.php to run the following code:

namespace App\Counter;

class Counter
{
    private int $total = 0;

    public function increment() : Counter
    {
        $this->total += 1;
        return $this;
    }

    public function count() : int
    {
        return $this->total;
    }

}