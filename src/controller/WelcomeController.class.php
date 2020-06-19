<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
use libs\system\Controller;
class WelcomeController extends Controller
{

    /*public function __construct(){
        parent::__construct();
        session_start();
        if(isset($_SESSION['user']))
        {

            return $this->view->redirect("welcome");
            //return $this->view->load("welcome/index");
        }
        else{
            $data['user']=$_SESSION['user'];
        }
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    /*public function index(){
         return $this->view->load("welcome/index");
     }*/

    public function __construct()
    {
        parent::__construct();
    }

     public function index(){
         return $this->view->load("welcome/index");
     }
}
?>