<?php

namespace Pnpc\Bundle\ScopsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModifierType extends InfoType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		parent::buildForm($builder, $options);
        
    }

    public function getName()
    {
        return 'intern_baguebundle_modifiertype';
    }
}
