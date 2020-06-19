<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="favorie")
 **/
class Favorie
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $libelle;

    /** @Column(type="string") **/
    private $nbrexperience;

    /**
     * Many favorie have one demandeur. This is the owning side.
     * @ManyToOne(targetEntity="Demandeur", inversedBy="favorie")
     * @JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * Favorie constructor.
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
    public function getNbrexperience()
    {
        return $this->nbrexperience;
    }

    /**
     * @param mixed $nbrexperience
     */
    public function setNbrexperience($nbrexperience)
    {
        $this->nbrexperience = $nbrexperience;
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