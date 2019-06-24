<?php

namespace App\Repository;

use App\Entity\Developer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Developer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Developer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Developer[]    findAll()
 * @method Developer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeveloperRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Developer::class);
    }

    public function findAllProjectById($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT project.name FROM developer LEFT JOIN project_developer ON developer.id = project_developer.developer_id LEFT JOIN project ON project.id = project_developer.project_id WHERE developer.id = 
        '. $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute(['price' => 10]);

        // возвращает массив массивов (т.е. набор чистых данных)
        return $stmt->fetchAll();
    }

    // /**
    //  * @return Developer[] Returns an array of Developer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Developer
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
