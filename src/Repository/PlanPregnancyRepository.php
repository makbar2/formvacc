<?php

namespace App\Repository;

use App\Entity\PlanPregnancy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PlanPregnancy>
 *
 * @method PlanPregnancy|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanPregnancy|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanPregnancy[]    findAll()
 * @method PlanPregnancy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanPregnancyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanPregnancy::class);
    }

    public function save(PlanPregnancy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PlanPregnancy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PlanPregnancy[] Returns an array of PlanPregnancy objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PlanPregnancy
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
