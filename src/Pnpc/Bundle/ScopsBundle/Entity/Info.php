<?php

namespace Pnpc\Bundle\ScopsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/*use Avro\CsvBundle\Annotation\ImportExclude;*/

/**
 * Info
 *
 * @ORM\Table(name="all_info")
 * @ORM\Entity(repositoryClass="Pnpc\Bundle\ScopsBundle\Entity\InfoRepository")
 */
class Info
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
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=10)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="bagueur", type="string", length=50)
     */
    private $bagueur;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=2)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=2)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=20)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=4)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_semaine", type="integer")
     */
    private $num_semaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="lieudit", type="string", length=20)
     */
    private $lieudit;

    /**
     * @var string
     *
     * @ORM\Column(name="fs", type="string", length=6)
     */
    private $fs;

    /**
     * @var string
     *
     * @ORM\Column(name="hs", type="string", length=6)
     */
    private $hs;

    /**
     * @var string
     *
     * @ORM\Column(name="ds", type="string", length=6)
     */
    private $ds;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=true)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=1)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="centre", type="string", length=3)
     */
    private $centre;

    /**
     * @var string
     *
     * @ORM\Column(name="bague", type="string", length=10)
     */
    private $bague;

    /**
     * @var string
     *
     * @ORM\Column(name="circ_repr", type="string", length=2, nullable=false)
     */
    private $circ_repr;

    /**
     * @var string
     *
     * @ORM\Column(name="cond_repr", type="string", length=1, nullable=false)
     */
    private $cond_repr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_scientifique", type="string", length=50)
     */
    private $nom_scientifique;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vernaculaire", type="string", length=50)
     */
    private $nom_vernaculaire;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=6, nullable=false)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=3, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=5, nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="lp", type="string", length=8)
     */
    private $lp;

    /**
     * @var string
     *
     * @ORM\Column(name="ad", type="string", length=1, nullable=true)
     */
    private $ad;

    /**
     * @var string
     *
     * @ORM\Column(name="ma", type="string", length=8)
     */
    private $ma;

    /**
     * @var string
     *
     * @ORM\Column(name="memo", type="text", nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=10, nullable=true)
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="bg", type="string", length=50, nullable=true)
     */
    private $bg;

    /**
     * @var string
     *
     * @ORM\Column(name="cs", type="string", length=2, nullable=true)
     */
    private $cs;

    /**
     * @var string
     *
     * @ORM\Column(name="pc", type="string", length=1, nullable=true)
     */
    private $pc;

    /**
     * @var string
     *
     * @ORM\Column(name="pi", type="string", length=1, nullable=true)
     */
    private $pi;

    /**
     * @var string
     *
     * @ORM\Column(name="mu", type="string", length=1, nullable=true)
     */
    private $mu;

    /**
     * @var string
     *
     * @ORM\Column(name="es", type="string", length=1, nullable=true)
     */
    private $es;

    /**
     * @var string
     *
     * @ORM\Column(name="nf", type="string", length=5, nullable=true)
     */
    private $nf;

    /**
     * @var string
     *
     * @ORM\Column(name="sg", type="string", length=50, nullable=true)
     */
    private $sg;

    /**
     * @var string
     *
     * @ORM\Column(name="re", type="string", length=1, nullable=true)
     */
    private $re;

    /**
     * @var string
     *
     * @ORM\Column(name="rr", type="string", length=5, nullable=true)
     */
    private $rr;

    /**
     * @var string
     *
     * @ORM\Column(name="ge", type="string", length=20, nullable=true)
     */
    private $ge;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=15, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="string", length=15, nullable=true)
     */
    private $lon;

    /**
     * @var string
     *
     * @ORM\Column(name="fi", type="string", length=6, nullable=true)
     */
    private $fi;

    /**
     * @var string
     *
     * @ORM\Column(name="fg", type="string", length=6, nullable=true)
     */
    private $fg;

    /**
     * @var string
     *
     * @ORM\Column(name="fd", type="string", length=6, nullable=true)
     */
    private $fd;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=2, nullable=true)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="tl", type="string", length=2, nullable=true)
     */
    private $tl;

    /**
     * @var string
     *
     * @ORM\Column(name="lt", type="string", length=6, nullable=true)
     */
    private $lt;

    /**
     * @var string
     *
     * @ORM\Column(name="bp", type="string", length=8, nullable=true)
     */
    private $bp;

    /**
     * @var string
     *
     * @ORM\Column(name="tq", type="string", length=5, nullable=true)
     */
    private $tq;

    /**
     * @var string
     *
     * @ORM\Column(name="cr", type="string", length=3, nullable=true)
     */
    private $cr;

    /**
     * @var string
     *
     * @ORM\Column(name="x1", type="string", length=6, nullable=true)
     */
    private $x1;

    /**
     * @var string
     *
     * @ORM\Column(name="x2", type="string", length=6, nullable=true)
     */
    private $x2;

	public function __construct()
	{
		$this->dept = 83;
		$this->pays = 'FR';
		$this->bagueur = 'MOYON, Claude';
		$this->date = new \Datetime();
		$this->theme = 'HALTE';
		$this->localite = 'HYERES';
		$this->lieudit = 'OUSTAOU';
		$this->centre = 'FRP';
		$this->annee = date('Y');
		//$this->heure = date('');
	
	}

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
     * Set numero
     *
     * @param string $numero
     * @return Info
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Info
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set bagueur
     *
     * @param string $bagueur
     * @return Info
     */
    public function setBagueur($bagueur)
    {
        $this->bagueur = $bagueur;
    
        return $this;
    }

    /**
     * Get bagueur
     *
     * @return string 
     */
    public function getBagueur()
    {
        return $this->bagueur;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Info
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
     * Set dept
     *
     * @param string $dept
     * @return Info
     */
    public function setDept($dept)
    {
        $this->dept = $dept;
    
        return $this;
    }

    /**
     * Get dept
     *
     * @return string 
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return Info
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
     * Set annee
     *
     * @param string $annee
     * @return Info
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set num_semaine
     *
     * @param integer $num_semaine
     * @return Info
     */
    public function setNumSemaine($num_semaine)
    {
        $this->num_semaine = $num_semaine;
    
        return $this;
    }

    /**
     * Get num_semaine
     *
     * @return integer 
     */
    public function getNumSemaine()
    {
        return $this->num_semaine;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Info
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
     * Set lieudit
     *
     * @param string $lieudit
     * @return Info
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
     * Set fs
     *
     * @param string $fs
     * @return Info
     */
    public function setFs($fs)
    {
        $this->fs = $fs;
    
        return $this;
    }

    /**
     * Get fs
     *
     * @return string 
     */
    public function getFs()
    {
        return $this->fs;
    }

    /**
     * Set hs
     *
     * @param string $hs
     * @return Info
     */
    public function setHs($hs)
    {
        $this->hs = $hs;
    
        return $this;
    }

    /**
     * Get hs
     *
     * @return string 
     */
    public function getHs()
    {
        return $this->hs;
    }

    /**
     * Set ds
     *
     * @param string $ds
     * @return Info
     */
    public function setDs($ds)
    {
        $this->ds = $ds;
    
        return $this;
    }

    /**
     * Get ds
     *
     * @return string 
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Info
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    
        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Info
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
     * Set centre
     *
     * @param string $centre
     * @return Info
     */
    public function setCentre($centre)
    {
        $this->centre = $centre;
    
        return $this;
    }

    /**
     * Get centre
     *
     * @return string 
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set bague
     *
     * @param string $bague
     * @return Info
     */
    public function setBague($bague)
    {
        $this->bague = $bague;
    
        return $this;
    }

    /**
     * Get bague
     *
     * @return string 
     */
    public function getBague()
    {
        return $this->bague;
    }

    /**
     * Set circ_repr
     *
     * @param string $circRepr
     * @return Info
     */
    public function setCircRepr($circRepr)
    {
        $this->circ_repr = $circRepr;
    
        return $this;
    }

    /**
     * Get circ_repr
     *
     * @return string 
     */
    public function getCircRepr()
    {
        return $this->circ_repr;
    }

    /**
     * Set cond_repr
     *
     * @param string $condRepr
     * @return Info
     */
    public function setCondRepr($cond_repr)
    {
        $this->cond_repr = $cond_repr;
    
        return $this;
    }

    /**
     * Get cond_repr
     *
     * @return string 
     */
    public function getCondRepr()
    {
        return $this->cond_repr;
    }

    /**
     * Set nom_scientifique
     *
     * @param string $nomScientifique
     * @return Info
     */
    public function setNomScientifique($nomScientifique)
    {
        $this->nom_scientifique = $nomScientifique;
    
        return $this;
    }

    /**
     * Get nom_scientifique
     *
     * @return string 
     */
    public function getNomScientifique()
    {
        return $this->nom_scientifique;
    }

    /**
     * Set nom_vernaculaire
     *
     * @param string $nomVernaculaire
     * @return Info
     */
    public function setNomVernaculaire($nomVernaculaire)
    {
        $this->nom_vernaculaire = $nomVernaculaire;
    
        return $this;
    }

    /**
     * Get nom_vernaculaire
     *
     * @return string 
     */
    public function getNomVernaculaire()
    {
        return $this->nom_vernaculaire;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return Info
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
     * Set sexe
     *
     * @param string $sexe
     * @return Info
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
     * Set age
     *
     * @param string $age
     * @return Info
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set lp
     *
     * @param string $lp
     * @return Info
     */
    public function setLp($lp)
    {
        $this->lp = $lp;
    
        return $this;
    }

    /**
     * Get lp
     *
     * @return string 
     */
    public function getLp()
    {
        return $this->lp;
    }

    /**
     * Set ad
     *
     * @param string $ad
     * @return Info
     */
    public function setAd($ad)
    {
        $this->ad = $ad;
    
        return $this;
    }

    /**
     * Get ad
     *
     * @return string 
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set ma
     *
     * @param string $ma
     * @return Info
     */
    public function setMa($ma)
    {
        $this->ma = $ma;
    
        return $this;
    }

    /**
     * Get ma
     *
     * @return string 
     */
    public function getMa()
    {
        return $this->ma;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return Info
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    
        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     * @return Info
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    
        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set bg
     *
     * @param string $bg
     * @return Info
     */
    public function setBg($bg)
    {
        $this->bg = $bg;
    
        return $this;
    }

    /**
     * Get bg
     *
     * @return string 
     */
    public function getBg()
    {
        return $this->bg;
    }

    /**
     * Set cs
     *
     * @param string $cs
     * @return Info
     */
    public function setCs($cs)
    {
        $this->cs = $cs;
    
        return $this;
    }

    /**
     * Get cs
     *
     * @return string 
     */
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * Set pc
     *
     * @param string $pc
     * @return Info
     */
    public function setPc($pc)
    {
        $this->pc = $pc;
    
        return $this;
    }

    /**
     * Get pc
     *
     * @return string 
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set pi
     *
     * @param string $pi
     * @return Info
     */
    public function setPi($pi)
    {
        $this->pi = $pi;
    
        return $this;
    }

    /**
     * Get pi
     *
     * @return string 
     */
    public function getPi()
    {
        return $this->pi;
    }

    /**
     * Set mu
     *
     * @param string $mu
     * @return Info
     */
    public function setMu($mu)
    {
        $this->mu = $mu;
    
        return $this;
    }

    /**
     * Get mu
     *
     * @return string 
     */
    public function getMu()
    {
        return $this->mu;
    }

    /**
     * Set es
     *
     * @param string $es
     * @return Info
     */
    public function setEs($es)
    {
        $this->es = $es;
    
        return $this;
    }

    /**
     * Get es
     *
     * @return string 
     */
    public function getEs()
    {
        return $this->es;
    }

    /**
     * Set nf
     *
     * @param string $nf
     * @return Info
     */
    public function setNf($nf)
    {
        $this->nf = $nf;
    
        return $this;
    }

    /**
     * Get nf
     *
     * @return string 
     */
    public function getNf()
    {
        return $this->nf;
    }

    /**
     * Set sg
     *
     * @param string $sg
     * @return Info
     */
    public function setSg($sg)
    {
        $this->sg = $sg;
    
        return $this;
    }

    /**
     * Get sg
     *
     * @return string 
     */
    public function getSg()
    {
        return $this->sg;
    }

    /**
     * Set re
     *
     * @param string $re
     * @return Info
     */
    public function setRe($re)
    {
        $this->re = $re;
    
        return $this;
    }

    /**
     * Get re
     *
     * @return string 
     */
    public function getRe()
    {
        return $this->re;
    }

    /**
     * Set rr
     *
     * @param string $rr
     * @return Info
     */
    public function setRr($rr)
    {
        $this->rr = $rr;
    
        return $this;
    }

    /**
     * Get rr
     *
     * @return string 
     */
    public function getRr()
    {
        return $this->rr;
    }

    /**
     * Set ge
     *
     * @param string $ge
     * @return Info
     */
    public function setGe($ge)
    {
        $this->ge = $ge;
    
        return $this;
    }

    /**
     * Get ge
     *
     * @return string 
     */
    public function getGe()
    {
        return $this->ge;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Info
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param string $lon
     * @return Info
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
    
        return $this;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set fi
     *
     * @param string $fi
     * @return Info
     */
    public function setFi($fi)
    {
        $this->fi = $fi;
    
        return $this;
    }

    /**
     * Get fi
     *
     * @return string 
     */
    public function getFi()
    {
        return $this->fi;
    }

    /**
     * Set fg
     *
     * @param string $fg
     * @return Info
     */
    public function setFg($fg)
    {
        $this->fg = $fg;
    
        return $this;
    }

    /**
     * Get fg
     *
     * @return string 
     */
    public function getFg()
    {
        return $this->fg;
    }

    /**
     * Set fd
     *
     * @param string $fd
     * @return Info
     */
    public function setFd($fd)
    {
        $this->fd = $fd;
    
        return $this;
    }

    /**
     * Get fd
     *
     * @return string 
     */
    public function getFd()
    {
        return $this->fd;
    }

    /**
     * Set classe
     *
     * @param string $classe
     * @return Info
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return string 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set tl
     *
     * @param string $tl
     * @return Info
     */
    public function setTl($tl)
    {
        $this->tl = $tl;
    
        return $this;
    }

    /**
     * Get tl
     *
     * @return string 
     */
    public function getTl()
    {
        return $this->tl;
    }

    /**
     * Set lt
     *
     * @param string $lt
     * @return Info
     */
    public function setLt($lt)
    {
        $this->lt = $lt;
    
        return $this;
    }

    /**
     * Get lt
     *
     * @return string 
     */
    public function getLt()
    {
        return $this->lt;
    }

    /**
     * Set bp
     *
     * @param string $bp
     * @return Info
     */
    public function setBp($bp)
    {
        $this->bp = $bp;
    
        return $this;
    }

    /**
     * Get bp
     *
     * @return string 
     */
    public function getBp()
    {
        return $this->bp;
    }

    /**
     * Set tq
     *
     * @param string $tq
     * @return Info
     */
    public function setTq($tq)
    {
        $this->tq = $tq;
    
        return $this;
    }

    /**
     * Get tq
     *
     * @return string 
     */
    public function getTq()
    {
        return $this->tq;
    }

    /**
     * Set cr
     *
     * @param string $cr
     * @return Info
     */
    public function setCr($cr)
    {
        $this->cr = $cr;
    
        return $this;
    }

    /**
     * Get cr
     *
     * @return string 
     */
    public function getCr()
    {
        return $this->cr;
    }

    /**
     * Set x1
     *
     * @param string $x1
     * @return Info
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;
    
        return $this;
    }

    /**
     * Get x1
     *
     * @return string 
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * Set x2
     *
     * @param string $x2
     * @return Info
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;
    
        return $this;
    }

    /**
     * Get x2
     *
     * @return string 
     */
    public function getX2()
    {
        return $this->x2;
    }
}
