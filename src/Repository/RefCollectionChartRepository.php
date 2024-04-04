<?php

namespace App\Repository;

use App\Entity\RefCollectionChart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefCollectionChart>
 *
 * @method RefCollectionChart|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefCollectionChart|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefCollectionChart[]    findAll()
 * @method RefCollectionChart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefCollectionChartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefCollectionChart::class);
    }

    public function save(RefCollectionChart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RefCollectionChart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RefCollectionChart[] Returns an array of RefCollectionChart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RefCollectionChart
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
