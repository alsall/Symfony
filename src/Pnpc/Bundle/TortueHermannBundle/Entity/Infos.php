<?php

namespace Pnpc\Bundle\TortueHermannBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infos
 *
 * @ORM\Table(name="TortueH_info")
 * @ORM\Entity(repositoryClass="Pnpc\Bundle\TortueHermannBundle\Entity\InfosRepository")
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
     * @ORM\Column(name="pays", type="string", length=50)
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
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
    private $heureFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="interruption", type="time")
     */
    private $interruption;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree_prospection", type="time")
     */
    private $dureeProspection;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", length=10)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="nebulosite", type="string", length=10)
     */
    private $nebulosite;

    /**
     * @var string
     *
     * @ORM\Column(name="precipitation", type="string", length=15)
     */
    private $precipitation;

    /**
     * @var string
     *
     * @ORM\Column(name="vent", type="string", length=15)
     */
    private $vent;

    /**
     * @var string
     *
     * @ORM\Column(name="visibilite", type="string", length=20)
     */
    private $visibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=50)
     */
    private $autre;

    /**
     * @var string
     *
     * @ORM\Column(name="observateur", type="string", length=50)
     */
    private $observateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_observation", type="time")
     */
    private $heureObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=50)
     */
    private $site;

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
     * @ORM\Column(name="num_marquage", type="string", length=6)
     */
    private $numMarquage;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=1)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=3)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="decimal")
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="decimal")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_age", type="string", length=10)
     */
    private $classeAge;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_decouverte", type="string", length=1)
     */
    private $modeDecouverte;

    /**
     * @var string
     *
     * @ORM\Column(name="type_activite", type="string", length=1)
     */
    private $typeActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="trace_blessures", type="string", length=2)
     */
    private $traceBlessures;

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
     * Set 5
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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Infos
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Infos
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set interruption
     *
     * @param \DateTime $interruption
     * @return Infos
     */
    public function setInterruption($interruption)
    {
        $this->interruption = $interruption;

        return $this;
    }

    /**
     * Get interruption
     *
     * @return \DateTime 
     */
    public function getInterruption()
    {
        return $this->interruption;
    }

    /**
     * Set dureeProspection
     *
     * @param \DateTime $dureeProspection
     * @return Infos
     */
    public function setDureeProspection($dureeProspection)
    {
        $this->dureeProspection = $dureeProspection;

        return $this;
    }

    /**
     * Get dureeProspection
     *
     * @return \DateTime 
     */
    public function getDureeProspection()
    {
        return $this->dureeProspection;
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
     * Set observateur
     *
     * @param string $observateur
     * @return Infos
     */
    public function setObservateur($observateur)
    {
        $this->observateur = $observateur;

        return $this;
    }

    /**
     * Get observateur
     *
     * @return string 
     */
    public function getObservateur()
    {
        return $this->observateur;
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
     * Set latWgs84
     *
     * @param string $latWgs84
     * @return Infos
     */
    public function setLatWgs84($latWgs84)
    {
        $this->latWsg84 = $latWgs84;

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
     * Set taille
     *
     * @param string $taille
     * @return Infos
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
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
     * Set classeAge
     *
     * @param string $classeAge
     * @return Infos
     */
    public function setClasseAge($classeAge)
    {
        $this->classeAge = $classeAge;

        return $this;
    }

    /**
     * Get classeAge
     *
     * @return string 
     */
    public function getClasseAge()
    {
        return $this->classeAge;
    }

    /**
     * Set modeDecouverte
     *
     * @param string $modeDecouverte
     * @return Infos
     */
    public function setModeDecouverte($modeDecouverte)
    {
        $this->modeDecouverte = $modeDecouverte;

        return $this;
    }

    /**
     * Get modeDecouverte
     *
     * @return string 
     */
    public function getModeDecouverte()
    {
        return $this->modeDecouverte;
    }

    /**
     * Set typeActivite
     *
     * @param string $typeActivite
     * @return Infos
     */
    public function setTypeActivite($typeActivite)
    {
        $this->typeActivite = $typeActivite;

        return $this;
    }

    /**
     * Get typeActivite
     *
     * @return string 
     */
    public function getTypeActivite()
    {
        return $this->typeActivite;
    }

    /**
     * Set traceBlessures
     *
     * @param string $traceBlessures
     * @return Infos
     */
    public function setTraceBlessures($traceBlessures)
    {
        $this->traceBlessures = $traceBlessures;

        return $this;
    }

    /**
     * Get traceBlessures
     *
     * @return string 
     */
    public function getTraceBlessures()
    {
        return $this->traceBlessures;
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
