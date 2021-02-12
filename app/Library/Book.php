<?php

// Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on. Put the following in index.php and then check that you get back the right results:

namespace App\Library;

class Book
{
    private string $title;
    private int $noOfPages;
    private int $currentPage = 1;

    public function __construct($titleArg, $noOfPagesArg)
    {
        $this->title = $titleArg;
        $this->noOfPages = $noOfPagesArg;
    }

    public function read($pagesReadArg)
    {
        $this->currentPage += $pagesReadArg;
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function title() : string
    {
        return $this->title;
    }

}