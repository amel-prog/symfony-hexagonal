<?php

namespace App\Domain\Adapter\Repository;

use App\Domain\Entity\Book;
use App\Domain\Repository\IBookRepository;
use App\Infrastructure\Entity\BookDoctrine;
use App\Repository\BookDoctrineRepository;
use Doctrine\ORM\EntityManagerInterface;

class BookRepositoryAdatper implements IBookRepository{

    public function __construct(private BookDoctrineRepository $repo, private EntityManagerInterface $em) {
    }

    public function findAll(): array
    {
        return array_map(
            fn(BookDoctrine $item) => 
                new Book($item->getIsbn(), $item->getTitle(), $item->getAuthor(), $item->getCopies(), $item->getPageNumber()), $this->repo->findAll()
            );
        
    }

    public function save(Book $book): void
    {
        $bookDoctrine = new BookDoctrine();
        $bookDoctrine->fromBook($book);

        
        $this->em->persist($bookDoctrine);

        $this->em->flush();
    }
}