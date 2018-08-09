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
        $qb->from("App:Task", "t")
            ->select("t");
        /**
         * @var $results Task[]
         */
        $results = $qb->getQuery()->getResult();

        $tasks = [];

        foreach($results as $task) {
            $tasks[] = [
                'code' => $task->getId(),
                'name' => $task->getName(),
            ];
        }
        return [
            'status_code' => 201,
            'data' => $tasks,
        ];
    }
}
