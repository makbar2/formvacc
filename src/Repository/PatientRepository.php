<?php

namespace App\Repository;

use App\Entity\Patient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Patient>
 *
 * @method Patient|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patient|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patient[]    findAll()
 * @method Patient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patient::class);
    }

    public function save(Patient $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Patient $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function searchPatientWithDOB($name, $dob)
    {
        /**
         * slight problem with this is that idk if with doctrine i can filter the data by dob then search it for the
         * names
         */
        $dob = str_replace("/","-",$dob);
        $dob = new \DateTime($dob);
        $qb = $this->createQueryBuilder("p")
            ->where("p.dob = :dob");
        $qb->andWhere(
            $qb->expr()->like("p.surname",":surname")
        );
        if(count($name)<1)
        {
            $qb->andWhere(
                $qb->expr()->like("p.firstName",":firstName")
            )
                ->setParameter("firstName",$name[1]);
        }
        $qb->setParameter("dob",$dob)
            ->setParameter("surname",$name[0]);
        return $qb->getQuery()->execute();
    }

    public function searchPatient($name)
    {
        $surname = $name;
        $qb = $this->createQueryBuilder("p");
        $qb->where(
            $qb->expr()->like("p.surname",":surname")
        );
        if(is_array($name))
        {
            $surname = $name[0];
            $firstName = $name[1];
            $qb->andWhere(
                $qb->expr()->like("p.firstName",":firstName")
            )
                ->setParameter("firstName",$firstName);
        }
        $qb->setParameter("surname",$surname);
        return $qb->getQuery()->execute();
    }



//    /**
//     * @return Patient[] Returns an array of Patient objects
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

//    public function findOneBySomeField($value): ?Patient
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
