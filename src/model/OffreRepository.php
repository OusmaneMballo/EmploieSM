<?php


namespace src\model;
use  libs\system\Model;

class OffreRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addOffre($offre)
    {
        if($this->db != null)
        {
            $this->db->persist($offre);
            $this->db->flush();

            return $offre->getId();
        }
    }

    public function listeOffre()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Offre')->findAll();
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

    public function updateOffre($offre){
        if($this->db != null)
        {
            $getOffre = $this->db->find('Offre', $offre->getId());
            if($getOffre != null)
            {
                $getOffre->setTitre($offre->getTitre());
                $getOffre->setDescription($offre->getDescription());
                $getOffre->setDomaine($offre->getDomaine());
                $getOffre->setProfil($offre->getProfil());
                $getOffre->setNiveau($offre->getNiveau());
                $getOffre->setEntreprise($offre->getEntreprise());
                $this->db->flush();

            }else {
                die("Objet ".$offre->getId()." does not existe!!");
            }
        }
    }

    public function findByIdEntreprise($identreprise)
    {
        if($this->db != null)
        {
            return $this->db->createQuery('SELECT o FROM Offre o WHERE o.entreprise_id = :id')
                ->setParameter('id', $identreprise)->getSingleResult();
        }
    }

    public function getOffre($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Offre')->find(array('id' => $id));
        }
    }
}