<?php

use App\Domain\Entity\Book;
use App\Domain\Repository\IBookRepository;

class BookService {

    public function __construct(private IBookRepository $repo) {
        
    }

    public function listAllBooks():array {
        return array_map(
            fn(Book $item) => 
                new SimpleBookDto($item->getTitle(), $item->getAuthor(), $item->getIsbn()), $this->repo->findAll()
            );
    }

}