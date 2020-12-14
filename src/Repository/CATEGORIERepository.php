<?php

namespace App\Repository;

use App\Entity\CATEGORIE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CATEGORIE|null find($id, $lockMode = null, $lockVersion = null)
 * @method CATEGORIE|null findOneBy(array $criteria, array $orderBy = null)
 * @method CATEGORIE[]    findAll()
 * @method CATEGORIE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CATEGORIERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CATEGORIE::class);
    }

    // /**
    //  * @return CATEGORIE[] Returns an array of CATEGORIE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CATEGORIE
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
