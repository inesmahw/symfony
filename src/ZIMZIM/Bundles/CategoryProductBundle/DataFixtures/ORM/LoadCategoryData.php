<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ZIMZIM\Bundles\CategoryProductBundle\Entity\Category;


class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $om)
    {
        $zimzim = new Category();
        $zimzim->setName('Produit');
        $om->persist($zimzim);
        $this->addReference('produit', $zimzim);

        $zimzim = new Category();
        $zimzim->setName('Intérieur');
        $zimzim->setParent($this->getReference('produit'));
        $om->persist($zimzim);
        $this->addReference('interieur', $zimzim);

        $zimzim = new Category();
        $zimzim->setName('Extérieur');
        $zimzim->setParent($this->getReference('produit'));
        $om->persist($zimzim);
        $this->addReference('exterieur', $zimzim);

        $om->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}