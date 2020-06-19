<?php


namespace src\model;


use libs\system\Model;

class EntrepriseRepository extends Model
{

    /**
     * EntrepriseRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addEntreprise($entreprise)
    {
        if($this->db != null)
        {
            $this->db->persist($entreprise);
            $this->db->flush();

            return $entreprise->getId();
        }
    }

    public function listeOfEntreprise()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Entreprise')->findAll();
        }
    }

    public function findByUser($user)
    {
        if($this->db != null)
        {
            $listentreprise=$this->listeOfEntreprise();
            if($listentreprise!=null)
            {
                foreach ($listentreprise as $entreprise)
                {
                    if($entreprise->getUser()->getId()==$user->getId())
                    {
                        return $entreprise;
                    }
                }
            }
        }
        return null;
    }

    public function updateEntreprise($entreprise){
        if($this->db != null)
        {
            $getEntreprise = $this->db->find('Entreprise', $entreprise->getId());
            if($getEntreprise != null)
            {
                $getEntreprise->setNom($entreprise->getNom());
                $getEntreprise->setDescription($entreprise->getDescription());
                $getEntreprise->setDomaine($entreprise->getDomaine());
                $getEntreprise->setPhoto($entreprise->getPhoto());
                $getEntreprise->setAdresse($entreprise->getAdresse());
                $this->db->flush();

            }else {
                die("Objet ".$entreprise->getId()." does not existe!!");
            }
        }
    }
}