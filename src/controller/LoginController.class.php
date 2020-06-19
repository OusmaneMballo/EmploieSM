<?php
use libs\system\Controller;
use src\model\DemandeurRepository;
use src\model\EntrepriseRepository;
use src\model\UserRepository;

//session_start();

class LoginController extends Controller
{
    private $data;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        session_start();

        if(isset($_SESSION['user']) && $_SESSION['user']=='')
        {
            return $this->view->load('login/index');
        }

    }


    public function index()
    {
        return $this->view->load('login/index');
    }

    public function inscrirHome()
    {
        return $this->view->load('login/inscrirDemandeur');
    }
    public function inscrirHomeEntreprise()
    {
        return $this->view->load('login/inscrirEntreprise');
    }

    public function inscrirDemandeur()
    {
        if(isset($_POST))
         {
             $demandeurRepo=new DemandeurRepository();
            $user=new User();
            $demandeur=new Demandeur();
            $user->setEmail($_POST['email']);
            $user->setLogin($_POST['login']);
            $user->setPasswd($_POST['pass']);
            $demandeur->setPrenomNom($_POST['fullname']);
            $demandeur->setUser($user);
            $demandeurRepo->addDemandeur($demandeur);


            $_SESSION['demandeur']=$demandeur;
            $data['demandeur']=$_SESSION['demandeur'];

             return $this->view->load('demandeur/index',$data);

         }

    }

    public function inscrirEntreprise()
    {
        if(isset($_POST))
        {
            $entrepriseRepo=new EntrepriseRepository();
            $userRepos=new UserRepository();
            $user=new User();
            $entreprise=new Entreprise();
            $user->setEmail($_POST['email']);
            $user->setLogin($_POST['login']);
            $user->setPasswd($_POST['pass']);
            $entreprise->setNom($_POST['nom']);
            $entreprise->setDomaine($_POST['domaine']);
            $entreprise->setAdresse($_POST['adresse']);
            $entreprise->setUser($user);
            $entrepriseRepo->addEntreprise($entreprise);

            $_SESSION['user']=$userRepos->login($_POST['login'], $_POST['pass']);;
            $data['user']=$_SESSION['user'];

            return $this->view->load('entreprise/index',$data);

        }

    }

    public function connexion()
    {
        if(isset($_POST))
        {
            $userRepos=new UserRepository();

            try{
                $user=$userRepos->login($_POST['login'], $_POST['pass']);
                $data['user']='';
                if($user->getDemandeur()!=null)
                {
                    $_SESSION['user']=$user;
                    $data['user']=$_SESSION['user'];
                    return $this->view->load('demandeur/index',$data);
                }
                else
                {
                    if($user->getEntreprise()!=null)
                    {
                        $_SESSION['user']=$user;
                        $data['user']=$_SESSION['user'];
                        return $this->view->load('entreprise/index',$data);
                    }
                }

            }catch (Exception $exception){
                $data['error']=1;
                return $this->view->load('login/index',$data);
            }

        }
    }

    public function deconnexion()
    {
        $_SESSEION=array();
        session_destroy();
        unset($_SESSEION);
        return $this->view->load('Welcome/index');
    }

}