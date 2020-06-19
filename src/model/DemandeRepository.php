<?php


namespace src\model;


use libs\system\Model;

class DemandeRepository extends Model
{
    public function addDemande($demande)
    {
        if($this->db != null)
        {
            $this->db->persist($demande);
            $this->db->flush();

            return $demande->getId();
        }
    }

    public function listeDemande()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Demande')->findAll();
        }
    }

    public function findByDemandeur($demandeur)
    {
        if($this->db != null)
        {
            $listdemande=$this->listeOfEntreprise();
            if($listdemande!=null)
            {
                foreach ($listdemande as $demande)
                {
                    if($demande->getDemandeur()->getId()==$demandeur->getId())
                    {
                        return $demande;
                    }
                }
            }
        }
        return null;
    }

}