<?php

namespace App\Repository;

use App\Entity\THEME;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method THEME|null find($id, $lockMode = null, $lockVersion = null)
 * @method THEME|null findOneBy(array $criteria, array $orderBy = null)
 * @method THEME[]    findAll()
 * @method THEME[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class THEMERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, THEME::class);
    }

    // /**
    //  * @return THEME[] Returns an array of THEME objects
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
    public function findOneBySomeField($value): ?THEME
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
