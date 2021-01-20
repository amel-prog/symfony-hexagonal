<?php

namespace App\Repository;

use App\Entity\BookDoctrine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BookDoctrine|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookDoctrine|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookDoctrine[]    findAll()
 * @method BookDoctrine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookDoctrineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookDoctrine::class);
    }

    // /**
    //  * @return BookDoctrine[] Returns an array of BookDoctrine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookDoctrine
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
