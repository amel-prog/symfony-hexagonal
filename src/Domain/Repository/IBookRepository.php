<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Book;

interface IBookRepository {
    /**
     * @return Book[]
     */
    public function findAll():array;

    public function save(Book $book):void;
}