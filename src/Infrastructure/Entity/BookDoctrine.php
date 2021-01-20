<?php

namespace App\Infrastructure\Entity;

use App\Domain\Entity\Book;
use App\Repository\BookDoctrineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookDoctrineRepository::class)
 */
class BookDoctrine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column()
     */
    private string $isbn;

    /**
     * @ORM\Column()
     */
    private string $title;
    /**
     * @ORM\Column()
     */
    private string $author;
    /**
     * @ORM\Column()
     */
    private int $copies = 1;
    /**
     * @ORM\Column()
     */
    private int $pageNumber =0 ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getCopies(): ?string
    {
        return $this->copies;
    }

    public function setCopies(string $copies): self
    {
        $this->copies = $copies;

        return $this;
    }

    public function getPageNumber(): ?string
    {
        return $this->pageNumber;
    }

    public function setPageNumber(string $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    public function fromBook(Book $book) {
        $this->isbn = $book->getIsbn();
        $this->title = $book->getTitle();
        $this->author = $book->getAuthor();
        $this->copies = $book->getCopies();
        $this->pageNumber = $book->getPageNumber();
    }
}
