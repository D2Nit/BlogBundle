<?php

namespace D2Nit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_category")
 */
class Category
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=64)
	 */
	protected $name;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $description;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Article")
	 */
	protected $articles;
	
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add articles
     *
     * @param D2Nit\BlogBundle\Entity\Article $articles
     */
    public function addArticles(\D2Nit\BlogBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    }

    /**
     * Get articles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}