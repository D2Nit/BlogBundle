<?php
namespace D2Nit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_comment")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Article of this comment
     *
     * @var Article
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="identifier")
     */
    protected $article;
    
    /*
     * @ORM\ManyToOne(targetEntity="D2Nit\BlogBundle\Entity\User")
     */
    protected $author;

    /**
     * @return Article
     */
    public function getThread()
    {
        return $this->article;
    }

    /**
     * @param Article $thread
     * @return null
     */
    public function setThread(\D2Nit\BlogBundle\Entity\Article $thread)
    {
        $this->article = $thread;
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
     * Set article
     *
     * @param D2Nit\BlogBundle\Entity\Article $article
     */
    public function setArticle(\D2Nit\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
    }

    /**
     * Get article
     *
     * @return D2Nit\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}