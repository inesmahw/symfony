<?php

namespace ZIMZIM\CPBundle\Entity;

use ZIMZIM\CategoryProductBundle\Model\ItemHome as baseItemHome;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="ItemHomeRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"ItemHomeCategory" = "ItemHomeCategory", "ItemHomeProduct" = "ItemHomeProduct"})
 *
 */
abstract class ItemHome extends baseItemHome
{
}
