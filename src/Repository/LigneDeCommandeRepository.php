<?php

namespace App\Repository;

use App\Entity\LigneDeCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LingeDeCommande>
 *
 * @method LingeDeCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method LingeDeCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method LingeDeCommande[]    findAll()
 * @method LingeDeCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LingeDeCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneDeCommande::class);
    }

//    /**
//     * @return LigneDeCommande[] Returns an array of LingeDeCommande objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LigneDeCommande
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
