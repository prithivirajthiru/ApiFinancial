<?php

namespace App\Repository;

use App\Entity\RefAttachmentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefAttachmentType>
 *
 * @method RefAttachmentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefAttachmentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefAttachmentType[]    findAll()
 * @method RefAttachmentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefAttachmentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefAttachmentType::class);
    }

    public function save(RefAttachmentType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RefAttachmentType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RefAttachmentType[] Returns an array of RefAttachmentType objects
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

//    public function findOneBySomeField($value): ?RefAttachmentType
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
