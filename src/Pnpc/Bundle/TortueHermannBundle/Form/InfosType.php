<?php

namespace Pnpc\Bundle\TortueHermannBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InfosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pays')
            ->add('codeInsee')
            ->add('localite')
            ->add('lieudit')
            ->add('date')
            ->add('protocole')
            ->add('heureDebut')
            ->add('heureFin')
            ->add('interruption')
            ->add('dureeProspection')
            ->add('temperature')
            ->add('nebulosite')
            ->add('precipitation')
            ->add('vent')
            ->add('visibilite')
            ->add('autre')
            ->add('observateur')
            ->add('heureObservation')
            ->add('site')
            ->add('latWgs84')
            ->add('longWgs84')
            ->add('numMarquage')
            ->add('action')
            ->add('sexe')
            ->add('taille')
            ->add('poids')
            ->add('classeAge')
            ->add('modeDecouverte')
            ->add('typeActivite')
            ->add('traceBlessures')
            ->add('observations')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pnpc\Bundle\TortueHermannBundle\Entity\Infos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pnpc_bundle_tortuehermannbundle_infos';
    }
}
