<?php

namespace App\Repository;

use App\Entity\TYPEABONNEMENT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TYPEABONNEMENT|null find($id, $lockMode = null, $lockVersion = null)
 * @method TYPEABONNEMENT|null findOneBy(array $criteria, array $orderBy = null)
 * @method TYPEABONNEMENT[]    findAll()
 * @method TYPEABONNEMENT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TYPEABONNEMENTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TYPEABONNEMENT::class);
    }

    // /**
    //  * @return TYPEABONNEMENT[] Returns an array of TYPEABONNEMENT objects
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
    public function findOneBySomeField($value): ?TYPEABONNEMENT
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
