<?php

namespace App\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TaskController
 * This container the all task methods
 *
 * @package App\Controller
 * @author Jhoan López <jhoanlt19@gmail.com>
 * @Rest\Route("/api/v1")
 */
class TaskController extends FOSRestController {
    /**
     * @Rest\Post("/task/list", name="task_list")
     */
    public function listTask(Request $request)
    {
        $em = $this->getDoctrine();
        $data = json_decode($request->getContent(), true);
        return $em->getRepository("App:Task")->taskList($data);
    }
}
