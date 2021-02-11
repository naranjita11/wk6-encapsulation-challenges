<?php

// Create a class App\Counter\Counter which has an increment and count method. When you call count it should return the number of times that increment has been called.

// Uncomment line 16 of app/Challenges.php to run the following code:

namespace App\Counter;

class Counter
{
    private int $count = 0;

    public function increment()
    {
        $this->count += 1;
    }

    public function count() : int
    {
        return $this->count;
    }

}