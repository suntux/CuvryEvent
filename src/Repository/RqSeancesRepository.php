<?php

namespace App\Repository;

use App\Entity\RqSeances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RqSeances|null find($id, $lockMode = null, $lockVersion = null)
 * @method RqSeances|null findOneBy(array $criteria, array $orderBy = null)
 * @method RqSeances[]    findAll()
 * @method RqSeances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RqSeancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RqSeances::class);
    }

    // /**
    //  * @return RqSeances[] Returns an array of RqSeances objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RqSeances
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
