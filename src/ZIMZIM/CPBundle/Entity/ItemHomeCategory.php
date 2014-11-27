<?php

namespace ZIMZIM\CPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ItemHomeCategory
 * @package ZIMZIM\CPBundle\Entity
 *
 * @ORM\Entity
 */
class ItemHomeCategory extends ItemHome
{
    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id", nullable=FALSE)
     *
     */
    protected $category;

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}
