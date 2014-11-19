<?php

namespace ZIMZIM\CategoryProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $categoryproduct = $event->getData();
                $form = $event->getForm();
                $id_category = null;
                if ($categoryproduct && $categoryproduct->getId() !== null) {
                    $id_category = $categoryproduct->getId();
                    if ($id_category === 1) {
                        return;
                    }
                };
            }
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'ZIMZIM\CategoryProductBundle\Entity\CategoryProduct',
                'attr' => array(
                    'class' => 'zimzim-panel'
                ),
                'cascade_validation' => true
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zimzim_categoryproductbundle_categoryproducttype';
    }
}
