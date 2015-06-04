<?php

namespace A2F\SofiaBundle\Form;

use A2F\SofiaBundle\Entity\DATABASERepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\SecurityContext;

class INCIDENTType extends AbstractType
{
    private $id;
    
    public function __construct($id) 
        {
        $this->sc = $id;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $id= $this->sc;
        $builder
            ->add("database",     "entity", array(
                "class" => "A2FSofiaBundle:DATABASE",
                "property" => "uniqueName",
                "query_builder" => function(DATABASERepository $er) use($id) 
                    {
                        return $er->getAllDataBasesByClient($id);
                                   
                    }
                   
                    
                ))
            ->add("description",        "textarea")
            ->add("Valider",              "submit")
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'A2F\SofiaBundle\Entity\INCIDENT'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'a2fsofiabundle_incident';
    }
}
