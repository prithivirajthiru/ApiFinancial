<?php

namespace App\Repository;

use App\Entity\DataCollectionChart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DataCollectionChart>
 *
 * @method DataCollectionChart|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataCollectionChart|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataCollectionChart[]    findAll()
 * @method DataCollectionChart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataCollectionChartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataCollectionChart::class);
    }

    public function save(DataCollectionChart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DataCollectionChart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DataCollectionChart[] Returns an array of DataCollectionChart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DataCollectionChart
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
