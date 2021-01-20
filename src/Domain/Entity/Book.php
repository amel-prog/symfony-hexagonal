<?php

namespace App\Domain\Entity;

class Book
{

    public function __construct(
        private string $isbn,
        private string $title,
        private string $author,
        private int $copies = 1,
        private int $pageNumber = 0
    ) {
    }


    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of copies
     */
    public function getCopies()
    {
        return $this->copies;
    }

    /**
     * Set the value of copies
     *
     * @return  self
     */
    public function setCopies($copies)
    {
        $this->copies = $copies;

        return $this;
    }

    /**
     * Get the value of pageNumber
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Set the value of pageNumber
     *
     * @return  self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}
