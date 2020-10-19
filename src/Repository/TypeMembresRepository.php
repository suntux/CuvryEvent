<?php

namespace App\Repository;

use App\Entity\TypeMembres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeMembres|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeMembres|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeMembres[]    findAll()
 * @method TypeMembres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeMembresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeMembres::class);
    }

    // /**
    //  * @return TypeMembres[] Returns an array of TypeMembres objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeMembres
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
