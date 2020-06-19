<?php

use libs\system\Controller;
use src\model\OffreRepository;
use src\model\DemandeurRepository;
use src\model\DemandeRepository;
class OffreController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function index()
    {
        $data['user']=$_SESSION['user'];
        return $this->view->load('entreprise/offre/index',$data);
    }

    public function addoffre()
    {
        if(isset($_POST))
        {
            $offreRepos=new OffreRepository();
            $offre=new Offre();
            $offre->setDescription($_POST['description']);
            $offre->setProfil($_POST['profil']);
            $offre->setDomaine($_POST['domaine']);
            $offre->setTitre($_POST['titre']);
            $offre->setEntreprise($_SESSION['user']->getEntreprise());
            if($_POST['niveau']==1)
            {
                $offre->setNiveau('Debutant');
            }
            else{
                if($_POST['niveau']==2)
                {
                    $offre->setNiveau('2ans Experiences');
                }
                else{
                    if($_POST['niveau']==3)
                    {
                        $offre->setNiveau('3ans Experiences');
                    }
                    else{
                        if($_POST['niveau']==4)
                        {
                            $offre->setNiveau('4ans Experiences');
                        }
                        else{
                            if($_POST['niveau']==5)
                            {
                                $offre->setNiveau('5ans Experiences');
                            }
                            else{
                                if($_POST['niveau']==6)
                                {
                                    $offre->setNiveau('Plus 5ans Experiences');
                                }
                            }
                        }
                    }
                }
            }
            $id=$offreRepos->addOffre($offre);

            if($id!=0)
            {
                $data['user']=$_SESSION['user'];
                return $this->view->load('entreprise/offre/index',$data);
                /*$offre->getId($id);
                 $offre->setEntreprise($_SESSION['user']->getEntreprise());
                 if($offreRepos->updateOffre($offre)!=0)
                 {
                     $data['user']=$_SESSION['user'];
                     return $this->view->load('entreprise/offre/index',$data);
                } */
            }

        }

        $data['user']=$_SESSION['user'];
        return $this->view->load('entreprise/offre/add',$data);
    }

    public function listOffre()
    {
        $offreRepos=new OffreRepository();
        $listoffre=$offreRepos->listeOffre();

        $data['user']=$_SESSION['user'];
        $data['listoffre']=$listoffre;
        return $this->view->load('offre/index',$data);
    }

    public function detail($id)
    {
        $offreRepos=new OffreRepository();
        $offre=$offreRepos->getOffre($id);

        $data['user']=$_SESSION['user'];
        $data['offre']=$offre;
        return $this->view->load('offre/detail',$data);
    }

}
