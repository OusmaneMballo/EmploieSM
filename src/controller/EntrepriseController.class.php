<?php
use  libs\system\Controller;
use src\service\upload\SamaneUpload;
use \src\model\EntrepriseRepository;
use \src\model\UserRepository;
class EntrepriseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['user']=$_SESSION['user'];
        return $this->view->load('entreprise/index',$data);
    }

    public function profil()
    {
        $data['user']=$_SESSION['user'];

        return $this->view->load('entreprise/profil/edit',$data);
    }

    public function edit(){
        if(isset($_POST))
        {
                $entrepriseRepos=new EntrepriseRepository();
                $userRepos=new UserRepository();
                $entreprise=new Entreprise();
                $entreprise->setId($_SESSION['user']->getEntreprise()->getId());
                $entreprise->setNom($_SESSION['user']->getEntreprise()->getNom());
                $entreprise->setDomaine($_SESSION['user']->getEntreprise()->getDomaine());
                $entreprise->setAdresse($_SESSION['user']->getEntreprise()->getAdresse());
                $entreprise->setDescription($_POST['description']);

                if($_FILES['fileName']['name']!='')
                {
                    $entreprise->setPhoto($_FILES['fileName']['name']);
                    $this->upload();
                }
                else{
                    $entreprise->setPhoto($_SESSION['user']->getEntreprise()->getPhoto());
                }
            $entrepriseRepos->updateEntreprise($entreprise);
            $_SESSION['user']=$userRepos->login($_SESSION['user']->getLogin(),$_SESSION['user']->getPasswd());
            $data['user']=$_SESSION['user'];
            return $this->view->load('entreprise/index',$data);
        }

        $data['user']=$_SESSION['user'];
        return $this->view->load('entreprise/profil/edit',$data);
    }

    public function upload()
    {
        $upload = new SamaneUpload();
        /**
         * Name of form input
         */
        $formInputName = 'fileName';
        /**
         * Root of uploading file
         */
        $folder = 'public/image';
        /**
         * optional
         * So you can define it to null
         * Example:  $extensionsAllowed = null;
         */
        $extensionsAllowed = 'png,img,jpg';//which file types are allowed seperated by comma : you mast add (samane,)

        return $upload->load($formInputName, $folder, $extensionsAllowed);

    }

    public function poste()
    {
        $data['user']=$_SESSION['user'];
        return $this->view->load('entreprise/offre/add',$data);
    }

}
