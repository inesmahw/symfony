<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\Controller;


class HomeController extends MainController
{
    public function indexAction()
    {

        $entities = array();

        return $this->render(
            'ZIMZIMBundlesCategoryProductBundle:Home:index.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }
}