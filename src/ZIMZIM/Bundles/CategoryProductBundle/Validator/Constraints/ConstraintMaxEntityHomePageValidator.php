<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\Validator\Constraints;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ConstraintMaxEntityHomePageValidator extends ConstraintValidator
{
    private $entityManager;
    private $maxHomePage;

    public function __construct(EntityManager $entityManager, $maxHomePage)
    {
        $this->entityManager = $entityManager;
        $this->maxHomePage = $maxHomePage;
    }

    public function validate($value, Constraint $constraint)
    {
        if ($value === true) {

            $countProduct = $this->entityManager->getRepository('ZIMZIMBundlesCategoryProductBundle:Product')->findBy(
                array('homepage' => true)
            );

            $countCategory = $this->entityManager->getRepository('ZIMZIMBundlesCategoryProductBundle:Category')->findBy(
                array('homepage' => true)
            );

            $nbHomePage = intval($countCategory + $countProduct);

            if ($nbHomePage >= $this->maxHomePage) {
                $this->context->addViolation($constraint->message, array('%number%' => $nbHomePage));
            }
        }
    }
}