<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="formation")
 **/
class Formation
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $libelle;

    /** @Column(type="string") **/
    private $datedebut;

    /** @Column(type="string") **/
    private $datefin;

    /** @Column(type="string") **/
    private $lieux;

    /**
     * Many formation have one demandeur. This is the owning side.
     * @ManyToOne(targetEntity="Demandeur", inversedBy="formation")
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * Formation constructor.
     */
    public function __construct()
    {
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param mixed $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param mixed $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * @return mixed
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * @param mixed $lieux
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;
    }

    /**
     * @return mixed
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * @param mixed $demandeur
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;
    }


}