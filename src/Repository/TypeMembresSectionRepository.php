<?php

namespace App\Repository;

use App\Entity\TypeMembresSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeMembresSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeMembresSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeMembresSection[]    findAll()
 * @method TypeMembresSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeMembresSectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeMembresSection::class);
    }

    // /**
    //  * @return TypeMembresSection[] Returns an array of TypeMembresSection objects
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
    public function findOneBySomeField($value): ?TypeMembresSection
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
