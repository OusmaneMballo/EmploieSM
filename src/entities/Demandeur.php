<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="demandeur")
 **/

class Demandeur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $prenomnom;

    /** @Column(type="integer") **/
    private $nbrexperence;

    /** @Column(type="string") **/
    private $statut;

    /** @Column(type="string") **/
    private $cv;

    /** @Column(type="string") **/
    private $photo;

    /** @Column(type="string") **/
    private $adresse;

    /**
     * One demandeur has many demandes. This is the inverse side.
     * @OneToMany(targetEntity="Demande", mappedBy="demandeur")
     */
    private $demande;

    /**
     * One demandeur has many favorie. This is the inverse side.
     * @OneToMany(targetEntity="Favorie", mappedBy="demandeur")
     */
    private $favorie;

    /**
     * One demandeur have one User. This is the owning side.
     * @OneToOne(targetEntity="User", inversedBy="demandeur", cascade={"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * One demandeur has many formation. This is the inverse side.
     * @OneToMany(targetEntity="Formation", mappedBy="demandeur")
     */
    private $formation;

    /**
     * One demandeur has many experience. This is the inverse side.
     * @OneToMany(targetEntity="Experience", mappedBy="demandeur")
     */
    private $experience;

    /**
     * Demandeur constructor.
     */
    public function __construct()
    {
        $this->demande = new ArrayCollection();
        $this->favorie = new ArrayCollection();
        $this->formation = new ArrayCollection();
        $this->experience = new ArrayCollection();

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
    public function getPrenomNom()
    {
        return $this->prenomnom;
    }

    /**
     * @param mixed $prenomnom
     */
    public function setPrenomNom($prenomnom)
    {
        $this->prenomnom = $prenomnom;
    }

    /**
     * @return mixed
     */
    public function getNbrexperence()
    {
        return $this->nbrexperence;
    }

    /**
     * @param mixed $nbrexperence
     */
    public function setNbrexperence($nbrexperence)
    {
        $this->nbrexperence = $nbrexperence;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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

    /**
     * @return mixed
     */
    public function getFavorie()
    {
        return $this->favorie;
    }

    /**
     * @param mixed $favorie
     */
    public function setFavorie($favorie)
    {
        $this->favorie = $favorie;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

}