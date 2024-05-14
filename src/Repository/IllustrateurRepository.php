<?php

namespace App\Repository;

use App\Entity\Illustrateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Illustrateur>
 *
 * @method Illustrateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Illustrateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Illustrateur[]    findAll()
 * @method Illustrateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IllustrateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Illustrateur::class);
    }

//    /**
//     * @return Illustrateur[] Returns an array of Illustrateur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Illustrateur
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
