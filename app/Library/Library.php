<?php

// Create a class Library in the App\Library namespace. It should have an addShelf() method, which takes a Shelf object. It should have a titles() method that lists all the titles of all the books on all the shelves in the library.

// Uncomment line 19 of app/Challenges.php to run the following code:

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        // sets $shelves property as a collection
        // we do this in the constructor as we can't set an object instance as a default value
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles() : array
    {
        // can use flatMap() or use map() then flatten() or use reduce() to return a single array (flat) rather than 2 arrays in an array which would be what's returned with just map()

        return $this->shelves->map(function ($shelf) {
            return $shelf->titles();
        })->flatten()->all();
    }

}