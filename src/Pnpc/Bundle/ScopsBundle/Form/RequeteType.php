<?php

namespace Pnpc\Bundle\ScopsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RequeteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('colonne','choice', array('choices' =>array('bague' =>'Bague','bagueur'=>'Bagueur','lieudit'=>'Lieudit','annee'=>'Annee')))
		->add('mot','text',array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pnpc\Bundle\ScopsBundle\Entity\Info'
        ));
    }

    public function getName()
    {
        return 'intern_baguebundle_requetetype';
    }
}
