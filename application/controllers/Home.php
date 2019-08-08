<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->helper(array('form'));
    }

    public function index()
    {
        $this->load->view('index');
    }
    public function about()
    {
        $this->load->view('about');
    }
    public function doctors()
    {
        $this->load->view('doctors');
    }
    public function blog()
    {
        $this->load->view('blog');
    }
    public function blogsingle()
    {
        $this->load->view('blog-single');
    }
    public function services()
    {
        $this->load->view('services');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function login()
    {
        $this->load->view('login');
    }
}
