<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ConstraintMaxEntityHomePage extends Constraint
{
    public $message = 'constaint.maxentityhomepage';

    public function validatedBy()
    {
        return 'maxentityhomepage';
    }
}