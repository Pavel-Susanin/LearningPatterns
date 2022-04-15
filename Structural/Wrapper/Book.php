<?php

class Book
{
    private $author;
    private $title;
    function __construct($author_in, $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getAuthor()
    {
        return $this->author;
    }
}