<?php

namespace Pnpc\Bundle\CistudeEuropeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infos
 *
 * @ORM\Table(name="CistudeE_info")
 * @ORM\Entity(repositoryClass="Pnpc\Bundle\CistudeEuropeBundle\Entity\InfosRepository")
 */
class Infos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=50)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="code_insee", type="decimal")
     */
    private $codeInsee;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=50)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="lieudit", type="string", length=50)
     */
    private $lieudit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="protocole", type="string", length=50)
     */
    private $protocole;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", length=1)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="nebulosite", type="string", length=1)
     */
    private $nebulosite;

    /**
     * @var string
     *
     * @ORM\Column(name="precipitation", type="string", length=1)
     */
    private $precipitation;

    /**
     * @var string
     *
     * @ORM\Column(name="vent", type="string", length=1)
     */
    private $vent;

    /**
     * @var string
     *
     * @ORM\Column(name="visibilite", type="string", length=1)
     */
    private $visibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=1)
     */
    private $autre;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=50)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_capture", type="string", length=3)
     */
    private $modeCapture;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=1)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="num_piege", type="decimal")
     */
    private $numPiege;

    /**
     * @var string
     *
     * @ORM\Column(name="lat_wgs84", type="decimal")
     */
    private $latWgs84;

    /**
     * @var string
     *
     * @ORM\Column(name="long_wgs84", type="decimal")
     */
    private $longWgs84;

    /**
     * @var string
     *
     * @ORM\Column(name="num_session", type="decimal")
     */
    private $numSession;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_observation", type="time")
     */
    private $heureObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="observateur1", type="string", length=50)
     */
    private $observateur1;

    /**
     * @var string
     *
     * @ORM\Column(name="observateur2", type="string", length=50)
     */
    private $observateur2;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=50)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="code_marquage", type="string", length=50)
     */
    private $codeMarquage;

    /**
     * @var string
     *
     * @ORM\Column(name="num_marquage", type="decimal")
     */
    private $numMarquage;

    /**
     * @var string
     *
     * @ORM\Column(name="longueur_dossiere", type="decimal")
     */
    private $longueurDossiere;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur_dossiere", type="decimal")
     */
    private $largeurDossiere;

    /**
     * @var string
     *
     * @ORM\Column(name="hauteur_carapace", type="decimal")
     */
    private $hauteurCarapace;

    /**
     * @var string
     *
     * @ORM\Column(name="longueur_plastron", type="decimal")
     */
    private $longueurPlastron;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur_avant_plastron", type="decimal")
     */
    private $largeurAvantPlastron;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur_arriere_plastron", type="decimal")
     */
    private $largeurArrierePlastron;

    /**
     * @var string
     *
     * @ORM\Column(name="stries_visibles", type="string", length=1)
     */
    private $striesVisibles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_stries", type="integer")
     */
    private $nombreStries;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="decimal")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="stade", type="string", length=3)
     */
    private $stade;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_yeux", type="string", length=10)
     */
    private $couleurYeux;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_generale_dossiere", type="string", length=10)
     */
    private $couleurGeneraleDossiere;

    /**
     * @var string
     *
     * @ORM\Column(name="pts_traits_jaunes_dossiere", type="string", length=3)
     */
    private $ptsTraitsJaunesDossiere;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_generale_plastron", type="string", length=10)
     */
    private $couleurGeneralePlastron;

    /**
     * @var string
     *
     * @ORM\Column(name="taches_pts_plastron", type="string", length=10)
     */
    private $tachesPtsPlastron;

    /**
     * @var string
     *
     * @ORM\Column(name="corps_repart_densite_pts_traits", type="string", length=10)
     */
    private $corpsRepartDensitePtsTraits;

    /**
     * @var string
     *
     * @ORM\Column(name="corps_signes_particuliers", type="string", length=50)
     */
    private $corpsSignesParticuliers;

    /**
     * @var string
     *
     * @ORM\Column(name="traces_blessures", type="string", length=3)
     */
    private $tracesBlessures;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text")
     */
    private $observations;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Infos
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set codeInsee
     *
     * @param string $codeInsee
     * @return Infos
     */
    public function setCodeInsee($codeInsee)
    {
        $this->codeInsee = $codeInsee;

        return $this;
    }

    /**
     * Get codeInsee
     *
     * @return string 
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return Infos
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string 
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set lieudit
     *
     * @param string $lieudit
     * @return Infos
     */
    public function setLieudit($lieudit)
    {
        $this->lieudit = $lieudit;

        return $this;
    }

    /**
     * Get lieudit
     *
     * @return string 
     */
    public function getLieudit()
    {
        return $this->lieudit;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Infos
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set protocole
     *
     * @param string $protocole
     * @return Infos
     */
    public function setProtocole($protocole)
    {
        $this->protocole = $protocole;

        return $this;
    }

    /**
     * Get protocole
     *
     * @return string 
     */
    public function getProtocole()
    {
        return $this->protocole;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     * @return Infos
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set nebulosite
     *
     * @param string $nebulosite
     * @return Infos
     */
    public function setNebulosite($nebulosite)
    {
        $this->nebulosite = $nebulosite;

        return $this;
    }

    /**
     * Get nebulosite
     *
     * @return string 
     */
    public function getNebulosite()
    {
        return $this->nebulosite;
    }

    /**
     * Set precipitation
     *
     * @param string $precipitation
     * @return Infos
     */
    public function setPrecipitation($precipitation)
    {
        $this->precipitation = $precipitation;

        return $this;
    }

    /**
     * Get precipitation
     *
     * @return string 
     */
    public function getPrecipitation()
    {
        return $this->precipitation;
    }

    /**
     * Set vent
     *
     * @param string $vent
     * @return Infos
     */
    public function setVent($vent)
    {
        $this->vent = $vent;

        return $this;
    }

    /**
     * Get vent
     *
     * @return string 
     */
    public function getVent()
    {
        return $this->vent;
    }

    /**
     * Set visibilite
     *
     * @param string $visibilite
     * @return Infos
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return string 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }

    /**
     * Set autre
     *
     * @param string $autre
     * @return Infos
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string 
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Infos
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set modeCapture
     *
     * @param string $modeCapture
     * @return Infos
     */
    public function setModeCapture($modeCapture)
    {
        $this->modeCapture = $modeCapture;

        return $this;
    }

    /**
     * Get modeCapture
     *
     * @return string 
     */
    public function getModeCapture()
    {
        return $this->modeCapture;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Infos
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set numPiege
     *
     * @param string $numPiege
     * @return Infos
     */
    public function setNumPiege($numPiege)
    {
        $this->numPiege = $numPiege;

        return $this;
    }

    /**
     * Get numPiege
     *
     * @return string 
     */
    public function getNumPiege()
    {
        return $this->numPiege;
    }

    /**
     * Set latWgs84
     *
     * @param string $latWgs84
     * @return Infos
     */
    public function setLatWgs84($latWgs84)
    {
        $this->latWgs84 = $latWgs84;

        return $this;
    }

    /**
     * Get latWgs84
     *
     * @return string 
     */
    public function getLatWgs84()
    {
        return $this->latWgs84;
    }

    /**
     * Set longWgs84
     *
     * @param string $longWgs84
     * @return Infos
     */
    public function setLongWgs84($longWgs84)
    {
        $this->longWgs84 = $longWgs84;

        return $this;
    }

    /**
     * Get longWgs84
     *
     * @return string 
     */
    public function getLongWgs84()
    {
        return $this->longWgs84;
    }

    /**
     * Set numSession
     *
     * @param string $numSession
     * @return Infos
     */
    public function setNumSession($numSession)
    {
        $this->numSession = $numSession;

        return $this;
    }

    /**
     * Get numSession
     *
     * @return string 
     */
    public function getNumSession()
    {
        return $this->numSession;
    }

    /**
     * Set heureObservation
     *
     * @param \DateTime $heureObservation
     * @return Infos
     */
    public function setHeureObservation($heureObservation)
    {
        $this->heureObservation = $heureObservation;

        return $this;
    }

    /**
     * Get heureObservation
     *
     * @return \DateTime 
     */
    public function getHeureObservation()
    {
        return $this->heureObservation;
    }

    /**
     * Set observateur1
     *
     * @param string $observateur1
     * @return Infos
     */
    public function setObservateur1($observateur1)
    {
        $this->observateur1 = $observateur1;

        return $this;
    }

    /**
     * Get observateur1
     *
     * @return string 
     */
    public function getObservateur1()
    {
        return $this->observateur1;
    }

    /**
     * Set observateur2
     *
     * @param string $observateur2
     * @return Infos
     */
    public function setObservateur2($observateur2)
    {
        $this->observateur2 = $observateur2;

        return $this;
    }

    /**
     * Get observateur2
     *
     * @return string 
     */
    public function getObservateur2()
    {
        return $this->observateur2;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return Infos
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return string 
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set codeMarquage
     *
     * @param string $codeMarquage
     * @return Infos
     */
    public function setCodeMarquage($codeMarquage)
    {
        $this->codeMarquage = $codeMarquage;

        return $this;
    }

    /**
     * Get codeMarquage
     *
     * @return string 
     */
    public function getCodeMarquage()
    {
        return $this->codeMarquage;
    }

    /**
     * Set numMarquage
     *
     * @param string $numMarquage
     * @return Infos
     */
    public function setNumMarquage($numMarquage)
    {
        $this->numMarquage = $numMarquage;

        return $this;
    }

    /**
     * Get numMarquage
     *
     * @return string 
     */
    public function getNumMarquage()
    {
        return $this->numMarquage;
    }

    /**
     * Set longueurDossiere
     *
     * @param string $longueurDossiere
     * @return Infos
     */
    public function setLongueurDossiere($longueurDossiere)
    {
        $this->longueurDossiere = $longueurDossiere;

        return $this;
    }

    /**
     * Get longueurDossiere
     *
     * @return string 
     */
    public function getLongueurDossiere()
    {
        return $this->longueurDossiere;
    }

    /**
     * Set largeurDossiere
     *
     * @param string $largeurDossiere
     * @return Infos
     */
    public function setLargeurDossiere($largeurDossiere)
    {
        $this->largeurDossiere = $largeurDossiere;

        return $this;
    }

    /**
     * Get largeurDossiere
     *
     * @return string 
     */
    public function getLargeurDossiere()
    {
        return $this->largeurDossiere;
    }

    /**
     * Set hauteurCarapace
     *
     * @param string $hauteurCarapace
     * @return Infos
     */
    public function setHauteurCarapace($hauteurCarapace)
    {
        $this->hauteurCarapace = $hauteurCarapace;

        return $this;
    }

    /**
     * Get hauteurCarapace
     *
     * @return string 
     */
    public function getHauteurCarapace()
    {
        return $this->hauteurCarapace;
    }

    /**
     * Set longueurPlastron
     *
     * @param string $longueurPlastron
     * @return Infos
     */
    public function setLongueurPlastron($longueurPlastron)
    {
        $this->longueurPlastron = $longueurPlastron;

        return $this;
    }

    /**
     * Get longueurPlastron
     *
     * @return string 
     */
    public function getLongueurPlastron()
    {
        return $this->longueurPlastron;
    }

    /**
     * Set largeurAvantPlastron
     *
     * @param string $largeurAvantPlastron
     * @return Infos
     */
    public function setLargeurAvantPlastron($largeurAvantPlastron)
    {
        $this->largeurAvantPlastron = $largeurAvantPlastron;

        return $this;
    }

    /**
     * Get largeurAvantPlastron
     *
     * @return string 
     */
    public function getLargeurAvantPlastron()
    {
        return $this->largeurAvantPlastron;
    }

    /**
     * Set largeurArrierePlastron
     *
     * @param string $largeurArrierePlastron
     * @return Infos
     */
    public function setLargeurArrierePlastron($largeurArrierePlastron)
    {
        $this->largeurArrierePlastron = $largeurArrierePlastron;

        return $this;
    }

    /**
     * Get largeurArrierePlastron
     *
     * @return string 
     */
    public function getLargeurArrierePlastron()
    {
        return $this->largeurArrierePlastron;
    }

    /**
     * Set striesVisibles
     *
     * @param string $striesVisibles
     * @return Infos
     */
    public function setStriesVisibles($striesVisibles)
    {
        $this->striesVisibles = $striesVisibles;

        return $this;
    }

    /**
     * Get striesVisibles
     *
     * @return string 
     */
    public function getStriesVisibles()
    {
        return $this->striesVisibles;
    }

    /**
     * Set nombreStries
     *
     * @param integer $nombreStries
     * @return Infos
     */
    public function setNombreStries($nombreStries)
    {
        $this->nombreStries = $nombreStries;

        return $this;
    }

    /**
     * Get nombreStries
     *
     * @return integer 
     */
    public function getNombreStries()
    {
        return $this->nombreStries;
    }

    /**
     * Set poids
     *
     * @param string $poids
     * @return Infos
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set stade
     *
     * @param string $stade
     * @return Infos
     */
    public function setStade($stade)
    {
        $this->stade = $stade;

        return $this;
    }

    /**
     * Get stade
     *
     * @return string 
     */
    public function getStade()
    {
        return $this->stade;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Infos
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set couleurYeux
     *
     * @param string $couleurYeux
     * @return Infos
     */
    public function setCouleurYeux($couleurYeux)
    {
        $this->couleurYeux = $couleurYeux;

        return $this;
    }

    /**
     * Get couleurYeux
     *
     * @return string 
     */
    public function getCouleurYeux()
    {
        return $this->couleurYeux;
    }

    /**
     * Set couleurGeneraleDossiere
     *
     * @param string $couleurGeneraleDossiere
     * @return Infos
     */
    public function setCouleurGeneraleDossiere($couleurGeneraleDossiere)
    {
        $this->couleurGeneraleDossiere = $couleurGeneraleDossiere;

        return $this;
    }

    /**
     * Get couleurGeneraleDossiere
     *
     * @return string 
     */
    public function getCouleurGeneraleDossiere()
    {
        return $this->couleurGeneraleDossiere;
    }

    /**
     * Set ptsTraitsJaunesDossiere
     *
     * @param string $ptsTraitsJaunesDossiere
     * @return Infos
     */
    public function setPtsTraitsJaunesDossiere($ptsTraitsJaunesDossiere)
    {
        $this->ptsTraitsJaunesDossiere = $ptsTraitsJaunesDossiere;

        return $this;
    }

    /**
     * Get ptsTraitsJaunesDossiere
     *
     * @return string 
     */
    public function getPtsTraitsJaunesDossiere()
    {
        return $this->ptsTraitsJaunesDossiere;
    }

    /**
     * Set couleurGeneralePlastron
     *
     * @param string $couleurGeneralePlastron
     * @return Infos
     */
    public function setCouleurGeneralePlastron($couleurGeneralePlastron)
    {
        $this->couleurGeneralePlastron = $couleurGeneralePlastron;

        return $this;
    }

    /**
     * Get couleurGeneralePlastron
     *
     * @return string 
     */
    public function getCouleurGeneralePlastron()
    {
        return $this->couleurGeneralePlastron;
    }

    /**
     * Set tachesPtsPlastron
     *
     * @param string $tachesPtsPlastron
     * @return Infos
     */
    public function setTachesPtsPlastron($tachesPtsPlastron)
    {
        $this->tachesPtsPlastron = $tachesPtsPlastron;

        return $this;
    }

    /**
     * Get tachesPtsPlastron
     *
     * @return string 
     */
    public function getTachesPtsPlastron()
    {
        return $this->tachesPtsPlastron;
    }

    /**
     * Set corpsRepartDensitePtsTraits
     *
     * @param string $corpsRepartDensitePtsTraits
     * @return Infos
     */
    public function setCorpsRepartDensitePtsTraits($corpsRepartDensitePtsTraits)
    {
        $this->corpsRepartDensitePtsTraits = $corpsRepartDensitePtsTraits;

        return $this;
    }

    /**
     * Get corpsRepartDensitePtsTraits
     *
     * @return string 
     */
    public function getCorpsRepartDensitePtsTraits()
    {
        return $this->corpsRepartDensitePtsTraits;
    }

    /**
     * Set corpsSignesParticuliers
     *
     * @param string $corpsSignesParticuliers
     * @return Infos
     */
    public function setCorpsSignesParticuliers($corpsSignesParticuliers)
    {
        $this->corpsSignesParticuliers = $corpsSignesParticuliers;

        return $this;
    }

    /**
     * Get corpsSignesParticuliers
     *
     * @return string 
     */
    public function getCorpsSignesParticuliers()
    {
        return $this->corpsSignesParticuliers;
    }

    /**
     * Set tracesBlessures
     *
     * @param string $tracesBlessures
     * @return Infos
     */
    public function setTracesBlessures($tracesBlessures)
    {
        $this->tracesBlessures = $tracesBlessures;

        return $this;
    }

    /**
     * Get tracesBlessures
     *
     * @return string 
     */
    public function getTracesBlessures()
    {
        return $this->tracesBlessures;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return Infos
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }
}
