<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('coborff/start');

        $fb_user = $this->facebook->get_user();
        $data["fb_user"] = $fb_user;
        if (!$fb_user) {
            $data["login_url"] = $this->facebook->login_url();
        }

        $this->load->view('welcome_message', $data);
        $this->load->view('coborff/end');
    }

}
