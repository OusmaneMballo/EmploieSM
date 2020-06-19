<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="experience")
 **/
class Experience
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $poste;

    /** @Column(type="string") **/
    private $datedebut;

    /** @Column(type="string") **/
    private $datefin;

    /** @Column(type="string") **/
    private $lieux;

    /** @Column(type="string") **/
    private $mission;

    /**
     * Many experience have one demandeur. This is the owning side.
     * @ManyToOne(targetEntity="Demandeur", inversedBy="experience")
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * Experience constructor.
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
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
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
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param mixed $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
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