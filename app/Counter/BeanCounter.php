<?php

// Create a class App\Counter\BeanCounter which has an addBean and howMany method. It should accept an App\Counter\Counter object in the constructor. When you call howMany it should return the number of times that addBean has been called. Make sure you use the Counter class rather than rewriting the increment logic.

// Uncomment line 17 of app/Challenges.php to run the following code:

namespace App\Counter;

class BeanCounter
{
    private $total;

    public function __construct(Counter $counterArg)
    {
        $this->total = $counterArg;
    }

    public function addBean() : BeanCounter
    {
        $this->total->increment();
        return $this;
    }

    public function howMany() : int
    {
        return $this->total->count();
    }


}