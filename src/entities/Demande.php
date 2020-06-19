<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="demande")
 **/
class Demande
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $date;

    /** @Column(type="string") **/
    private $motivation;

    /**
     * Many demandes have one offre. This is the owning side.
     * @ManyToOne(targetEntity="Offre", inversedBy="demande", cascade={"persist"})
     * @JoinColumn(name="offre_id", referencedColumnName="id")
     */
    private $offre;

    /**
     * Many demandes have one demandeur. This is the owning side.
     * @ManyToOne(targetEntity="Demandeur", inversedBy="demande", cascade={"persist"})
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * Demande constructor.
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * @param mixed $motivation
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;
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