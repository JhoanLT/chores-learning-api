<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Jhoan López <jhoanlt19@gmail.com>
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column( name="task_id", type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @ORM\Column(name="finish_date", type="datetime", nullable=true)
     */
    private $finishDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="id")
     * @ORM\JoinColumn(name="category_id_fk", referencedColumnName="category_id")
     */
    protected $categoryRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     * @ORM\JoinColumn(name="user_id_fk", referencedColumnName="user_id")
     */
    protected $userRel;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * @param $finishDate
     * @return $this
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryRel()
    {
        return $this->categoryRel;
    }

    /**
     * @param $categoryRel
     * @return $this
     */
    public function setCategoryRel($categoryRel)
    {
        $this->categoryRel = $categoryRel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserRel()
    {
        return $this->userRel;
    }

    /**
     * @param $userRel
     * @return $this
     */
    public function setUserRel($userRel)
    {
        $this->userRel = $userRel;
        return $this;
    }
}
