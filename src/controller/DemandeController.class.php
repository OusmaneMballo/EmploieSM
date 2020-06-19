<?php
use libs\system\Controller;
use src\model\OffreRepository;
use src\model\DemandeurRepository;
use src\model\DemandeRepository;

class DemandeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function index()
    {
        $data['user']=$_SESSION['user'];
        return $this->view->load('demande/index',$data);
    }

    public function postuler($id)
    {
        $offreRepos=new OffreRepository();
        $demandeRepos=new DemandeRepository();
        $demande=new Demande();
        $offre=$offreRepos->getOffre($id);
        if($offre!=null)
        {
            //die($offre->getDomaine());
            if(isset($_POST) && $_POST['motivation']!='')
            {
                $demande->setMotivation($_POST['motivation']);
                $demande->setDate(date('d-m-y'));
                $demande->setDemandeur($_SESSION['user']->getDemandeur());
                $demande->setOffre($offre);
                if($demandeRepos->addDemande($demande)!=0)
                {
                    $data['user']=$_SESSION['user'];
                    $data['offre']=$offre;
                    $data['ok']=1;
                    return $this->view->load('offre/index',$data);
                }
            }
        }

        $data['user']=$_SESSION['user'];
        $data['offre']=$offre;
        $data['error']=1;
        return $this->view->load('offre/detail',$data);

    }
}
