<?php

namespace App\Repository;

use App\Entity\Task;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class TaskRepository
 * @package App\Repository
 * @author Jhoan López <jhoanlt19@gmail.com>
 * @version 1.0.0
 */
class TaskRepository extends EntityRepository
{
    public function taskList($data){
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->from("App:Task", "task")
            ->select("task.name");
        $result = $qb->getQuery()->getResult();

        return $result;
    }
}
