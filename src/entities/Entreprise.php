<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="entreprise")
 **/

class Entreprise
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $nom;

    /** @Column(type="string") **/
    private $description;

    /** @Column(type="string") **/
    private $domaine;

    /** @Column(type="string") **/
    private $photo;

    /** @Column(type="string") **/
    private $adresse;

    /**
     * One entreprise has many offre. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="entreprise", cascade={"persist"})
     */
    private $offre;

    /**
     * One entreprise have one User. This is the owning side.
     * @OneToOne(targetEntity="User", inversedBy="entreprise", cascade={"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Entreprise constructor.
     */
    public function __construct()
    {
        $this->offre = new ArrayCollection();
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * @param mixed $offre
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;
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


}