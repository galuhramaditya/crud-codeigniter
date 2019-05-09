<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

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
    public function index()
    {
        return $this->output->set_output(json_encode($this->user->get_data()));
    }

    public function create()
    {
        $insert = $this->user->insert_data([
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password'),
        ]);

        if ($insert) return $this->output->set_output(json_encode("success"));
        return $this->output->set_output(json_encode('failed'))->set_status_header(401);
    }
}
