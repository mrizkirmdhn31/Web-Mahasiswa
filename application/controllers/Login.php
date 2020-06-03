<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function index()
    {
        $data['title'] = 'CodeIgniter Simple Login Form With Sessions';
        $this->load->view("pages/form_login",$data);
    }

    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('m_login');
            if($this->m_login->can_login($username,$password))
            {
                $session_data = array(
                    'username'=>$username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url(). 'Login/enter');
            }
            else
            {
                $this->session->set_flashdata('error','Invalis Username and Password !!!');
                redirect(base_url(). 'Login/index');
            }
            
        }
        else
            {
                $this->login();
            }
    }

    function enter()
    {
        if($this->session->userdata('username')!='')
        {
            redirect(base_url(). 'Halaman');
        }
        else
        {
            redirect(base_url(). 'Login/index');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url(). 'Login/index');
    }
}