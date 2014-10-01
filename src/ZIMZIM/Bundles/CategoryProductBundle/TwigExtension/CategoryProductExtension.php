<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\TwigExtension;

use Doctrine\ORM\EntityManager;

class CategoryProductExtension extends \Twig_Extension
{
    protected $em;

    function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function getGlobals() {
        return array(
            'categoryproduct_extension_categories' => $this->em->getRepository('ZIMZIMBundlesCategoryProductBundle:Category')->findAll()
        );
    }

    public function getName()
    {
        return 'categoryproduct_extension';
    }
}