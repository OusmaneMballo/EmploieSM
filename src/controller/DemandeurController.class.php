<?php
use libs\system\Controller;

class DemandeurController extends Controller
{

    /**
     * DemandeureController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function index()
    {
        $data['user']=$_SESSION['user'];
        return $this->view->load('demandeur/index');
    }

    public function complement()
    {
        $data['user']=$_SESSION['user'];
        //var_dump($_SESSION['user']);
        //die('');
        return $this->view->load('demandeur/completer',$data);
    }

    public function profil()
    {
        $data['demandeur']=$_SESSION['demandeur'];
        return $this->view->load('demandeur/profil',$data);
    }
}
