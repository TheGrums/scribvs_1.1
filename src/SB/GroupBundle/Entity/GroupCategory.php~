<?php

namespace SB\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupCategory
 *
 * @ORM\Table(name="group_category")
 * @ORM\Entity(repositoryClass="SB\GroupBundle\Repository\GroupCategoryRepository")
 */
class GroupCategory
{
    /**
     * @ORM\OneToMany(targetEntity="SB\GroupBundle\Entity\ScribvsGroup", mappedBy="category")
     */
    private $groups;

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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;


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
     * @return GroupCategory
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
     * Constructor
     */
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add group
     *
     * @param \SB\GroupBundle\Entity\ScribvsGroup $group
     *
     * @return GroupCategory
     */
    public function addGroup(\SB\GroupBundle\Entity\ScribvsGroup $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \SB\GroupBundle\Entity\ScribvsGroup $group
     */
    public function removeGroup(\SB\GroupBundle\Entity\ScribvsGroup $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
