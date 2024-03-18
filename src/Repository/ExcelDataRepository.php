<?php

namespace App\Repository;

use App\Entity\ExcelData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExcelData>
 *
 * @method ExcelData|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExcelData|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExcelData[]    findAll()
 * @method ExcelData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcelDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExcelData::class);
    }

    /**
     * Récupère les données ExcelData filtrées par plage de dates.
     *
     * @param \DateTimeInterface $startDate Date de début de la plage
     * @param \DateTimeInterface $endDate   Date de fin de la plage
     *
     * @return ExcelData[] Les données ExcelData filtrées
     */
    public function findByDateRange(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateEvenement >= :start_date')
            ->andWhere('e.dateDernierEvenement <= :end_date')
            ->setParameter('start_date', $startDate)
            ->setParameter('end_date', $endDate)
            ->getQuery()
            ->getResult();
    }
}
