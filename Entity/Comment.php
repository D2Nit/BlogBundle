<?php
namespace D2Nit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_comment")
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
     */
    protected $article;

    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @param Article $thread
     * @return null
     */
    public function setThread(\D2Nit\BlogBundle\Entity\Article $thread)
    {
        $this->thread = $thread;
    }
}