<?php

namespace ZIMZIM\CPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ZIMZIM\CategoryProductBundle\Doctrine\ProductManager;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('feature')
            ->add('listing')
            ->add('specification');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zimzim_cpbundle_producttype';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'zimzim_categoryproductbundle_producttype';
    }
}
