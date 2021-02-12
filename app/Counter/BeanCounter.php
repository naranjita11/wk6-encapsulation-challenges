<?php

// Create a class App\Counter\BeanCounter which has an addBean and howMany method. It should accept an App\Counter\Counter object in the constructor. When you call howMany it should return the number of times that addBean has been called. Make sure you use the Counter class rather than rewriting the increment logic.

// Uncomment line 17 of app/Challenges.php to run the following code:

namespace App\Counter;

class BeanCounter
{
    // this property is a counter object...
    private $counter;

    // ...which was passed in here
    public function __construct(Counter $counterArg)
    {
        $this->counter = $counterArg;
    }

    public function addBean() : BeanCounter
    {
        // we can now call the methods on the counter object...
        $this->counter->increment();
        return $this;
    }

    public function howMany() : int
    {
        // here we call another counter method...
        return $this->counter->count();
    }

}