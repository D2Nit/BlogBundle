<?php

namespace D2Nit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_article")
 */
class Article
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	protected $title;
	
	/*
	 * @ORM\Column(type="text")
	 */
	protected $content;
	
	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $commentAllowed;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Category")
	 */
	protected $categories;
	
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set commentAllowed
     *
     * @param boolean $commentAllowed
     */
    public function setCommentAllowed($commentAllowed)
    {
        $this->commentAllowed = $commentAllowed;
    }

    /**
     * Get commentAllowed
     *
     * @return boolean 
     */
    public function getCommentAllowed()
    {
        return $this->commentAllowed;
    }

    /**
     * Add categories
     *
     * @param D2Nit\BlogBundle\Entity\Category $categories
     */
    public function addCategories(\D2Nit\BlogBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}