<?php

namespace SB\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScribvsGroup
 *
 * @ORM\Table(name="scribvs_group")
 * @ORM\Entity(repositoryClass="SB\GroupBundle\Repository\ScribvsGroupRepository")
 */
class ScribvsGroup
{
    /**
     * @ORM\ManyToOne(targetEntity="SB\GroupBundle\Entity\GroupCategory",cascade={"persist"},inversedBy="groups")
     * @ORM\JoinColumn(nullable=false)
     */

    //  Careful ! A group might only be in one category.
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="SB\UserBundle\Entity\User", mappedBy="groups")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="SB\PostBundle\Entity\Post", mappedBy="group")
     */
    private $posts;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;


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
     * Set name
     *
     * @param string $name
     *
     * @return ScribvsGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return ScribvsGroup
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set category
     *
     * @param \SB\GroupBundle\Entity\GroupCategory $category
     *
     * @return ScribvsGroup
     */
    public function setCategory(\SB\GroupBundle\Entity\GroupCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SB\GroupBundle\Entity\GroupCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \SB\UserBundle\Entity\User $user
     *
     * @return ScribvsGroup
     */
    public function addUser(\SB\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \SB\UserBundle\Entity\User $user
     */
    public function removeUser(\SB\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add post
     *
     * @param \SB\PostBundle\Entity\Post $post
     *
     * @return ScribvsGroup
     */
    public function addPost(\SB\PostBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \SB\PostBundle\Entity\Post $post
     */
    public function removePost(\SB\PostBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
