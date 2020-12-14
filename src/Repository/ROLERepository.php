<?php

namespace App\Repository;

use App\Entity\ROLE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ROLE|null find($id, $lockMode = null, $lockVersion = null)
 * @method ROLE|null findOneBy(array $criteria, array $orderBy = null)
 * @method ROLE[]    findAll()
 * @method ROLE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ROLERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ROLE::class);
    }

    // /**
    //  * @return ROLE[] Returns an array of ROLE objects
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
    public function findOneBySomeField($value): ?ROLE
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
