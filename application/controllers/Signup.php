<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }

    public function index(){
        if ($data=$this->input->post()){

            $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);

            $this->Crud_model->insert('users', $_POST);

            //todo: inset status data ;
            $data= array();
            $this->Crud_model->insert('admission_process_status', $data);
            redirect("Login");
        }
        else{
            $this->load->view('signup');
        }
    }

    public function insert_user(){

        $data=array();
        $data['email']="admin@sdhh.com";
        $data['password']="123";


        $this->Crud_model->insert('users', $data);
    }
}