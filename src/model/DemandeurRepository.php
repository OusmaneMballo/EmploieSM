<?php


namespace src\model;


use libs\system\Model;

class DemandeurRepository extends Model
{

    /**
     * Methods with DQL (Doctrine Query Language)
     */

    /**
     * DemandeurRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addDemandeur($demandeur)
    {
        if($this->db != null)
        {
            $this->db->persist($demandeur);
            $this->db->flush();

            return $demandeur->getId();
        }
    }

    public function listeOfdemandeur()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Demandeur')->findAll();
        }
    }

    public function findByUser($user)
    {
        if($this->db != null)
        {
            $listdemandeur=$this->listeOfdemandeur();
            if($listdemandeur!=null)
            {
                foreach ($listdemandeur as $demandeur)
                {
                    if($demandeur->getUser()->getId()==$user->getId())
                    {
                        return $demandeur;
                    }
                }
            }
        }
        return null;
    }
}