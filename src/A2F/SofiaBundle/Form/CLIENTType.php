<?php

namespace A2F\SofiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CLIENTType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName')
            ->add('logo')
            ->add('address')
            ->add('postCode')
            ->add('town')
            ->add('phoneNumber')
            ->add('live')
            ->add('notes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'A2F\SofiaBundle\Entity\CLIENT'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'a2f_sofiabundle_client';
    }
}
