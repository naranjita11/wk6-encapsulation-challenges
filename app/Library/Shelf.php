<?php

// Create a Shelf class in the App\Library namespace. Also copy across your Book class from the Autoloading challenges. Shelf should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf.

// Uncomment line 18 of app/Challenges.php to run the following code:

namespace App\Library;

class Shelf
{
    private $books;

    public function __construct()
    {
        // sets $books property as a collection
        // can't set an object instance as a default value
        $this->books = collect();
    }

    public function addBook(Book $book) : Shelf
    {
        // uses push method to add each book to the books collection
        $this->books->push($book);
        return $this;
    }

    public function titles() : array
    {
        // map() method iterates over each book object and performs the title() method from the Book class. The all() method is then applied to turn it back to an array.
        return $this->books->map(function ($book) {
            return $book->title();
        })->all();
    }

}