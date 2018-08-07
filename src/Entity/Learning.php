<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Jhoan López <jhoanlt19@gmail.com>
 * @ORM\Entity(repositoryClass="App\Repository\LearningRepository")
 */
class Learning
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="learning_id", type="integer", unique=true, nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(name="learning", type="string", length=250, nullable=true)
     */
    private $learning;

    /**
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     * @ORM\JoinColumn(name="user_id_fk", referencedColumnName="user_id")
     */
    protected $userRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="id")
     * @ORM\JoinColumn(name="category_id_fk", referencedColumnName="category_id")
     */
    protected $categoryRel;


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
    public function getLearning()
    {
        return $this->learning;
    }

    /**
     * @param $learning
     * @return $this
     */
    public function setLearning($learning)
    {
        $this->learning = $learning;
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
}
