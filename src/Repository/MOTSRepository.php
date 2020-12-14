<?php

namespace App\Repository;

use App\Entity\MOTS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MOTS|null find($id, $lockMode = null, $lockVersion = null)
 * @method MOTS|null findOneBy(array $criteria, array $orderBy = null)
 * @method MOTS[]    findAll()
 * @method MOTS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MOTSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MOTS::class);
    }

    // /**
    //  * @return MOTS[] Returns an array of MOTS objects
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
    public function findOneBySomeField($value): ?MOTS
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
