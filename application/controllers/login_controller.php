<?php if( ! defined('BASEPATH'))  exit('No direct script access allowed');

    class login_controller extends CI_Controller{


        public function __construct() {
            parent::__construct();
            //$this->load->model( 'login_model')
            //llamo al helper url
            //$this->load->helper("url"); 
            //llamo o incluyo el modelo
        
            //cargo la libreria de sesiones
            //$this->load->library("session");

       }

       public function index()
       {

           if(isset($_REQUEST['password'])){
                $this->load->model('login_model');
                if($this->login_model->login($_REQUEST['username'], $_REQUEST['password'])){
                    redirect('proveedor_controller');
                }else{
                    redirect('https://localhost/ExamenAHW/');//colocar una pantalla de error
                }
                
           }
           $titulo = "Ingresar";
           $this->load->view("plantillas/cabecera",$titulo);
           $this->load->view('login/login_view');
           $this->load->view("plantillas/pie");
       }


    }

?>