<?php

namespace Pnpc\Bundle\ScopsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('theme')
            ->add('bagueur')
            ->add('pays')
            ->add('dept')
            ->add('localite')
            ->add('annee')
            ->add('num_semaine')
            ->add('date')
            ->add('lieudit')
            ->add('fs')
            ->add('hs')
            ->add('ds')
            ->add('heure')
            ->add('action')
            ->add('centre')
            ->add('bague')
            ->add('circ_repr')
            ->add('cond_repr')
            ->add('nom_scientifique')
            ->add('nom_vernaculaire')
            ->add('espece')
            ->add('sexe')
            ->add('age')
            ->add('lp')
            ->add('ad')
            ->add('ma')
            ->add('memo')
            ->add('secteur')
            ->add('bg')
            ->add('cs')
            ->add('pc')
            ->add('pi')
            ->add('mu')
            ->add('es')
            ->add('nf')
            ->add('sg')
            ->add('re')
            ->add('rr')
            ->add('ge')
            ->add('lat')
            ->add('lon')
            ->add('fi')
            ->add('fg')
            ->add('fd')
            ->add('classe')
            ->add('tl')
            ->add('lt')
            ->add('bp')
            ->add('tq')
            ->add('cr')
            ->add('x1')
            ->add('x2')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pnpc\Bundle\ScopsBundle\Entity\Info'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pnpc_bundle_scopsbundle_info';
    }
}
