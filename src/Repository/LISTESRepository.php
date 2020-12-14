<?php

namespace App\Repository;

use App\Entity\LISTES;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LISTES|null find($id, $lockMode = null, $lockVersion = null)
 * @method LISTES|null findOneBy(array $criteria, array $orderBy = null)
 * @method LISTES[]    findAll()
 * @method LISTES[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LISTESRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LISTES::class);
    }

    // /**
    //  * @return LISTES[] Returns an array of LISTES objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LISTES
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
