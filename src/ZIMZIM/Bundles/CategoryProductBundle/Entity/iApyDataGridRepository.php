<?php


namespace ZIMZIM\Bundles\CategoryProductBundle\Entity;

interface iApyDataGridRepository{

    /** @return source */
    public function getList($source);

}