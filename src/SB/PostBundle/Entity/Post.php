<?php

namespace SB\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="SB\PostBundle\Repository\PostRepository")
 */
class Post
{
    /**
    * @ORM\ManyToOne(targetEntity="SB\UserBundle\Entity\User",cascade={"persist"},inversedBy="posts")
    * @ORM\JoinColumn(nullable=false)
    */
    private $author;

    /**
    * @ORM\ManyToOne(targetEntity="SB\GroupBundle\Entity\ScribvsGroup",cascade={"persist"},inversedBy="posts")
    * @ORM\JoinColumn(nullable=false)
    */
    private $group;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="sticky", type="boolean")
     */

    private $sticky;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string")
     */
    private $authorName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime")
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var array
     *
     * @ORM\Column(name="images", type="array", nullable=true)
     */
    private $images;

    public function __construct()
    {

      $this->postDate = new \Datetime();

    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     *
     * @return Post
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set images
     *
     * @param array $images
     *
     * @return Post
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set sticky
     *
     * @param boolean $sticky
     *
     * @return Post
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return boolean
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set authorName
     *
     * @param string $authorName
     *
     * @return Post
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * Get authorName
     *
     * @return string
     */
    public function getAuthorName()
    {
        if(isset($this->authorName))return $this->authorName;
        else return $this->author->getWholeName();
    }

    /**
     * Set author
     *
     * @param \SB\PostBundle\Entity\Post $author
     *
     * @return Post
     */
    public function setAuthor(\SB\UserBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \SB\PostBundle\Entity\Post
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set group
     *
     * @param \SB\GroupBundle\Entity\ScribvsGroup $group
     *
     * @return Post
     */
    public function setGroup(\SB\GroupBundle\Entity\ScribvsGroup $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \SB\GroupBundle\Entity\ScribvsGroup
     */
    public function getGroup()
    {
        return $this->group;
    }
}
