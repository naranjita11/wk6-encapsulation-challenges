<?php

// Create a class Library in the App\Library namespace. It should have an addShelf() method, which takes a Shelf object. It should have a titles() method that lists all the titles of all the books on all the shelves in the library.

// Uncomment line 19 of app/Challenges.php to run the following code:

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function title() : array
    {
        return $this->shelves->map(function ($shelf) {
            return $shelf->titles();
        })->all();
    }

}