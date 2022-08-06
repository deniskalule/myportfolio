<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('home');
        // $this->load->view('about');
        $this->load->view('includes/footer');
    }

    public function about()
    {
        $this->load->view('includes/header');
        $this->load->view('about');
        $this->load->view('includes/footer');
    }

    public function projects()
    {
        $this->load->view('includes/header');
        $this->load->view('projects');
        $this->load->view('includes/footer');
    }

    public function services()
    {
        $this->load->view('includes/header');
        $this->load->view('services');
        $this->load->view('includes/footer');
    }
}