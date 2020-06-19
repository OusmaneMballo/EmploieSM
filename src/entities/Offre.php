<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="offre")
 **/

class Offre
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $titre;

    /** @Column(type="string") **/
    private $description;

    /** @Column(type="string") **/
    private $domaine;

    /** @Column(type="string") **/
    private $niveau;

    /** @Column(type="string") **/
    private $profil;

    /**
     * Many offres have one entreprise. This is the owning side.
     * @ManyToOne(targetEntity="Entreprise", inversedBy="offre", cascade={"persist"})
     * @JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $entreprise;

    /**
     * One offre has many demandes. This is the inverse side.
     * @OneToMany(targetEntity="Demande", mappedBy="offre")
     */
    private $demande;

    /**
     * Offre constructor.
     */
    public function __construct()
    {
        $this->demande = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * @return mixed
     */
    public function getDemande()
    {
        return $this->demande;
    }

    /**
     * @param mixed $demande
     */
    public function setDemande($demande)
    {
        $this->demande = $demande;
    }

}