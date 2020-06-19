<?php

use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity
 * @Table(name="user")
 **/

class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $login;
    /** @Column(type="string") **/
    private $passwd;
    /** @Column(type="string") **/
    private $email;
    /**
     * @OneToOne(targetEntity="Demandeur", mappedBy="user")
     */
    private $demandeur;

    /**
     * @OneToOne(targetEntity="Entreprise", mappedBy="user")
     */
    private $entreprise;

    /**
     * User constructor.
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

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
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

}