<?php

namespace Pnpc\Bundle\UserBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;


class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $option);
        $builder
		->add('colonne','choice', array('choices' =>array('scops' =>'Scops','cistude'=>'Cistude Europe','tortue'=>'Tortue Hermann','admin'=>'Administrateur')))
		;
    }

    public function getName()
    {
        return 'intern_baguebundle_requetetype';
    }
}
