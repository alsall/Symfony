<?php

namespace Pnpc\Bundle\CistudeEuropeBundle\Form;

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
            ->add('temperature')
            ->add('nebulosite')
            ->add('precipitation')
            ->add('vent')
            ->add('visibilite')
            ->add('autre')
            ->add('site')
            ->add('modeCapture')
            ->add('action')
            ->add('numPiege')
            ->add('latWgs84')
            ->add('longWgs84')
            ->add('numSession')
            ->add('heureObservation')
            ->add('observateur1')
            ->add('observateur2')
            ->add('espece')
            ->add('codeMarquage')
            ->add('numMarquage')
            ->add('longueurDossiere')
            ->add('largeurDossiere')
            ->add('hauteurCarapace')
            ->add('longueurPlastron')
            ->add('largeurAvantPlastron')
            ->add('largeurArrierePlastron')
            ->add('striesVisibles')
            ->add('nombreStries')
            ->add('poids')
            ->add('stade')
            ->add('sexe')
            ->add('couleurYeux')
            ->add('couleurGeneraleDossiere')
            ->add('ptsTraitsJaunesDossiere')
            ->add('couleurGeneralePlastron')
            ->add('tachesPtsPlastron')
            ->add('corpsRepartDensitePtsTraits')
            ->add('corpsSignesParticuliers')
            ->add('tracesBlessures')
            ->add('observations')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pnpc\Bundle\CistudeEuropeBundle\Entity\Infos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pnpc_bundle_cistudeeuropebundle_infos';
    }
}
