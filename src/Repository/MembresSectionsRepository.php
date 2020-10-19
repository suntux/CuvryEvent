<?php

namespace App\Repository;

use App\Entity\MembresSections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MembresSections|null find($id, $lockMode = null, $lockVersion = null)
 * @method MembresSections|null findOneBy(array $criteria, array $orderBy = null)
 * @method MembresSections[]    findAll()
 * @method MembresSections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MembresSectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MembresSections::class);
    }

    // /**
    //  * @return MembresSections[] Returns an array of MembresSections objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MembresSections
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
