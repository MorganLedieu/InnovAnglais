<?php

namespace App\Repository;

use App\Entity\RESULTATTEST;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RESULTATTEST|null find($id, $lockMode = null, $lockVersion = null)
 * @method RESULTATTEST|null findOneBy(array $criteria, array $orderBy = null)
 * @method RESULTATTEST[]    findAll()
 * @method RESULTATTEST[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RESULTATTESTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RESULTATTEST::class);
    }

    // /**
    //  * @return RESULTATTEST[] Returns an array of RESULTATTEST objects
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
    public function findOneBySomeField($value): ?RESULTATTEST
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
