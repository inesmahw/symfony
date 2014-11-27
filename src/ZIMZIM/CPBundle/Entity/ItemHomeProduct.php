<?php

namespace ZIMZIM\CPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ItemHomeProduct
 * @package ZIMZIM\CPBundle\Entity
 *
 * @ORM\Entity
 */
class ItemHomeProduct extends ItemHome
{
    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id", nullable=FALSE)
     *
     */
    protected $product;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
