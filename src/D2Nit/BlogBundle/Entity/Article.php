<?php

namespace D2Nit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_article")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Article extends BaseThread
{	
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	protected $title;
	
	/*
	 * @ORM\Column(type="text")
	 */
	protected $content;
		
	/**
	 * 
	 * @ORM\ManyToOne(targetEntity="User")
	 */
	protected $author;
	
	
	
	public function __toString()
	{
		return $this->title;
	}
	
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function setContent($content)
    {
    	$this->content = $content;
    }
    
    public function getContent()
    {
    	return $this->content;
    }

    /**
     * Set author
     *
     * @param D2Nit\BlogBundle\Entity\User $author
     */
    public function setAuthor(\D2Nit\BlogBundle\Entity\User $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return D2Nit\BlogBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getIsCommentable()
    {
    	return $this->isCommentable();
    }
}