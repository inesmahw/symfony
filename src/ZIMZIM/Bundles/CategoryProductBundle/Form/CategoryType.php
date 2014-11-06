<?php

namespace ZIMZIM\Bundles\CategoryProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ZIMZIM\Bundles\CategoryProductBundle\Entity\CategoryRepository;

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('title')
            ->add('description')
            ->add('content', null, array('attr' => array('contenteditable' => true)))
            ->add('file')
            ->add('products', null, array('attr' => array('class' => 'select-multiple')));


        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $category = $event->getData();
                $form = $event->getForm();
                $id_category = null;
                if ($category && $category->getId() !== null) {
                    $id_category = $category->getId();
                    if($id_category === 1)return;
                }
                $form->
                    add(
                        'parent',
                        'entity',
                        array(
                            'class' => 'ZIMZIMBundlesCategoryProductBundle:Category',
                            'property' => 'name',
                            'query_builder' => function (CategoryRepository $er) use ($id_category){
                                    return $er->createQueryBuilder('c')
                                        ->where('c.id <> :category')
                                        ->setParameter('category', $id_category);
                                }
                        )
                    );
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
                'data_class' => 'ZIMZIM\Bundles\CategoryProductBundle\Entity\Category',
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
        return 'zimzim_bundles_categoryproductbundle_categorytype';
    }
}
